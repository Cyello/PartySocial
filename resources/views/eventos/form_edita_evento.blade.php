@extends('layout.principal')

@section('conteudo_principal')

	<p><h3>Atualize este evento</h3></p>

	<form action="/party/atualiza/{{$novo_evento->id}}" method="post" accept-charset="utf-8" role="form" class="col-md-10">
		<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
		<div class="form-group">
    		<input type="text" class="form-control" name="nome" placeholder="Nome do evento" value="{{$novo_evento->nome}}">
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="3" name="descricao" placeholder="Fale mais do sobre esse evento" 
			value="{{$novo_evento->descricao}}"></textarea>
		</div>
		<button class="btn btn-success" type="submit">Concluir</button>
	</form>

@stop