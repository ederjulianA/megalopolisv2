@extends('layouts.empresa')

@section('content')
	<style type="text/css">
	.form-sync{
		width: 80%;
		margin: 0 auto;
		text-align: center;
	}
	.file{
		
		padding: 25px;
	}
	</style>
	<div id="main-container">
		<div class="padding-md">
				<div class="row">
					<div class="contenedor-sync">
						<h2>CARGA MASIVA DE PRODUCTOS</h2>
						<hr>

						<form method="post" action="{{URL::route('svcPost')}}" enctype="multipart/form-data" role="form" id="form-sync">
							<div class="file">
								<input type="file" name="file" required>
							</div>
							<div><input type="submit" value="CARGAR PRODUCTOS" class="btn btn-success btn-lg"></div>

						</form>
						
					</div>
					
				</div>

				<div class="row">
					<h2>TUS PRODUCTOS </h2>
				<table class="table table-bordered">
				  <tr>
				  	<th>Cod</th>
				  	<th>Nombre</th>
				  	<th>Precio</th>
				  	<th>Categoria</th>
				  	<th>Creado</th>
				  </tr>
				
					@foreach($empresa->mantis as $man)
						<tr>
							<td>{{$man->cod}}</td>
							<td>{{$man->nombre}}</td>
							<td>{{$man->precio}}</td>
							<td>{{$man->nombre_categoria}}</td>
							<td>{{$man->created_at}}</td>
						</tr>
					
					@endforeach
				</table>	
				</div>
		</div>
	</div>			
@stop