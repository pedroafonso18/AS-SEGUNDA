@extends('layouts.app')

@section('content')
<h1>Editar Carro</h1>

<form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="{{ $empresa->nome }}" required>

    <button type="submit">Atualizar</button>
</form>
@endsection
