@extends('layouts.empresa')

@section('content')
	<div id="main-container">
		<div class="padding-md">
				<div class="row">
						<div class="col-md-4">
							<h2>Imagen Actual</h2>
							{{ HTML::image($user->empresa->logo)}}
							
						</div>
						<div class="col-md-8">
							<h2>Escoger Nueva Imagen</h2>
							<form method="post" action="{{ URL::route('cambiar-imagen-post')}}" enctype="multipart/form-data">
								<label>Nuevo Logo</label>
								<input type="hidden" name="id_empresa" value="{{$user->empresa->id }}">
								<input type="file" name="nuevo_logo">

								<input type="submit" value="Actualizar" class="btn btn-info">

								{{ Form::token()}}
								
							</form>
							
						</div>

				</div>
			

		</div>


	</div>

		

			
@stop