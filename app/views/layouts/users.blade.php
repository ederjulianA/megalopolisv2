<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En tuMegalopolis queremos darte la oportunidad de tener un catálogo de productos y servicios en cuestión de minutos con un par de clicks. Utilizamos las últimas tecnologías en cuanto a desarrollo web lo cual nos permite garantizar que tus catálogos se verán bien desde cualquier dispositivo que acceda a ellos. De igual forma nuestro panel de administración te permite gestionar tu empresa desde cualquier dispositivo.">
    <meta name="author" content="Megalopolis TEAM">

    <meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/mega-imgs/img-fb.jpg"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
	  type="text/javascript"></script>
	<script type="text/javascript">
		function initialize(latitude, longitude) {
		
		  if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map_canvas"));
			map.setCenter(new GLatLng(latitude, longitude), 15);
			var marker = new GMarker(new GLatLng(latitude, longitude), {draggable: true});
			map.addOverlay(marker);
			map.setUIToDefault();
			geocoder = new GClientGeocoder();
		  }
		  
		  return false;
		}
	</script>
	
    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}

    


    <!--  My styles-->
    {{ HTML::style('css/mios.css', array('media' => 'screen'))}}
    
	
	<!-- Font Awesome -->
	{{ HTML::style('css/font-awesome.min.css', array('media' => 'screen'))}}
	
	
	<!-- Pace -->
	{{ HTML::style('css/pace.css', array('media' => 'screen'))}}
	
	
	<!-- Full Calendar -->
	{{ HTML::style('css/fullcalendar.css', array('media' => 'screen'))}}
		
	
	<!-- Endless -->
	{{ HTML::style('css/endless.min.css', array('media' => 'screen'))}}
	{{ HTML::style('css/endless-skin.css', array('media' => 'screen'))}}
	{{ HTML::style('css/endless-landing.min.css', array('media' => 'screen'))}}


	





	
</head>
<body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="overlay" class="transparent"></div>

		<div id="wrapper" class="preload">
				<header class="navbar navbar-fixed-top bg-white">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{ URL::route('index')}}" class="navbar-brand"><span class="text-danger">Megalopolis</span> Colombia</a>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="{{URL::route('navegar')}}" class="top-link">Home</a>
							</li>

							@if(Auth::check())
							<!--<li> 
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="fa fa-bell fa-lg"></i>
								<span class="notification-label bounceIn animation-delay6">7</span>
								</a>
									@if(Auth::user()->tipo == 1)
									<ul class="dropdown-menu notification dropdown-3">
										<li><a href="#">Tienes 5 notificaciones</a></li>					  
										<li>
											<a href="#">
												<span class="notification-icon bg-warning">
													<i class="fa fa-warning"></i>
												</span>
												<span class="m-left-xs">Mensaje de notificacion.</span>
												<span class="time text-muted">ahora</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="notification-icon bg-success">
													<i class="fa fa-plus"></i>
												</span>
												<span class="m-left-xs">Mensaje de notificacion</span>
												<span class="time text-muted">hace 2m</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="notification-icon bg-danger">
													<i class="fa fa-bolt"></i>
												</span>
												<span class="m-left-xs">Mensaje de notificacion</span>
												<span class="time text-muted">hace 5 min</span>
											</a>
										</li>
									
										<li><a href="#">Ver todas las notificaciones</a></li>					  
									</ul>

									@endif
									
							</li>-->

							@if(Auth::user()->tipo == 2)
							<li>
								<a href="{{ URL::route('empresaAdmin')}}">Mi empresa</a>
							</li>
							@endif
							
							<li class="profile dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<strong>{{ Auth::user()->username}}</strong>
								<span><i class="fa fa-chevron-down"></i></span>
								</a>
								<ul class="dropdown-menu">
								<li>
									<a class="clearfix" href="#">
										{{ HTML::image(Auth::user()->img)}}
										<div class="detail">
											<strong id="username-menu">{{ Auth::user()->username}}</strong>
											<p class="grey">{{ Auth::user()->email}}</p> 
										</div>
									</a>
								</li>
								<li class="divider"></li>

								@if(Auth::user()->tipo == 1)
									<li><a tabindex="-1" href="{{URL::route('perfil')}}" class="main-link"><i class="fa fa-edit fa-lg"></i> Editar Perfil</a></li>
								@else
									<li><a tabindex="-1" href="{{URL::route('mega-perfil')}}" class="main-link"><i class="fa fa-edit fa-lg"></i> Editar Perfil</a></li>
								@endif
								
								@if(Auth::user()->tipo == 1)
									<li><a tabindex="-1" href="{{URL::route('favoritos-user')}}" class="main-link"><i class="fa fa-heart fa-lg"></i> Mis Favoritos</a></li>
									<li><a tabindex="-1" href="{{URL::route('suscripciones-user')}}" class="main-link"><i class="fa fa-check fa-lg"></i> Mis Suscripciones</a></li>

								

								@endif
								
								

								
								<li class="divider"></li>
								<li><a tabindex="-1" class="main-link logoutConfirm_open" href="{{ URL::route('cerrar-sesion')}}"><i class="fa fa-lock fa-lg"></i>Cerrar Sesion</a></li>
							</ul>
							</li>

							@endif
							

							
						</ul>
					</nav>
				</div>
				@if(Session::has('message-alert'))
						<p class="alert alert-danger" style="top:20%;"> {{Session::get('message-alert')}}</p>
				@endif
				</header>



				

				
				

			


		@yield('content')

		</div>

	





<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	

	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
	
	
	<!-- Jquery UI -->
	{{ HTML::script('js/jquery-ui.min.js')}}


	<!-- ciudades-barrios -->
	{{ HTML::script('js/barrios.js')}}
	
	
	<!-- Bootstrap -->
	{{ HTML::script('bootstrap/js/bootstrap.min.js')}}

	<!-- Waypoint -->
	{{ HTML::script('js/waypoints.min.js')}}

	<!-- localScroll -->
	{{ HTML::script('js/jquery.localscroll.min.js')}}
    
    
	<!-- Full Calender -->
	{{ HTML::script('js/fullcalendar.min.js')}}
	
	
	<!-- Modernizr -->
	{{ HTML::script('js/modernizr.min.js')}}
	
	
	<!-- Pace -->
	{{ HTML::script('js/pace.min.js')}}
	
	
	<!-- Popup Overlay -->
	{{ HTML::script('js/jquery.popupoverlay.min.js')}}

	
	<!-- Slimscroll -->
	{{ HTML::script('js/jquery.slimscroll.min.js')}}
	
	
	<!-- Cookie -->
	{{ HTML::script('js/jquery.cookie.min.js')}}
	

	<!-- Endless -->
	{{ HTML::script('js/endless/endless.js')}}

	<!-- generales -->
	{{ HTML::script('js/generales.js')}}

	<!-- Promos -->
	{{ HTML::script('js/promos.js')}}

	<script>
		$(function()	{
			$('.animated-element').waypoint(function() {
				
				$(this).removeClass('no-animation');
				
			}, { offset: '70%' });
			
			$('.nav').localScroll({duration:800});
		});
	</script>

	




	@yield('scripts')
</body>
</html>