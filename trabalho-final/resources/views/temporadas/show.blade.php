@extends('layouts.blog')

@section('conteudo')
  <!-- Title -->
  

  <!-- Author -->
  <p class="lead">
    Iniciado em 
    <a href="#">{{ $temporada->inicio }}</a>
  </p>

  <hr>
  <!-- Date/Time -->
  <p>Publicado em {{ $temporada->created_at }}</p>

  <hr>

  <!-- Post Content -->
  <p>{{ $temporada->descricao }}</p>

  <hr>

@endsection