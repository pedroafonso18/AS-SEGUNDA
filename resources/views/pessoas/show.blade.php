@extends('layouts.app')

@section('content')
<h1>Detalhes da Pessoa</h1>

<p><strong>Nome:</strong> {{ $pessoa->nome }}</p>
<p><strong>Idade:</strong> {{ $pessoa->idade }}</p>

<a href="{{ route('pessoas.index') }}">Voltar para a lista</a>
@endsection
