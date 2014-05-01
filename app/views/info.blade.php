@extends('layouts.users')

@section('titulo')
	{{$empresa->razon_social}}
@stop

@section('content')
	<div id="main-container">
			<div class="padding-md">
				<div class="row">
					<div class="col-md-11">	
						<div class="row">	
							<div class="col-md-6">
								<h2>Información de Contacto</h2>
								<address>
								  <strong>{{$empresa->razon_social}}</strong><br>
									{{$empresa->direccion_principal}}<br>
									{{$empresa->ciudad->ciudad}}<br>
									<div class="seperator"></div>
									<strong>Telefono : <span class="theme-font">{{$empresa->telefono}}</span></strong><br>
									<strong>Email : <span class="theme-font">{{$empresa->user->email}}</span></strong><br>
									
								</address>
								<div class="lista-sedes-info">
									<h2>Sedes ({{$num_sedes}})</h2>
									@if($sedes->count())
										@foreach($sedes as $sede)

										<span>{{$sede->nombre_publico}}</span>--<a href="/catalogo/{{$sede->nombre_publico}}" class="label label-warning">Ver catalogo</a><br>

										@endforeach


									@else
									No se han definido sedes para {{$empresa->razon_social}}

									@endif

									
								</div>
								<hr>
								<h2>{{$empresa->razon_social}}</h2>
								{{ HTML::image($empresa->logo, $empresa->razon_social, array('class'=>'img-info-empresa'))}}
								<hr>
								<div class="col-md">
									<h4>Descripcion  de la empresa</h4>
									<p>
										@if($empresa->desc_larga == "")
												{{$empresa->desc_breve}}
										@else
											{{$empresa->desc_larga}}
										@endif
										
									</p>
								</div>
							</div><!-- /.col -->
							<div class="col-md-6">
									<div id="map_canvas" class="map"></div>
									<hr>
									<h2>Preguntas Frecuentes</h2>
									

									@foreach($preguntas as $pregunta)

										

											<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="btn btn-info  accordion-toggle collapsed " data-toggle="collapse" data-parent="#accordion" href="#{{$pregunta->id}}">
													{{$pregunta->pregunta}}
												</a>
											</h4>
										</div>
										<div id="{{$pregunta->id}}" class="panel-collapse collapse" style="height: 0px;">
											<div class="panel-body">
												{{$pregunta->respuesta}}
											</div>
										</div>
									</div>

									@endforeach
									

									
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div>
@stop


@section('scripts')

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>	
	{{ HTML::script('js/jquery-ui-map/ui/min/jquery.ui.map.full.min.js')}}
	{{ HTML::script('js/jquery-ui-map/ui/min/jquery.ui.map.microformat.min.js')}}
	<script>
		 $(function() { 
			var yourStartLatLng = new google.maps.LatLng(37.808661, -122.409819);
            $('#map_canvas').gmap({'center': yourStartLatLng});
		});
	</script>
@stop