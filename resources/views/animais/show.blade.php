@extends('layouts.app')

@section('content')
<h1>Detalhes do Animal</h1>

<p><strong>Nome:</strong> {{ $animal->nome }}</p>
<p><strong>Espécie:</strong> {{ $animal->especie }}</p>

<a href="{{ route('animais.index') }}">Voltar para a lista</a>
@endsection
