@extends('layouts.app')

@section('content')
<h1>Criar Novo Carro</h1>

<form action="{{ route('carros.store') }}" method="POST">
    @csrf
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required>

    <label for="ano">Ano:</label>
    <input type="number" name="ano" required>

    <label for="pessoa_id">Proprietário:</label>
    <select name="pessoa_id" required>
        @foreach ($pessoas as $pessoa)
            <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
        @endforeach
    </select>

    <button type="submit">Salvar</button>
</form>
@endsection
