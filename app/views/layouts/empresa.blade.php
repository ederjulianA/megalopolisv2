<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo')Megalopolis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <style type="text/css">
        		.contenedor-pregunta{
        			width: 90%;
        		}
        		.contenedor-pregunta article {
        			display: inline-block;
        			width: 45%;
        		}
        </style>

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
	<script type="text/javascript">
		var map = null;
		var geocoder = null;

		function toLoadMyGM() {
		
			var city = document.getElementById('ciudad');
			var address = document.getElementById('direccion');
			var gm_address = document.getElementById('gm_address');
			
			if(city.value.length == 0) {
			
				city.value = "";
			}
			
			if(address.value.length == 0) {
			
				address.value = "";
			}
			
			gm_address.value = address.value + ", " + city.options[city.selectedIndex].text; 
		}
		
		function toUpdateAddress() {
		
			var city = document.getElementById('ciudad');
			var address = document.getElementById('direccion');
			var gm_address = document.getElementById('gm_address');
			
			gm_address.value = address.value + ', ' + city.options[city.selectedIndex].text;
			
			showAddress();
		}
		
		function toCloneUpdateAddress(target) {
		
			var city = document.getElementById('ciudad-' + target);
			var address = document.getElementById('direccion-' + target);
			var gm_address = document.getElementById('gm_address-' + target);
			
			gm_address.value = address.value + ', ' + city.options[city.selectedIndex].text;
			
			map = new GMap2(document.getElementById("map_canvas-" + target));
			
			showCloneAddress(map, target);
		}
		
		function toCloneLoadMyGM(target) {
		
			var city = document.getElementById('ciudad-' + target);
			var address = document.getElementById('direccion-' + target);
			var gm_address = document.getElementById('gm_address-' + target);
			
			if(city.value.length == 0) {
			
				city.value = "";
			}
			
			if(address.value.length == 0) {
			
				address.value = "";
			}
			
			gm_address.value = address.value + ", " + city.options[city.selectedIndex].text; 
		}
		
		function toCloneInitialize(target) {
		
			var saved_latitude = document.getElementById('saved-latitude-' + target);
			var saved_longitude = document.getElementById('saved-longitude-' + target);
		
			toCloneLoadMyGM(target);
		
			if (GBrowserIsCompatible()) {
				map = new GMap2(document.getElementById("map_canvas-" + target));
				map.setCenter(new GLatLng(37.4419, -122.1419), 1);
				map.setUIToDefault();
				geocoder = new GClientGeocoder();
			}
		  
			if((saved_latitude.value != 0) && (saved_longitude != 0)) {
			
				map.setCenter(new GLatLng(saved_latitude.value, saved_longitude.value), 15);
				var marker = new GMarker(new GLatLng(saved_latitude.value, saved_longitude.value), {draggable: true});
				map.addOverlay(marker);
				GEvent.addListener(marker, "dragend", function() {
					
				marker.openInfoWindowHtml("Mi empresa está aquí");
				
				var test = marker.getLatLng().toUrlValue(6);
				
				var params = test.split(",");
				
				var latitude = document.getElementById('latitude-' + target);
				var longitude = document.getElementById('longitude-' + target);
				
				latitude.value = params[0];
				longitude.value = params[1];
			  });
			  GEvent.addListener(marker, "click", function() {
				
				var test = marker.getLatLng().toUrlValue(6);
				
				var params = test.split(",");
				
				var latitude = document.getElementById('latitude-' + target);
				var longitude = document.getElementById('longitude-' + target);
				
				latitude.value = params[0];
				longitude.value = params[1];
			  });
			  GEvent.trigger(marker, "click");
			} else {
			
				showCloneAddress(map, target);
			}
		}
		
		function auxiliaryClone(target) {
		
			map = new GMap2(document.getElementById("map_canvas-" + target));
			
			showCloneAddress(map, target);
		}
		
		function showCloneAddress(map, target) {
		
			map.clearOverlays();
		
			var address = document.getElementById('gm_address-' + target).value;
		
		  if (geocoder) {
			geocoder.getLatLng(
			  address,
			  function(point) {
				if (!point) {
				  alert("Por favor ingresa una dirección más específica");
				} else {
					
					var agree_button = document.getElementById('agree');
				
				  map.setCenter(point, 15);
				  var marker = new GMarker(point, {draggable: true});
				  map.addOverlay(marker);
				  GEvent.addListener(marker, "dragend", function() {
					
					marker.openInfoWindowHtml("Mi empresa está aquí");
					
					var test = marker.getLatLng().toUrlValue(6);
					
					var params = test.split(",");
					
					var latitude = document.getElementById('latitude-' + target);
					var longitude = document.getElementById('longitude-' + target);
					
					latitude.value = params[0];
					longitude.value = params[1];
				  });
				  GEvent.addListener(marker, "click", function() {
					
					var test = marker.getLatLng().toUrlValue(6);
					
					var params = test.split(",");
					
					var latitude = document.getElementById('latitude-' + target);
					var longitude = document.getElementById('longitude-' + target);
					
					latitude.value = params[0];
					longitude.value = params[1];
				  });
			  GEvent.trigger(marker, "click");
				}
			  }
			);
		  }
		  
		  return false;
		}
		
		function initialize() {
		
			toLoadMyGM();
		
		  if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map_canvas"));
			map.setCenter(new GLatLng(37.4419, -122.1419), 1);
			map.setUIToDefault();
			geocoder = new GClientGeocoder();
		  }
		  
		  showAddress();
		}
		
		function showAddress() {
		
			map.clearOverlays();
		
			var address = document.getElementById('gm_address').value;
		
		  if (geocoder) {
			geocoder.getLatLng(
			  address,
			  function(point) {
				if (!point) {
				  alert("Por favor ingresa una dirección más específica");
				} else {
					
					var agree_button = document.getElementById('agree');
				
				  map.setCenter(point, 15);
				  var marker = new GMarker(point, {draggable: true});
				  map.addOverlay(marker);
				  GEvent.addListener(marker, "dragend", function() {
					
					marker.openInfoWindowHtml("Mi empresa está aquí");
					
					var test = marker.getLatLng().toUrlValue(6);
					
					var params = test.split(",");
					
					var latitude = document.getElementById('latitude');
					var longitude = document.getElementById('longitude');
					
					latitude.value = params[0];
					longitude.value = params[1];
				  });
				  GEvent.addListener(marker, "click", function() {
					
					var test = marker.getLatLng().toUrlValue(6);
					
					var params = test.split(",");
					
					var latitude = document.getElementById('latitude');
					var longitude = document.getElementById('longitude');
					
					latitude.value = params[0];
					longitude.value = params[1];
				  });
			  GEvent.trigger(marker, "click");
				}
			  }
			);
		  }
		  
		  return false;
		}
    </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}

     <!-- My styles -->
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

	{{ HTML::style('css/jquery.tagsinput.css', array('media' => 'screen'))}}

	
