@extends('layouts.blog')

@section('conteudo')

    <div class="my-4">
        <h1>{{ $temporada->nome }}</h1>
        <h3><small>{{ $temporada->descricao }}</small></h3>
    </div>

    @guest


    @else
    @if (Auth::user()->id == 1)
        <div class="card my-4">
            <h5 class="card-header aparece">Novo Cronograma</h5>
            <div class="card-body esconde">
                {!! Form::open(['route' => ['cronogramas.store', $temporada->id]]) !!}
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group"> 
                                <label for="dia">Dia da Semana</label>
                                <select class="form-control" name="dia" id="dia" required>
                                    <option value="Segunda">Segunda</option>
                                    <option value="Terca">Terça</option>
                                    <option value="Quarta">Quarta</option>
                                    <option value="Quinta">Quinta</option>
                                    <option value="Sexta">Sexta</option>
                                    <option value="Sabado">Sábado</option>
                                    <option value="Domingo">Domingo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="saida">Saida</label>
                                <input type="time" name="saida" id="saida" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select class="form-control" name="tipo" id="tipo" required>
                                    <option value="Ida">Ida</option>
                                    <option value="Volta">Volta</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="trajeto">Trajeto</label>
                                <input type="text" name="trajeto" id="trajeto" class="form-control" placeholder="Ex: A para B" required>
                            </div>
                        </div>
                    </div>

                    {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endif
    @endguest

    <div class="cronogramas">
         @foreach($temporada->cronogramas as $cronograma)
            <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                <div class="card-header">
                    <h5 class="card-title" style="text-transform: uppercase;">{{ $cronograma->dia }}</h5>
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
                    {!! Form::open(['route' => ['confirmacaos.store', $temporada->id, $cronograma->id]]) !!}

                        {!! Form::number('status', '0', ['class' => 'form-control', 'hidden']) !!}

                        {!! Form::submit('Solicitar Viagem', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    </div>

@endsection