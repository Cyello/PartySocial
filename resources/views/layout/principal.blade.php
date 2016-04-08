<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->

	<!--
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	-->
</head>
<body>

	<div class="container-fluid" id="topo">
		<header >
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="{{action('PartyController@index')}}">Sua Festa</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="{{action('PartyController@index')}}">Home</a></li>
			      <li><a href="#">Perfil</a></li>
			      <li><a href="{{ url('/logout') }}">Sair</a></li>  
			    </ul>
			  </div>
			</nav>
		</header><!-- /header -->

		<div class="row">

			<article class="col-md-8 col-md-offset-2">
				@yield('conteudo_principal')
			</article>

			<aside class="col-md-2">
				patrocinadores
				
			</aside>

		</div>

		<hr>

		<footer>
			<center><p class="text-muted">&copy; 2016 - MLJM-Project</p></center>
		</footer>


	</div>

	
	
</body>
</html>