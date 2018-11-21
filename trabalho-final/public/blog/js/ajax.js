$(document).ready(function(){
	$('.pexquisa').submit(function(event) {
		event.preventDefault();
		busca();
	});

	$('.busca-input').keyup(busca);


	function busca() {
		let filtro = $('.busca-input').val();

		$.ajax({
			url: 'busca.json.php',
			data: `filtro=${filtro}`,
			dataType: 'json'
		}).done(function(temporadas){
			$('.temporadas').text('');
			temporadas.forEach(function(temporada){
				populatemporadas(temporada);
			});
		});
	}

	function populatemporadas(temporada) {
		const resultado = `
			<div class="card border-info col-md-3" style="max-width: 18rem; margin: 15px;">
				<div class="card-header">${ temporada.descricao }</div>
				<div class="card-body text-info">
					<h5 class="card-title">${temporada.inicio }</h5>

				
					
				</div>
			</div>
		`;
		$('.temporadas').append(resultado);
	}	

	// $(".bloqueia-link").click(function() {
	// 	const resultado =
		// `<div class="card my-4">
	 //        <h5 class="card-header">Novo Cronograma:</h5>
	 //        <div class="card-body">
	 //            {!! Form::open(['route' => ['cronogramas.store', $temporada->id]]) !!}
	 //                <div class="form-group"> 
	 //                    <label>Dia da Semana</label>
	 //                    <select class="form-control" name="dia" required>
	 //                      <option value="Segunda">Segunda</option>
	 //                      <option value="Terca">Terça</option>
	 //                      <option value="Quarta">Quarta</option>
	 //                      <option value="Quinta">Quinta</option>
	 //                      <option value="Sexta">Sexta</option>
	 //                    </select>
	 //                </div>

	 //                <div class="form-group">
	 //                    <label>Saida</label>
	 //                    <input type="time" name="saida" class="form-control" required>
	 //                </div>

	 //                <div class="form-group">
	 //                    <label>Tipo</label>
	 //                    <select class="form-control" name="tipo" required>
	 //                        <option value="Ida">Ida</option>
	 //                        <option value="Volta">Volta</option>
	 //                    </select>
	 //                </div>

	 //                <div class="form-group">
	 //                    <label>Trajeto</label>
	 //                    <input type="text" name="trajeto" class="form-control" placeholder="Ex: A para B" required>
	 //                </div>

	 //                {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
	 //            {!! Form::close() !!}
	 //        </div>
	 //    </div>`;
	//     $('.bloqueia-link').append(resultado);
	// });

});