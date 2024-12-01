@extends('layouts.app')

@section('content')
<h1>Editar Carro</h1>

<form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="codigo">Código:</label>
    <input type="text" name="codigo" value="{{ $pedido->codigo }}" required>

    <button type="submit">Atualizar</button>
</form>
@endsection
