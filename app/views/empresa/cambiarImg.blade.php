@extends('layouts.empresa')

@section('content')
	<div id="main-container">
		<div class="padding-md">
				<div class="row">
						<div class="col-md-4">
							<h2>Imagen Actual</h2>
							{{ HTML::image($user->empresa->logo,'logo')}}
							
							
						</div>
						<div class="col-md-8">
							<h2>Escoger Nueva Imagen</h2>
							<form method="post" action="{{ URL::route('cambiar-imagen-post')}}" enctype="multipart/form-data">
								<label>Nuevo Logo</label>
								<input type="hidden" name="id_empresa" value="{{$user->empresa->id }}">
								<input type="file" name="nuevo_logo" required>

								<input type="submit" value="Actualizar" class="btn btn-info">

								{{ Form::token()}}
								
							</form>
							
						</div>



				</div>


				<div class="row">
						<div class="col-md-4">
							<h2>Banner</h2>
							<p>Este banner será desplegado en todas las sedes de tu empresa,  es la forma de llamar la atención de los usuarios, se creativo. Te recomendamos una imagen en formato (jpg) con las siguientes dimensiones: 850x300.</p>
							{{ HTML::image($user->empresa->banner,'banner')}}
							
							
						</div>
						<div class="col-md-8">
							<h2>Escoger Nuevo Banner</h2>
							<form method="post" action="{{ URL::route('cambiar-banner')}}" enctype="multipart/form-data">
								<label>Nuevo Banner</label>
								<input type="hidden" name="id_empresa" value="{{$user->empresa->id }}">
								<input type="file" name="nuevo_banner" required>

								<input type="submit" value="Actualizar" class="btn btn-info">

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
			

		</div>


	</div>

		

			
@stop