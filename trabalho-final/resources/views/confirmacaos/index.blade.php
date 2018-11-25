@extends('layouts.blog')

@section('conteudo')
    <h1 class="my-4">Viagens
        <small>Status</small>
    </h1>

    <div class="confirmacaos">
        @foreach($confirmacaos as $confirmacao)
            @if (Auth::user()->id == 1)
                <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="card-header">
                        {{ link_to_route(
                            'confirmacaos.show',
                            'Lista de Passageiros',
                            [$confirmacao->id],
                            ['class' => 'btn btn-primary']) }}
                    </div>
                    <div class="card-body row">
                        <div class="col-md">
                            <h5 class="card-title">Usuario</h5>
                            <div></div>
                            <div>{{ $confirmacao->user->name }}</div>
                            <div></div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Cronograma</h5>
                            <div>{{ $confirmacao->cronograma->dia }}</div>
                            <div>{{ $confirmacao->cronograma->saida }}</div>
                            <div>{{ $confirmacao->cronograma->trajeto }}</div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Status</h5>
                            <div></div>
                            @if($confirmacao->status == 0)
                                <button class="btn btn-warning">Em Aguardo!</button>
                            @elseif($confirmacao->status == 1)
                                <button class="btn btn-success">Confirmado!</button>
                            @else
                                <button class="btn btn-danger">Cancelado!</button>
                            @endif
                            <div></div>
                            
                        </div>
                    </div>
                    <div class="card-footer text-muted row">
                        <div class="col-md">
                            {!! Form::open(['route' => ['confirmacaos.update', $confirmacao->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::text('status', '1', ['class' => 'form-control','placeholder' => '0, 1, 2', 'hidden']) !!}
                            </div>
                            {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                        </div>
                        <!-- <div class="col-md">
                            {!! Form::open(['route' => ['confirmacaos.update', $confirmacao->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::text('status', '0', ['class' => 'form-control','placeholder' => '0, 1, 2', 'hidden']) !!}
                            </div>
                            {!! Form::submit('Esperar', ['class' => 'btn btn-warning']) !!}
                        {!! Form::close() !!}
                        </div> -->
                        <div class="col-md">
                            {!! Form::open(['route' => ['confirmacaos.update', $confirmacao->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::text('status', '2', ['class' => 'form-control','placeholder' => '0, 1, 2', 'hidden']) !!}
                            </div>
                            {!! Form::submit('Cancelar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @elseif ($confirmacao->user == Auth::user())
                <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="card-header">
                        {{ link_to_route(
                            'confirmacaos.show',
                            'Lista de Passageiros',
                            [$confirmacao->id],
                            ['class' => 'btn btn-primary']) }}
                    </div>
                    <div class="card-body row">
                        <div class="col-md">
                            <h5 class="card-title">Usuario</h5>
                            <div></div>
                            <div>{{ $confirmacao->user->name }}</div>
                            <div></div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Cronograma</h5>
                            <div>{{ $confirmacao->cronograma->dia }}</div>
                            <div>{{ $confirmacao->cronograma->saida }}</div>
                            <div>{{ $confirmacao->cronograma->trajeto }}</div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Status</h5>
                            <div></div>
                            @if($confirmacao->status == 0)
                                <button class="btn btn-warning">Em Aguardo!</button>
                            @elseif($confirmacao->status == 1)
                                <button class="btn btn-success">Confirmado!</button>
                            @else
                                <button class="btn btn-danger">Cancelado!</button>
                            @endif
                            <div></div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="col-md">
                            {!! Form::open(['route' => ['confirmacaos.update', $confirmacao->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::text('status', '2', ['class' => 'form-control','placeholder' => '0, 1, 2', 'hidden']) !!}
                            </div>
                            {!! Form::submit('Cancelar Viagem', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection