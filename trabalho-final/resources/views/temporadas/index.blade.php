@extends('layouts.blog')

@section('conteudo')
	<h1 class="my-4">Temporada
	    <small>Veja as disponiveis</small>
	</h1>

    <div class="row temporadas">
        @foreach($temporadas as $temporada)
        	@guest
			<div class="card border-info col-lg-3" style=" margin: 15px;">
				<div class="card-header">{{ $temporada->nome }}</div>
				<div class="card-body text-info">
					<h5 class="card-title">{{ $temporada->descricao }}</h5>
					<p class="card-text">{{ $temporada->inicio }}</p>
					
					<div style="margin-bottom: 5px;">
						{{ link_to_route(
							'temporadas.show',
							'Visualizar Cronograma',
							[$temporada->id],
							['class' => 'btn btn-primary']
						) }}
					</div>
				</div>
			</div>
			@else
			<div class="card border-info col-lg-3" style=" margin: 15px;">
				<div class="card-header">{{ $temporada->nome }}</div>
				<div class="card-body text-info">
					<h5 class="card-title">{{ $temporada->descricao }}</h5>
					<p class="card-text">{{ $temporada->inicio }}</p>
					
					<div style="margin-bottom: 5px;">
						{{ link_to_route(
							'temporadas.show',
							'Visualizar Cronograma',
							[$temporada->id],
							['class' => 'btn btn-primary']
						) }}
					</div>
					<div>
						@if (Auth::user()->id == 1)
							{{ link_to_route(
								'temporadas.edit',
								'Editar Temporada',
								[$temporada->id],
								['class' => 'btn btn-primary']
							) }}
						@endif
					</div>
				</div>
			</div>
			@endguest
        @endforeach
    </div>

@endsection