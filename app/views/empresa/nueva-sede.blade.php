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
									<ul>

											@foreach($sedes as $sede)
												<li>{{$sede->nombre_publico}}</li>

											@endforeach
									</ul>		
								
							@else
								<span class="alert alert-danger">Aun no tienes Ninguna Sede. Para crear Productos es necesario que crees tu primera sede :)</span>
								<a href="#" class="btn btn-warning btn-lg btn-sombra" data-toggle="modal" data-target="#myModal"> Crear Mi primera Sede</a>
							@endif
					
				</div>
											
				</div>
		</div>


		<!-- Modal -->
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
        	<div>
        		<label for="direccion">Direccion</label>
        		<input type="text" name="direccion" value="{{$empresa->direccion_principal}}" required>
        	</div>

        	<div>
        		<label for="direccion">Telefono</label>
        		<input type="text" name="telefono" value="{{$empresa->telefono}}" required>
        	</div>

        	<div>
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
</div>
	</div>			
@stop