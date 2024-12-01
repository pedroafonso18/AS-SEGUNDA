@extends('layouts.app')

@section('content')
<h1>Lista de Pessoas</h1>

<a href="{{ route('pessoas.create') }}">Criar Nova Pessoa</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pessoas as $pessoa)
        <tr>
            <td>{{ $pessoa->id }}</td>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->idade }}</td>
            <td>
                <a href="{{ route('pessoas.show', $pessoa->id) }}">Ver</a>
                <a href="{{ route('pessoas.edit', $pessoa->id) }}">Editar</a>
                <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST" style="display:inline;">
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
