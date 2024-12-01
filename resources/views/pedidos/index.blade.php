@extends('layouts.app')

@section('content')
<h1>Lista de Pedidos</h1>

<a href="{{ route('pedidos.create') }}">Criar Novo Pedido</a>

<table>
    <thead>
        <tr>
            <th>Código</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->codigo }}</td>
            <td>
                <a href="{{ route('pedidos.show', $pedido->id) }}">Ver</a>
                <a href="{{ route('pedidos.edit', $pedido->id) }}">Editar</a>
                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
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
