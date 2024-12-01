@extends('layouts.app')

@section('content')
<h1>Criar Novo Animal</h1>

<form action="{{ route('pedidos.store') }}" method="POST">
    @csrf
    <label for="codigo">Código:</label>
    <input type="text" name="codigo" required>


    <button type="submit">Salvar</button>
</form>
@endsection
