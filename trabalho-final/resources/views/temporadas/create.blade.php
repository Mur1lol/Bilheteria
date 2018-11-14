@extends('layouts.blog')

@section('titulo')
  Novo Artigo
@endsection

@section('conteudo')
    <div class="container">
        <div class="mt-4">
            {!! Form::open(['route' => 'temporadas.store']) !!}
            <div class="form-group">
                {!! Form::label('inicio', 'Inicio') !!}
                {!! Form::date('inicio', '', ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descricao', 'Descrição') !!}
                {!! Form::textarea('descricao', '', ['class' => 'form-control', 'rows' => '10', 'required']) !!}
            </div>
            {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection