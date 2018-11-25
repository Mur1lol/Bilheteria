@extends('layouts.blog')

@section('conteudo')
    <h1 class="my-4">Viagens
        <small>Status</small>
    </h1>

    <div class="card border-dark text-center">
		<div class="card-header" style="text-transform: uppercase;">
			<h5 class="card-title">
				{{$cronograma->dia}} - {{ $cronograma->saida}}
			</h5>
		</div>
		<div class="row">	
			<div class="col-md">
				<button class="btn btn-success" style="margin: 15px;">Confirmado</button>
				<ul class="list-group list-group-flush">
					@foreach($cronograma->confirmacaos as $confirmacao)					
						@if ($confirmacao->status == 1)
						<li class="list-group-item">{{$confirmacao->user->name}}</li>
						@endif	
					@endforeach	
				</ul>
			</div>
			<div class="col-md">
				<button class="btn btn-warning" style="margin: 15px;">Em Aguardo</button>
				<ul class="list-group list-group-flush">
					@foreach($cronograma->confirmacaos as $confirmacao)
						@if ($confirmacao->status == 0)
						<li class="list-group-item">{{$confirmacao->user->name}}</li>
						@endif
					@endforeach	
				</ul>
			</div>
			<div class="col-md">
				<button class="btn btn-danger" style="margin: 15px;">Cancelado</button>
				<ul class="list-group list-group-flush">
					@foreach($cronograma->confirmacaos as $confirmacao)
						@if ($confirmacao->status == 2)
						<li class="list-group-item">{{$confirmacao->user->name}}</li>
						@endif
					@endforeach	
				</ul>
			</div>
		</div>

	</div>


    <div class="confirmacaos">
        
    </div>

@endsection