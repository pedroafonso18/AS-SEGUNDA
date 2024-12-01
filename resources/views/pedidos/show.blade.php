@extends('layouts.app')

@section('content')
<h1>Detalhes do Pedido</h1>

<p><strong>Código:</strong> {{ $pedido->codigo }}</p>


<a href="{{ route('pedidos.index') }}">Voltar para a lista</a>
@endsection
