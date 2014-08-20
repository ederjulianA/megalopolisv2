@extends('layouts.admin')

@section('titulo')
Editando Usuario
@stop

@section('content')
	<div class="contenedor-editar-usuario">
		<form role="form" method="post" action="{{URL::route('editar-user-post')}}">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$user->email}}">
				    <input type="hidden" name="id_user" value="{{$user->id}}">
				  </div>
				  <div class="form-group">
				    <label for="">Tipo Usuario</label>
				    <select name="tipoUser">
				    	@if($user->tipo == 1)
				    		<option value="1" selected>Usuario</option>
				    		<option value="2"> Empresa</option>

				    	@else
				    		<option value="1" >Usuario</option>
				    		<option value="2" selected> Empresa</option>

				    	@endif
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="">Usuario Activo</label>
				    <select name="ActiveUser">
				    	@if($user->active == 0)
				    		<option value="0" selected>No activo</option>
				    		<option value="1"> Activo</option>

				    	@else
				    		<option value="0" >No Activo</option>
				    		<option value="1" selected> Activo</option>

				    	@endif
				    </select>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Actualizar</button>
		</form>

		<br><br><a href="{{URL::route('admin-usuarios')}}" class="btn btn-success">Lista de usuarios</a>
		
	</div>
@stop