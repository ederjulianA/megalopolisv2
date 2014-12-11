@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop

@section('styles')
	<link href="{{asset('admin2/adminCSS/sliders.css')}}" rel="stylesheet"> 
	{{ HTML::style('dropzone/css/dropzone.css')}}
@stop

@section('chats-msg')
	 @include('includes2.chats')
@stop
@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Personalizar tema</h2>
@stop



@section('content')
	<div class="container container-fluid">
		<div class="row">
				<div class="col-xs-18 col-md-12">
		            @if(Session::has('message-alert'))

			            <div class="alert alert-info alert-dismissable">
			              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			              <strong> {{Session::get('message-alert')}} </strong>
			            </div>
		            
		        	@endif
		       </div>
				
			
		</div>
		
			@if($empresa->tema == 1)

				<div class="row">
					<div class="col-xs-18 col-md-12">
									
						 <div class="color-header">
						 	<h2>ESCOGE EL COLOR DEL TEMA</h2>

						 	<div class="contenedor-colores">
						 		{{ Form::hidden('id_empresa',$empresa->id,array('id'=>'id_empresa'))}}
						 		<div class="color-base" style="background-color:#f5447a">
						 			<a href="" id="c_rosado" class="color_select" data="1">Seleccionar</a>

						 		</div>
						 		
						 		<div class="color-base" style="background-color:#bfd16d">
						 			<a href="" id="c_verde" class="color_select" data="2">Seleccionar</a>
						 		</div>
						 		<div class="color-base" style="background-color:#ff8b4e">
						 			<a href="" id="c_naranja" class="color_select" data="3">Seleccionar</a>
						 		</div>
						 		
						 		<div class="color-base" style="background-color:#4063e5">
						 			<a href="" id="c_azul" class="color_select" data="4">Seleccionar</a>
						 		</div>
						 		<div class="color-base" style="background-color:#e09859">
						 			<a href="" id="c_marron" class="color_select" data="5">Seleccionar</a>
						 		</div>
						 		<div class="color-base" style="background-color:white">
						 			<a href="" id="c_blanco" class="color_select" data="6">Seleccionar</a>
						 		</div>
						 		<div class="color-base" style="background-color:#6a6a6a">
						 			<a href="" id="c_gris" class="color_select" data="7">Seleccionar</a>
						 		</div>	
						 			
						 		
						 		
						 	</div>
						 	<!--<ul class="items-color">
						 		<li><span class="colorItem" style="background-color:#ff8b4e">Naranja</span><a href="" id="c_naranja" class="color_select" data="1">Seleccionar</a></li>
						 		

						 	</ul>-->

						 	<div class="mensaje-ajax-color">
						 		
						 	</div>
						 	
						 </div>
      	
					
			
					
								</div>
								
					
							</div>
					
			

				<div class="row">
					<div class="imgs-actuales">
						<div class="header-contenedor">
							<h2>Slide de imagenes Actuales ({{count($slides)}})</h2>
						</div>
						<div class="body-contenedor">
									<div class="row cont-thumb">
											@foreach($slides as $slide)
											  <div class="col-sm-4 col-md-4">
											    <div class="thumbnail">
											      {{HTML::image($slide->ruta.$slide->nombre,'',array('class'=>'img-thum'))}}
											      <div class="caption">
											        
											        
											        <p>
											        <form method="post" action="{{URL::route('borrarslide')}}">
											        	{{Form::hidden('id_slide', $slide->id)}}
											        	<button type="submit" class="btn btn-danger">Eliminar Slide</button>
											        </form> </p>
											      </div>
											    </div>

											  </div>
											 @endforeach 
									</div>
						</div>
						

						
					</div>
				</div>
				

				<div class="row">
					<div class="imgs-slider-container">
							<h2>Escoge las imagenes para tu Slide de imagenes</h2>
							<p>
								Puedes escoger hasta 3 imagenes para el slide de imagenes que se mostrara en el home de tu empresa.
							</p>

							<div class="form-upload">
								@if($numero_slides >= 3)
									<div class="alert alert-danger" role="alert"> <strong>Ya has alcanzado el numero de slides permitidos, si tienes un nuevo slide para tu tienda, por favor elimina uno de los slides actuales.</strong></div>
								@else
									<form action="{{URL::route('dropzoneFiles')}}" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
									  <input type="file" name="file" style="display:none;" />
									</form>
								@endif
							</div>
						
					</div>
					
				</div>	
			@else

			@endif

			
		
		
	</div>
@stop

@section('scripts')
	<!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
    	{{ HTML::script('dropzone/dropzone.js')}}
    	<script type="text/javascript" src="{{asset('js/color_tienda.js')}}"></script>
@stop