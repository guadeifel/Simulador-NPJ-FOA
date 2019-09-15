@extends('layout')
@section('titulo') Upload da Petição Inicial @endsection

@section('conteudo')
	<div id="app">
		<div class="container">
			<div class="card">
				<duploadpeticaoinicial></duploadpeticaoinicial>
				<!--Botões SALVAR/FECHAR-->
				<div align="center">
					<form action="">
						<button type="submit" class="btn btn-primary">SALVAR</button>
						<button type="button" onclick="window.close()" class="btn btn-danger">FECHAR</button>
					</form>
				</div>
				<br>
			</div>
		</div>
	</div>
@endsection