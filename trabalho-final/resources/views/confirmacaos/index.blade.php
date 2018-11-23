@extends('layouts.blog')

@section('conteudo')
    <h1 class="my-4">Viagens
        <small>Status</small>
    </h1>

    <div class="row temporadas">
        @foreach($confirmacaos as $confirmacao)

        <div class="card w-75 border-dark" style="margin-bottom: 15px;">
            <div class="card-body">
                <h5 class="card-title">
                    {{$confirmacao->id}}

                    <div style="float: right;">
                        <?php
                            if($confirmacao->status == 0) {
                        ?>
                                <button class="btn btn-danger">Cancelado!</button>
                        <?php
                            } else {
                        ?>
                                <button class="btn btn-success">Aprovado!</button>
                        <?php
                            }
                        ?>
                    </div>
                </h5>

            </div>
        </div>

        @endforeach
    </div>

@endsection