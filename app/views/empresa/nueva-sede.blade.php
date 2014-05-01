@extends('layouts.empresa')

@section('titulo')
	Nueva Sede
@stop

@section('content')
	<div id="main-container">
		<div class="padding-md">
				<div class="nueva-sede">
				<h2>Mis Sedes</h2>

				<div class="lista-sedes">
					
							@if($sedes->count())
								<table class="table table-striped">
								  <tr>
								  		<th>Nombre Publico</th>
								  		<th>Telefono</th>
								  		<th>Direccion</th>
								  		<th>Acciones</th>
								  </tr>
								
									

											@foreach($sedes as $sede)
												<tr>
													<td>{{$sede->nombre_publico}}</td>
													<td>{{$sede->telefono}}</td>
													<td>{{$sede->direccion}}</td>
													<td>
														<a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal-{{$sede->id}}"><i class="fa fa-edit"></i></a>
													</td>
												</tr>


												<!-- Modal  PARA EDITAR LAS SEDES#########################################################################-->
<div class="modal fade" id="myModal-{{$sede->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar {{$sede->nombre_publico}}</h4>
      </div>
      <div class="modal-body">
        
        <form class="form-nueva-sede" method="post" action="{{ URL::route('actualizar-sede-post')}}">
        	<div class="actualizar-sede">
        		<label for="direccion">Direccion</label>
        		<input type="text" name="direccion" value="{{$sede->direccion}}" required>
        	</div>

        	<div class="actualizar-sede">
        		<label for="direccion">Telefono</label>
        		<input type="text" name="telefono" value="{{$sede->telefono}}" required>
        	</div>

        	<div class="actualizar-sede">
        		<label for="direccion">Nombre publico</label>
        		<input type="text" name="nombre_publico" value="{{$sede->nombre_publico}}" required>
        	</div>
        	<input type="hidden" name="sede_id" value="{{$sede->id}}">

        	<input type="submit" value="Actualizar" class="btn btn-success btn-sombra">
        	{{ Form::token()}}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div><!-- FIN DEL MODAL DE LA PRIMERA SEDE-->

											@endforeach
								</table>		
											
								
							@else
								<span class="alert alert-danger">Aun no tienes Ninguna Sede. Para crear Productos es necesario que crees tu primera sede :)</span>
								<a href="#" class="btn btn-warning btn-lg btn-sombra" data-toggle="modal" data-target="#myModal"> Crear Mi primera Sede</a>
							@endif
					
				</div>
											
				</div>
		</div>


		<!-- Modal  PARA CREAR LA PRIMERA SEDE DEL USUARIO#########################################################################-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Crea Tu primera Sede</h4>
      </div>
      <div class="modal-body">
        <span class="alert alert-success"> Por defecto hemos Cargado los datos de registro de tu empresa.</span>
        <form class="form-nueva-sede" method="post" action="{{ URL::route('nueva-sede-post')}}">
        	<div class="actualizar-sede">
        		<label for="direccion">Direccion</label>
        		<input type="text" name="direccion" value="{{$empresa->direccion_principal}}" required>
        	</div>

        	<div class="actualizar-sede">
        		<label for="direccion">Telefono</label>
        		<input type="text" name="telefono" value="{{$empresa->telefono}}" required>
        	</div>

        	<div class="actualizar-sede">
        		<label for="direccion">Nombre publico</label>
        		<input type="text" name="nombre_publico" value="{{$empresa->nombre_publico}}" required>
        	</div>
        	<input type="hidden" name="empresa_id" value="{{$empresa->id}}">

        	<input type="submit" value="Agregar" class="btn btn-success btn-sombra">
        	{{ Form::token()}}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div><!-- FIN DEL MODAL DE LA PRIMERA SEDE-->




	</div>			
@stop