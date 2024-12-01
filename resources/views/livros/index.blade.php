@extends('layouts.app')

@section('content')
<h1>Lista de Pedidos</h1>

<a href="{{ route('livros.create') }}">Criar Novo Livro</a>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
        <tr>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>
                <a href="{{ route('livros.show', $livro->id) }}">Ver</a>
                <a href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
