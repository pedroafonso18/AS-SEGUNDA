@extends('layouts.app')

@section('content')
<h1>Criar Novo Animal</h1>

<form action="{{ route('animais.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="especie">Espécie:</label>
    <input type="text" name="especie" required>

    <button type="submit">Salvar</button>
</form>
@endsection
