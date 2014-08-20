@extends('layouts.admin')

@section('titulo')
Gestion de usuarios megalopolis
@stop

@section('content')
	<div class="contenedor-usuarios-mega">
		<h2>Lista de Usuarios ({{$numUsers}})</h2>
		
		<div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon">@</div>
			      <input class="form-control" type="email"id="email-filtro" placeholder="Buscar Usuario por email" required><button  type="submit" class="btn btn-info" id="btn-email-filtro">Buscar</button>
			    </div>
			    <div class="respuesta-ajax-email">
			    	
			    </div>
 		 </div>
 		 

 		 <hr>

		<div class="table-responsive">
			  <table class="table table-hover">
			  	<thead>
			  		<th>Id</th>
			  		<th>email</th>
			  		<th>Tipo</th>
			  		<th>Activo</th>
			  		<th>Acciones</th>
			  	</thead>
			  	<tbody>
			  		@foreach($users as $user)
			  			<tr>
			  				<td>{{$user->id}}</td>
			  				<td>{{$user->email}}</td>
			  				<td>{{ Favs::tipoUser($user->tipo)}}</td>
			  				<td>{{ Favs::ActiveUser($user->active)}}</td>
			  				<td><a href="{{URL::route('editar-user', array('id'=>$user->id))}}" class="btn btn-info">Editar</a></td>
			  			</tr>

			  		@endforeach
			  		
			  	</tbody>
			    	
			  </table>
		</div>

		
	</div>
@stop

