@extends('layouts.app')

@section('content')
<h1>Editar Carro</h1>

<form action="{{ route('carros.update', $carro->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" value="{{ $carro->modelo }}" required>

    <label for="ano">Ano:</label>
    <input type="number" name="ano" value="{{ $carro->ano }}" required>

    <label for="pessoa_id">Proprietário:</label>
    <select name="pessoa_id" required>
        @foreach ($pessoas as $pessoa)
            <option value="{{ $pessoa->id }}" {{ $carro->pessoa_id == $pessoa->id ? 'selected' : '' }}>
                {{ $pessoa->nome }}
            </option>
        @endforeach
    </select>

    <button type="submit">Atualizar</button>
</form>
@endsection
