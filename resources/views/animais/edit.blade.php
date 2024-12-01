@extends('layouts.app')

@section('content')
<h1>Editar Carro</h1>

<form action="{{ route('animais.update', $animal->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="{{ $animal->nome }}" required>

    <label for="especie">Espécie:</label>
    <input type="text" name="especie" value="{{ $animal->especie }}" required>

    <button type="submit">Atualizar</button>
</form>
@endsection
