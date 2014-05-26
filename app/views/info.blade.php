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
								@if(Auth::user()) {{ Favs::mostrarSus(Auth::user()->id, $empresa->id)}}  @endif
								<h2 style="font-weight: bold; width:60%;">{{$empresa->razon_social}}</h2>
								{{ HTML::image($empresa->logo, $empresa->razon_social, array('class'=>'img-info-empresa'))}}
								<address>
								  
									{{$empresa->direccion_principal}}<br>
									
									<div class="seperator"></div>
									<strong>Telefono : <span class="theme-font">{{$empresa->telefono}}</span></strong><br>
									<strong>Email : <span class="theme-font">{{$empresa->user->email}}</span></strong><br>
									
								</address>
								<div class="lista-sedes-info">
									<h2>Sedes ({{$num_sedes}})</h2>
									@if($sedes->count())
										@foreach($sedes as $sede)
											<a class="btn btn-info quick-btn " href="/catalogo/{{$sede->nombre_publico}}" id=""><i class="fa fa-home"></i><span>{{$sede->nombre_publico}}</span></a>
										<!--<span>{{$sede->nombre_publico}}</span><a href="/public/catalogo/{{$sede->nombre_publico}}" class="label label-warning links-catalogos">Ver catalogo</a><br><hr>-->

										@endforeach


									@else
									No se han definido sedes para {{$empresa->razon_social}}

									@endif

									
								</div>
								<hr>
								<h2></h2>
								
								<hr>
								<div class="col-md">
									
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
									
									
									<hr>
									<h2 style="font-weight: bold; text-align:center; margin: 20px auto;">Preguntas Frecuentes</h2> @if(Auth::check())<a href="#" class="btn btn-warning btn-sombra "data-toggle="modal" data-target="#pregunta" >Preguntar</a>
			<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    		<div class="mensaje-ajax"></div>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hacer Pregunta a {{$empresa->nombre_publico}} </h4>
                    </div>
                    <div class="modal-body">
                      
                      <form class="form-nueva-sede" method="post" action="#">
                      	<div class="">
                      		<label for="direccion">Tu pregunta</label><br>
                      		<textarea style="width:100%;" id="pregunta-user"></textarea>
                      			
                      		
                      	</div>

                      	
                      	<input type="hidden" name="empresa_id" id="empresa_id" value="{{$empresa->id}}">
                      	<input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

                      	<input type="submit" id="btn-hacer-pregunta" value="Preguntar" class="btn btn-success btn-sombra">
                      	{{ Form::token()}}
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      
                    </div>
                  </div>
                </div>
              </div><!-- FIN DEL MODAL DE LA PRIMERA SEDE-->
									  @endif

									<div class="contenedor-preguntas">
											@foreach($preguntas as $pregunta)

										

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="  accordion-toggle collapsed "style="font-size:18px;  width:90%; " data-toggle="collapse" data-parent="#accordion" style="font-size:20px;" href="#{{$pregunta->id}}">
															{{$pregunta->pregunta}} ??? <i class="fa fa-chevron-down btn btn-success boton-abajo-pregunta"></i>
														</a>
													</h4>
												</div>
												<div id="{{$pregunta->id}}" class="panel-collapse collapse" style="height: 0px;">
													<div class="panel-body" style="font-style: oblique;">
														{{$pregunta->respuesta}}
													</div>
												</div>
											</div>

											@endforeach
										
									</div>
									

									<!--@foreach($preguntas as $pregunta)

										

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

									@endforeach-->
									

									
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
			var yourStartLatLng = new google.maps.LatLng(7.134273, -73.124725);
            $('#map_canvas').gmap({'center': yourStartLatLng});
		});
	</script>
@stop