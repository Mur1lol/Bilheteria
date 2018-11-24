@extends('layouts.blog')

@section('titulo')
  Editando Confirmação
@endsection

@section('conteudo')
	
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<strong>Códigos:</strong> 
	<ul class="navbar-nav mr-auto">
		<li class="nav-item"><div class="nav-link">0 = Em Aguardo!</div></li>
		<li class="nav-item"><div class="nav-link">1 = Confirmado!</div></li>
		<li class="nav-item"><div class="nav-link">2 = Cancelado!</div></li>
	</ul>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="mt-4">
    {!! Form::open(['route' => ['confirmacaos.update', $confirmacao->id], 'method' => 'PUT']) !!}
      
      <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::text('status', '', ['class' => 'form-control','placeholder' => '0, 1, 2', 'required']) !!}
      </div>

      {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>


@endsection