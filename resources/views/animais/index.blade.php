@extends('layouts.app')

@section('content')
<h1>Lista de Carros</h1>

<a href="{{ route('animais.create') }}">Criar Novo Animal</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Espécie</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($animais as $animal)
        <tr>
            <td>{{ $animal->nome }}</td>
            <td>{{ $animal->especie }}</td>
            <td>
                <a href="{{ route('animais.show', $animal->id) }}">Ver</a>
                <a href="{{ route('animais.edit', $animal->id) }}">Editar</a>
                <form action="{{ route('animais.destroy', $animal->id) }}" method="POST" style="display:inline;">
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
