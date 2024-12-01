@extends('layouts.app')

@section('content')
<h1>Detalhes do Carro</h1>

<p><strong>Modelo:</strong> {{ $carro->modelo }}</p>
<p><strong>Ano:</strong> {{ $carro->ano }}</p>
<p><strong>Proprietário:</strong> {{ $carro->pessoa->nome }}</p>

<a href="{{ route('carros.index') }}">Voltar para a lista</a>
@endsection
