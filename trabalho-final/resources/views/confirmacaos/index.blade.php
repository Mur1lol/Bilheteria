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

                    </div>
                    <div class="card-body row">
                        <div class="col-md">
                            <h5 class="card-title">Usuario</h5>
                            <div>{{ $confirmacao->user->name }}</div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Cronograma</h5>
                            <div>{{ $confirmacao->cronograma->dia }}</div>
                            <div>{{ $confirmacao->cronograma->saida }}</div>
                            <div>{{ $confirmacao->cronograma->trajeto }}</div>
                        </div>

                        <div class="col-md" style="margin-top: 30px;">

                            @if($confirmacao->status == 0)
                                <button class="btn btn-warning">Em Aguardo!</button>
                            @elseif($confirmacao->status == 1)
                                <button class="btn btn-success">Confirmado!</button>
                            @else
                                <button class="btn btn-danger">Cancelado!</button>
                            @endif
                            
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{ link_to_route(
                        'confirmacaos.edit',
                        'Editar',
                        [$confirmacao->id],
                        ['class' => 'btn btn-info btn-sm']) }}
                    </div>
                </div>
            @elseif ($confirmacao->user == Auth::user())
                <div class="card border-dark text-center" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="card-header">

                    </div>
                    <div class="card-body row">
                        <div class="col-md">
                            <h5 class="card-title">Usuario</h5>
                            <div>{{ $confirmacao->user->name }}</div>
                        </div>

                        <div class="col-md">
                            <h5 class="card-title">Cronograma</h5>
                            <div>{{ $confirmacao->cronograma->dia }}</div>
                            <div>{{ $confirmacao->cronograma->saida }}</div>
                            <div>{{ $confirmacao->cronograma->trajeto }}</div>
                        </div>

                        <div class="col-md" style="margin-top: 30px;">

                            @if($confirmacao->status == 0)
                                <button class="btn btn-warning">Em Aguardo!</button>
                            @elseif($confirmacao->status == 1)
                                <button class="btn btn-success">Confirmado!</button>
                            @else
                                <button class="btn btn-danger">Cancelado!</button>
                            @endif
                            
                        </div>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection