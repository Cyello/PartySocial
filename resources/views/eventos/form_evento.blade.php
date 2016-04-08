@extends('layout.principal')

@section('conteudo_principal')

	<form action="{{action('PartyController@store')}}" method="post" accept-charset="utf-8" role="form" class="col-md-10">
		<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
		<div class="form-group">
    		<input type="text" class="form-control" name="nome" placeholder="Nome do evento">
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="3" name="descricao" placeholder="Fale mais do sobre esse evento"></textarea>
		</div>
		<button class="btn btn-success" type="submit">Postar</button>

	</form>

	
@stop


