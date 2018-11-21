@extends('layouts.blog')

@section('conteudo')

    <div>
        <h1>{{ $temporada->descricao }}</h1>
    </div>

    <div class="temporadas">
            <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                <div class="card-header">
                    $cronograma->dia 
                </div>
                <div class="card-body row">
                    <div class="col-md">
                        <h5 class="card-title">Tipo</h5>
                        <div>$cronograma->tipo </div>
                    </div>

                    <div class="col-md">
                        <h5 class="card-title">Saída</h5>
                        <div>$cronograma->saida </div>
                    </div>

                    <div class="col-md">
                        <h5 class="card-title">Trajeto</h5>
                        <div>$cronograma->trajeto </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary">Solicitar Viagem</a>
                </div>
            </div>
    </div>

@endsection