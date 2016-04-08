@extends('layout.principal')

@section('conteudo_principal')
	<h1>Eventos</h1>

	<hr>
<!--
	@foreach($eventos as $e)
		<div class="row">
			<div class="col-md-3">
				<h3>{{$e->nome}}</h3>
			</div>

			<div class="col-md-5">
				{{$e->descricao}}

			</div>
			<a href="party/remove/{{$e->id}}" title="" class="btn btn-danger">Remover</a>
			<a href="party/edita/{{$e->id}}" title="" class="btn btn-success">Editar</a>
		</div>

		<hr>
	@endforeach
-->
<!--
@foreach($eventos as $e)
		<div class="row">
			<div class="col-md-3">
				<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
    </a>
  </div>
  ...
</div>
			</div>

			<div class="col-md-6">
				<div class="panel-group">
				    <div class="panel panel-info">
				      <div class="panel-heading">{{$e->nome}}</div>
				      <div class="panel-body">{{$e->descricao}}</div>
				    </div>
				    <a href="party/remove/{{$e->id}}" title="" class="btn btn-danger">Remover</a>
					<a href="party/edita/{{$e->id}}" title="" class="btn btn-success">Editar</a>
				</div>
			</div>
		</div>

 @endforeach   	
 -->

	@foreach($eventos as $e)
		 <div class="row">
		  <div class="col-sm-6 col-md-8">
		    <div class="thumbnail">
		      <h3 class="col-sm-offset-1">{{$e->nome}}</h3>
		      <img src="http://ensaambiental.com.br/Site/wp-content/uploads/2013/09/500x500-490x490.gif" alt="...">
		      <div class="caption">
		        <p>{{$e->descricao}}</p>
		        <p><a href="party/remove/{{$e->id}}" title="" class="btn btn-link btn-xs">Remover</a>
					<a href="party/edita/{{$e->id}}" title="" class="btn btn-link btn-xs">Editar</a></p>
		      </div>
		    </div>
		  </div>
		</div>
	@endforeach
	<br><br><a class="btn btn-default" href="{{action('PartyController@create')}}" title="">Postar novo evento</a>
@stop