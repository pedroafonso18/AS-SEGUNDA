@extends('layouts.app')

@section('content')
<h1>Detalhes da Empresa</h1>

<p><strong>Nome:</strong> {{ $empresa->nome }}</p>


<a href="{{ route('nomes.index') }}">Voltar para a lista</a>
@endsection
