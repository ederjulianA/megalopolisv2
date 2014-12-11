@extends('layouts.empresa')

@section('content')
<style type="text/css">
	*{
		
	}
	.form-img-cambio{
		max-width: 100%;
		width: 90%;
		border: 2px solid red;

	}
	.form-img-cambio div{
		display: block;
		margin: 10px;

	}
	.btn-cambio-img{
		margin: 5px;
	}
	.colorItem{
		min-height: 150px;
		min-width: 150px;
		padding: 5px;
		color: #fff;
	}
	.items-color{
		width: 80%;

	}
	.items-color li {
		display: inline;
		margin: 5px;
		padding: 10px;
		width: 18%;
	}
	.items-color li span {
		margin-right: 1em;
	}

	.color-header{
		max-width: 100%;
		width: 90%;
		text-align: center;
		padding: 10px;
		margin: 0 auto
	}
	.mensaje-ajax-color
	{
		max-width: 100%;
		width: 50%;

	}
	.msj-ajax-content{
		background-color: #F23636;
		width: 100%;
		font-weight: bold;
		color: #fff;
		padding: 10px;
	}
	.imgs-slider-container{
		max-width: 100%;
		width: 95%;
		padding: 10px;
		text-align: center;
		margin-top: 1em;
	}
	.imgs-slider-container h2 {
		font-weight: bold;
		font-size: 30px;
	}
	.imgs-slider-container p {
		padding: 20px;
		font-size: 18px;
		letter-spacing: 1px;
	}
	.imgs-actuales{
		max-width: 100%;
		width: 100%;
		position: relative;
		text-align: center;
		min-height: 200px;
		border: 2px solid #2D6CEC;
	}
	.header-contenedor{
		
		width: 100%;
		
		position: absolute;
		top: 0;

		background-color: #2D6CEC;
		color: #fff;
	}
	.cont-thumb {
		margin-top: 10%;
	}

	/*ESTILOS PARA EL CONTENEDOR DE COLORES*/
	.contenedor-colores
	{
		max-width: 100%;
		width: 90%;
		margin: 0 auto;
	}
	.contenedor-colores .color-base {
		display: inline-block;
		text-align: center;
		border: .4px solid #ccc;
		box-shadow: 2px 2px 1px rgba(0,0,0,.50);
		padding: 5px;
		margin: 5px ;
		width: 30%;

	}
	.contenedor-colores .color-base a
	{
		color: #fff;
		text-shadow: 2px 2px 1px rgba(0,0,0, .7);
		text-decoration: none;
	}
	
</style>
	<div id="main-container">
		<div class="padding-md">
				<div class="row">
						<div class="col-md-4">
							<h2>Imagen Actual</h2>
							{{ HTML::image($user->empresa->logo,'logo')}}
							
							
						</div>
						<div class="col-md-8">
							<h2>Escoger Nueva Imagen</h2>
							<form method="post" action="{{ URL::route('cambiar-imagen-post')}}" enctype="multipart/form-data" class="form-img-cambio">
								<label>Nuevo Logo</label>
								<div><input type="hidden" id="id_empresa" name="id_empresa" value="{{$user->empresa->id }}">
								<input type="file" name="nuevo_logo" required class="file-img"><br></div>

								<div><input type="submit" value="Actualizar" class="btn btn-info btn-cambio-img"></div>

								{{ Form::token()}}
								
							</form>
							
						</div>



				</div>


				<div class="row">
						<div class="col-md-4">
							<h2>Banner</h2>
							<p>Este banner será desplegado en todas las sedes de tu empresa,  es la forma de llamar la atención de los usuarios, se creativo. Te recomendamos una imagen en formato (jpg) con las siguientes dimensiones: 850x300.
							<!--<strong>fecha de registro{{$empresa->created_at}} Temina el  {{$nextSummerOlympics}}---Numero de dias restantes :{{$dif}}</strong>-->
							</p>
							{{ HTML::image($user->empresa->banner,'banner')}}
							
							
						</div>
						<div class="col-md-8">
							<h2>Escoger Nuevo Banner</h2>
							<form method="post" action="{{ URL::route('cambiar-banner')}}" enctype="multipart/form-data" class="form-img-cambio">
								<label>Nuevo Banner</label>
								<div><input type="hidden" name="id_empresa" value="{{$user->empresa->id }}">
								<input type="file" name="nuevo_banner" required><br></div>

								<input type="submit" value="Actualizar" class="btn btn-info btn-cambio-img">

								{{ Form::token()}}
								
							</form>
							
						</div>



				</div>



				<!--<div class="row">

									<div class="contenedor-img-preview" style="width:360px; height:250px; margin:0 auto;">
											<div id="preview" class="thumbnail-preview">
						   
												    <img src="" style="width:350px; height:auto; "  />

												</div>
																
										</div>
											
				</div>-->
				<hr>

				@if($empresa->tema == 1)
					<div class="row">
						 <div class="color-header">
						 	<h2>ESCOGE EL COLOR DEL TEMA</h2>

						 	<div class="contenedor-colores">
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
				@else

				@endif
				<div class="row">
					<div class="imgs-actuales">
						<div class="header-contenedor">
							<h2>Slide de imagenes Actuales- ({{$numero_slides}})</h2>
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
				<hr>

				<div class="row">
					<div class="imgs-slider-container">
							<h2>Escoge las imagenes para tu Slide de imagenes</h2>
							<p>
								Puedes escoger hasta 3 imagenes para el slide de imagenes que se mostrara en el home de tu empresa,si no defines 
								al menos una imagen se mostrara el baner que hayas definido por defecto.
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
			

		</div>


	</div>

		

			
@stop