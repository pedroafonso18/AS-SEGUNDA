@extends('layouts.app')

@section('content')
<h1>Detalhes do Livro</h1>

<p><strong>Título:</strong> {{ $livro->titulo }}</p>
<p><strong>Autor:</strong> {{ $livro->autor }}</p>

<a href="{{ route('livros.index') }}">Voltar para a lista</a>
@endsection
