@extends('layouts.app')

@section('content')
<h1>Lista de Carros</h1>

<a href="{{ route('carros.create') }}">Criar Novo Carro</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Proprietário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <td>{{ $carro->id }}</td>
            <td>{{ $carro->modelo }}</td>
            <td>{{ $carro->ano }}</td>
            <td>{{ $carro->pessoa->nome }}</td>
            <td>
                <a href="{{ route('carros.show', $carro->id) }}">Ver</a>
                <a href="{{ route('carros.edit', $carro->id) }}">Editar</a>
                <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
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
