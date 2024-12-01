@extends('layouts.app')

@section('content')
<h1>Editar Carro</h1>

<form action="{{ route('livros.update', $livro->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" value="{{ $livro->titulo }}" required>

    <label for="autor">autor:</label>
    <input type="text" name="autor" value="{{ $livro->autor }}" required>

    <button type="submit">Atualizar</button>
</form>
@endsection
