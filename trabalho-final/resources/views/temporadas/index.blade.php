@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h1>TEMPORADA</h1>
    <div class="row">
        @foreach($temporadas as $temporada)

            <!-- <div class="card text-center mb-3">
				<div class="card-header">
					{{ $temporada->descricao }}
				</div>
				<div class="card-body">
					<h5 class="card-title">{{ $temporada->descricao }}</h5>
					<p class="card-text">{{ $temporada->inicio }}</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
				<div class="card-footer text-muted">
					{{ $temporada->created_at->diffForHumans() }}
				</div>
			</div> -->


				<div class="card border-info col-md-4" style="max-width: 18rem; margin: 5px;">
					<div class="card-header">{{ $temporada->descricao }}</div>
					<div class="card-body text-info">
						<h5 class="card-title">{{ $temporada->inicio }}</h5>
						<p class="card-text">{{ $temporada->created_at->diffForHumans() }}</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>

        @endforeach

    </div>
</div>
@endsection
