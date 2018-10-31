@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h1>TEMPORADA</h1>
    <div>
        @foreach($temporadas as $temporada)


            <div class="card text-center mb-3">
				<div class="card-header">
					Featured
				</div>
				<div class="card-body">
					<h5 class="card-title">{{ $temporada->descricao }}</h5>
					<p class="card-text">{{ $temporada->inicio }}</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
				<div class="card-footer text-muted">
					2 days ago
				</div>
			</div>

			<!-- <div class="card border-info mb-3" style="max-width: 18rem;">
				<div class="card-header">{{ $temporada->descricao }}</div>
				<div class="card-body">
					<h5 class="card-title">{{ $temporada->descricao }}</h5>
					<p class="card-text">{{ $temporada->inicio }}</p>
				</div>
			</div>
 -->

        @endforeach

    </div>
</div>
@endsection