</head>
<body onload="return initialize();" onunload="return GUnload();" class="overflow-hidden">


	<div id="overlay" class="transparent"></div>



<div id="wrapper" class="preload">
	
			<div id="top-nav" class="fixed skin-6">
					<a href="{{ URL::route('index')}}" class="brand">
						<span>Megalopolis</span>
						<span class="text-toggle"> colombia</span>
					</a><!-- /brand -->					
					<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<ul class="nav-notification clearfix">
					
						<li>
							<a href="{{ URL::route('index')}}">Home</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" id="noti_preguntas"  href="#" data-toggle="modal" data-target="#modalPreguntas">
								<i class="fa fa-bell fa-lg"></i>
								@if($num_nulls > 0)
									<span class="notification-label bounceIn animation-delay6">{{$num_nulls}}</span>
								@endif
								
							</a>


							@if($num_nulls > 0)
									<ul class="dropdown-menu notification dropdown-3">
											<li><a href="#" >Tienes ({{$num_nulls}}) pregunta(s) sin Responder</a></li>
											@foreach($preguntas_null as $pregunta)
												<li>
													<a href="#">
														<span class="notification-icon bg-warning">
															<i class="fa fa-warning"></i>
														</span>	
														<div><span class="m-left-xs">{{ substr($pregunta->pregunta,0,40)  }}...</span><br></div>
													</a>
												</li>	

											@endforeach				  
											
										
										
											<li><a href="#">Ver todas las notificaciones</a></li>					  
									</ul>
								@else	
								<ul class="dropdown-menu notification dropdown-3">
									<li><a href="#"> No Tienes preguntas pendientes</a></li>	
								</ul>

								@endif
							
						</li>
						<li class="profile dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<strong>{{ Auth::user()->username }}</strong>
								<span><i class="fa fa-chevron-down"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="clearfix" href="#">
									<!--<img src="{{ Auth::user()->img}}" alt="User Avatar">-->
									{{ HTML::image(Auth::user()->img)}}
										<div class="detail">
											<strong>{{ Auth::user()->username }}</strong>
											<p class="grey">{{ Auth::user()->email }}</p> 
										</div>
									</a>
								</li>
								<li><a tabindex="-1" href="{{URL::route('mega-perfil')}}" class="main-link"><i class="fa fa-edit fa-lg"></i> Editar Perfil</a></li>
								<!--<li><a tabindex="-1" href="#" class="main-link"><i class="fa fa-heart fa-lg"></i> Mis Favoritos</a></li>
								<li><a tabindex="-1" href="#" class="main-link"><i class="fa fa-check fa-lg"></i> Mis Suscripciones</a></li>-->
								

								
								<li class="divider"></li>
								<li><a tabindex="-1" class="main-link logoutConfirm_open" href="{{ URL::route('cerrar-sesion')}}"><i class="fa fa-lock fa-lg"></i>Cerrar Sesion</a></li>
							</ul>
						</li>
					</ul>

					
			</div><!-- FIN BARRA DE NAVEGACION FIJADA AL TOP -->

			<!-- ############################################################################################################## NAVEGACION FIJA TOP######################################-->


		<aside class="fixed skin-6">
			<div class="sidebar-inner scrollable-sidebar">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					{{ HTML::image(Auth::user()->img)}}

					<div class="detail">
						<strong>{{$user->empresa->razon_social}}</strong><span class="badge badge-danger m-left-xs bounceIn animation-delay4"></span>
						<ul class="list-inline">
							<li><a href="{{ URL::route('mega-perfil')}}">Perfil</a></li>
							
						</ul>
					</div>
				</div><!-- /user-block -->
				
				<div class="main-menu">
					<ul>
						<li class="active">
							<a href="{{ URL::route('mega-perfil')}}">
								<span class="menu-icon">
									<i class="fa fa-briefcase fa-lg"></i> 
								</span>
								<span class="text">
									Info Basica
								</span>
								<span class="menu-hover"></span>
							</a>
							
						</li>
						<li class="openable">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-gift fa-lg"></i> 
								</span>
								<span class="text">
									Mi empresa <i class="fa fa-chevron-down"></i>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li><a href="{{ URL::route('editar-productos')}}"><span class="submenu-label">Admin Productos</span></a></li>
								<li><a href="{{ URL::route('cambiar-imagen')}}"><span class="submenu-label">Cambiar Imagen</span></a></li>
								<li><a href="{{ URL::route('nueva-sede')}}"><span class="submenu-label">Sedes</span></a></li>
								
								
							</ul>
						</li>
					
						
						<li>
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									ITEM MENU
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
					
				
					</ul>
					
					<div class="alert alert-info">
							@if(Session::has('message-alert'))
						<p class="alert alert-success" style="top:20%;"> {{Session::get('message-alert')}}</p>
				@endif
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside><!-- fin menu lateral izquierdo -->

		<!-- ############################################################################################################## MENU ALINEADO A LA IZQUIERDA######################################-->

		@yield('content')





		<!--  FOOTER###############################3-->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 padding-md">
						
					</div>
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Sobre Megalopolis</p>
						<p><small>Descripcion Breve de la Compañia (Megalopolis)</small></p>
					</div><!-- /.col -->
					
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Mantente Informado</p>
						<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="social-connect tooltip-test rss-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Rss feed"><i class="fa fa-rss"></i></a>
						<a href="#" class="social-connect tooltip-test tumblr-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Tumblr"><i class="fa fa-tumblr"></i></a>
						<a href="#" class="social-connect tooltip-test dribbble-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="social-connect tooltip-test linkedin-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="social-connect tooltip-test pinterest-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
					</div><!-- /.col -->
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Contactanos</p>
						Email : soporte@megalopolis.com
						<div class="seperator"></div>
						<a class="btn btn-info"><i class="fa fa-envelope"></i> Soporte</a>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</footer>


