@extends('layouts.app')

@section('content')
<h1>Criar Nova Pessoa</h1>

<form action="{{ route('pessoas.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" required>

    <button type="submit">Salvar</button>
</form>
@endsection
