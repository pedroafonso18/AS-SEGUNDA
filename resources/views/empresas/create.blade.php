@extends('layouts.app')

@section('content')
<h1>Criar Nova Empresa</h1>

<form action="{{ route('empresas.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <button type="submit">Salvar</button>
</form>
@endsection