</div>



<!-- Modal -->
<div class="modal fade" id="modalPreguntas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="myModalLabel">Mis preguntas sin responder</h4>
      </div>
      <div class="modal-body" id="cuerpo-noti">

        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  <input type="hidden" id="empresa_id" value="{{$user->empresa->id}}">
</div>





<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	
	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}

	<!-- Bootstrap -->
	{{ HTML::script('bootstrap/js/bootstrap.min.js')}}

	<!-- functions -->
	{{ HTML::script('js/functions.js')}}


		<!-- chosen -->
	{{ HTML::script('js/chosen.jquery.min.js')}}


	<!-- Mask-input -->
	{{ HTML::script('js/jquery.maskedinput.min.js')}}

	<!-- Datepicker -->
	{{ HTML::script('js/bootstrap-datepicker.min.js')}}

		<!-- Timepicker -->
	{{ HTML::script('js/bootstrap-timepicker.min.js')}}

	<!-- TagsInputs -->
	{{ HTML::script('js/jquery.tagsinput.min.js')}}

	<!-- WYSIHTML5 -->
	{{ HTML::script('js/wysihtml5-0.3.0.min.js')}}
	{{ HTML::script('js/uncompressed/bootstrap-wysihtml5.js')}}


	<!-- Modernizr -->
	{{ HTML::script('js/modernizr.min.js')}}

	<!-- CARRUSEL -->
	{{ HTML::script('js/carousel.js')}}
	
	
	<!-- Jquery UI -->
	{{ HTML::script('js/jquery-ui.min.js')}}
	
	
	




		

    
    
	<!-- Full Calender -->
	{{ HTML::script('js/fullcalendar.min.js')}}
	
	
	
	
	
	<!-- Pace -->
	{{ HTML::script('js/pace.min.js')}}


	
	
	<!-- Popup Overlay -->
	{{ HTML::script('js/jquery.popupoverlay.min.js')}}

	
	<!-- Slimscroll -->
	{{ HTML::script('js/jquery.slimscroll.min.js')}}
	
	
	<!-- Cookie -->
	{{ HTML::script('js/jquery.cookie.min.js')}}
	

	<!-- Endless -->
	{{ HTML::script('js/endless/endless_form.js')}}
	{{ HTML::script('js/endless/endless.js')}}

	<!-- Promos -->
	{{ HTML::script('js/promos.js')}}

	

	



	<!-- generales -->
	{{ HTML::script('js/generales.js')}}

	<!-- barrios -->
	{{ HTML::script('js/barrios.js')}}
	
	@yield('scripts')

</body>
</html>