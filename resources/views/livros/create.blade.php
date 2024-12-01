@extends('layouts.app')

@section('content')
<h1>Criar Novo Livro</h1>

<form action="{{ route('animais.store') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="nome" required>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required>

    <button type="submit">Salvar</button>
</form>
@endsection
