@extends('layouts.app')

@section('content')
<h1>Editar Pessoa</h1>

<form action="{{ route('pessoas.update', $pessoa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="{{ $pessoa->nome }}" required>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" value="{{ $pessoa->idade }}" required>

    <button type="submit">Atualizar</button>
</form>
@endsection
