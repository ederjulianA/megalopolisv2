@extends('layouts.empresa')

@section('content')
<style type="text/css">
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



				<div class="row">

									<div class="contenedor-img-preview" style="width:360px; height:250px; margin:0 auto;">
											<div id="preview" class="thumbnail-preview">
						   
						    <img src="" style="width:350px; height:auto; "  />

						</div>
										
									</div>
						
	

	
							
				</div>
				<div class="row">
						 <div class="color-header">
						 	<h2>ESCOGE EL COLOR DEL HEADER</h2>
						 	<ul class="items-color">
						 		<li><span class="colorItem" style="background-color:#f90">Naranja</span><a href="" id="c_naranja" class="color_select" data="#f90">Seleccionar</a></li>
						 		<li><span class="colorItem" style="background-color:#000">Negro</span><a href="" id="c_negro" class="color_select" data="#000">Seleccionar</a></li>
						 		<li><span class="colorItem" style="background-color:#F236F2">Rosado</span><a href="" id="c_rosado" class="color_select" data="#F22DCB">Seleccionar</a></li>
						 		<li><span class="colorItem" style="background-color:#666">Gris</span><a href="" id="c_girs" class="color_select" data="#666">Seleccionar</a></li>
						 		<li><span class="colorItem" style="background-color:#393E5C">Azul oscuro</span><a href="" id="c_azul_o" class="color_select" data="#393E5C">Seleccionar</a></li>

						 	</ul>

						 	<div class="mensaje-ajax-color">
						 		
						 	</div>
						 	
						 </div>
      	
					
				</div>
			

		</div>


	</div>

		

			
@stop