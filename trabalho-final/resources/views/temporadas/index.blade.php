@extends('layouts.blog')

@section('conteudo')
	<h1 class="my-4">Temporada
	    <small>Veja as disponiveis</small>
	</h1>

	<form class="busca" action="" method="get">
		<div class="input-group mb-3">
			<input type="text" class="form-control busca-input" id="basic-url" aria-describedby="basic-addon3" name="filtro" value="">

			<div class="input-group-append">
				<button type="submit" class="input-group-text">
					<span class="fas fa-search"></span>
				</button>
			</div>
		</div>
	</form>

    <div class="row temporadas">
        @foreach($temporadas as $temporada)

			<div class="card border-info col-md-3" style="max-width: 18rem; margin: 15px;">
				<div class="card-header">{{ $temporada->descricao }}</div>
				<div class="card-body text-info">
					<h5 class="card-title">{{ $temporada->inicio }}</h5>
					<p class="card-text">{{ $temporada->created_at->diffForHumans() }}</p>
					{{ link_to_route(
						'temporadas.show',
						'Visualizar &rarr;',
						[$temporada->id],
						['class' => 'btn btn-primary']
					) }}
					<!-- {{ link_to_route(
						'temporadas.edit',
						'Editar &rarr;',
						[$temporada->id],
						['class' => 'btn btn-primary']
					) }} -->
					
				</div>
			</div>

        @endforeach

    </div>
@endsection