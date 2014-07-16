<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('content-page')
    <title>@yield('titulo')</title>
    <style type="text/css">
    	.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
    </style>
    
    {{ HTML::style('MEGA/css/bootstrap.min.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/font-awesome.minqa.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/prettyPhoto.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/price-range.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/animate.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/main.css', array('media' => 'screen'))}}
    {{ HTML::style('MEGA/css/responsive.css', array('media' => 'screen'))}}


    {{ HTML::style('SLIDE/css/camera.css', array('media' => 'screen'))}}
    
  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->     
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">  
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>--><!--/head-->

<body>
	<header id="header"><!--header--><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::route('index')}}">{{HTML::image('MEGA/images/home/logo.png', 'logo')}}  </a>
						</div>
					</div>
					
                    
                    
                    
				<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
							<div class="lupa" id="lupa_c"></div>
                            
						</div>
					</div>
                
                </div>
			</div>
		</div><!--/header-middle-->
	<div class="separator" id="separator_header">
    
    
    <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle col" data-toggle="dropdown">
									Bucaramanga
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Medellin</a></li>
									<li><a href="#">Bogota</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
							  <ul class="dropdown-menu">
							    <li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
    <div class="casillas_autenticacion" id="casillas"><form><input type="text" placeholder="  Email"/>
    <input type="text" placeholder="  Contraseña"/>
     <input type="submit" class="boton_in" id="in" value="Ingresar" style="float:left;"></form>
							</div>
    
    
    
    </div>
	  <div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row"></div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	

	
	@yield('content')
	
	<footer id="footer"><!--Footer-->
		
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servicios</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Ayuda</a></li>
								<li><a href="#">Contacto</a></li>
								<li><a href="#">Sobre Nosotros</a></li>
								<li><a href="#">Cambiar sitio</a></li>
								<li><a href="#">Preguntas Frecuentes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Megalopolis</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Categorias</a></li>
								<li><a href="#">Destacados</a></li>
								<li><a href="#">Mas Visitados</a></li>
								<li><a href="#">Todos</a></li>
								<li><a href="#">Mejor puntuados</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Politicas</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terminos de uso</a></li>
								<li><a href="#">Politica de privacidad</a></li>
								<li><a href="#">Derechos de autor</a></li>
								<li><a href="#">Sistemas de pago</a></li>
								<li><a href="#">Ubicaciones</a></li>
							</ul>
						</div>
					</div>
			      <div class="logo_space" id="logo_space"></div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Megalopolis Todos los derechos Reservados.</p>
					<p class="pull-right">Diseñado por: <span><a target="_blank" href="http://">Megalopolis</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  	{{ HTML::script('MEGA/js/jquery.js')}}
  	{{ HTML::script('MEGA/js/bootstrap.min.js')}}
  	{{ HTML::script('MEGA/js/jquery.scrollUp.min.js')}}
  	{{ HTML::script('MEGA/js/price-range.js')}}
  	{{ HTML::script('MEGA/js/jquery.prettyPhoto.js')}}
  	{{ HTML::script('MEGA/js/main.js')}}



  	{{ HTML::script('SLIDE/scripts/jquery.min.js')}}
  	{{ HTML::script('SLIDE/scripts/jquery.mobile.customized.min.js')}}
  	{{ HTML::script('SLIDE/scripts/jquery.easing.1.3.js')}}
  	{{ HTML::script('SLIDE/scripts/camera.js')}}

  	    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
  
</body>
</html>