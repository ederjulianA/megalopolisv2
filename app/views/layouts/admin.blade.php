<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}

	{{HTML::style('css/adminStyle.css')}}


	


	<title>Admin</title>
	
</head>
<body>
	<header>
		<div class="logo">
			{{HTML::image('img/icon.png')}}
		</div>
		<div class="tituloh1">
			<h1>Bienvenido al administrador de <span>Megalópolis</span></h1>
			
		</div>
		<div class="message-alert">
			@if(Session::has('message-alert'))
						<p class="alert alert-danger" style="top:20%;"> {{Session::get('message-alert')}}
							<a href="#" id="cerrar-msg-alert">Cerrar</a>
						</p>
				@endif

			
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="{{URL::route('admin')}}">Home</a></li>
		</ul>
	</nav>
	<div class="body-admin">
		@yield('content')
		
	</div>


<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
	
	
	<!-- Jquery UI -->
	{{ HTML::script('js/jquery-ui.min.js')}}

	<!-- Bootstrap -->
	{{ HTML::script('bootstrap/js/bootstrap.min.js')}}

	{{HTML::script('js/adminMega.js')}}


	
</body>
</html>