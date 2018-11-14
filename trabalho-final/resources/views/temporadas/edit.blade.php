@extends('layouts.blog')

@section('titulo')
  Novo temporada
@endsection

@section('conteudo')
    <div class="container">
        <div class="mt-4">
            {!! Form::open(['route' => ['temporadas.update', $temporada->id], 'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('inicio', 'Inicio') !!}
                {!! Form::date('inicio', '$temporada->inicio', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descricao', 'Descrição') !!}
                {!! Form::textarea('descricao', $temporada->descricao , ['class' => 'form-control', 'rows' => '10', 'required']) !!}
            </div>
            {!! Form::submit('Confirmar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection