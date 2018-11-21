@extends('layouts.blog')

@section('conteudo')

    <div>
        <h1>{{ $temporada->descricao }}</h1>
    </div>

    <div class="card my-4 escondido">
        <h5 class="card-header">Novo Cronograma:</h5>
        <div class="card-body">
            {!! Form::open(['route' => ['cronogramas.store', $temporada->id]]) !!}
                <div class="form-group">  
                    <!-- {!! Form::select('', array(
                        'Segunda' => 'Segunda', 
                        'Terca' => 'Terça', 
                        'Quarta' => 'Quarta', 
                        'Quinta' => 'Quinta', 
                        'Sexta' => 'Sexta'), 
                        ['class' => 'form-control']
                    ) !!} -->
                    <label>Dia da Semana</label>
                    <select class="form-control" name="dia" required>
                      <option value="Segunda">Segunda</option>
                      <option value="Terca">Terça</option>
                      <option value="Quarta">Quarta</option>
                      <option value="Quinta">Quinta</option>
                      <option value="Sexta">Sexta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Saida</label>
                    <input type="time" name="saida" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" name="tipo" required>
                        <option value="Ida">Ida</option>
                        <option value="Volta">Volta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Trajeto</label>
                    <input type="text" name="trajeto" class="form-control" placeholder="Ex: A para B" required>
                </div>

                {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="cronogramas">
         @foreach($temporada->cronogramas as $cronograma)
            <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                <div class="card-header">
                    {{ $cronograma->dia }}
                </div>
                <div class="card-body row">
                    <div class="col-md">
                        <h5 class="card-title">Tipo</h5>
                        <div>{{ $cronograma->tipo }}</div>
                    </div>

                    <div class="col-md">
                        <h5 class="card-title">Saída</h5>
                        <div>{{ $cronograma->saida }}</div>
                    </div>

                    <div class="col-md">
                        <h5 class="card-title">Trajeto</h5>
                        <div>{{ $cronograma->trajeto }}</div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary">Solicitar Viagem</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection