@extends('layouts.users')
@section('titulo')
	Perfil: {{Auth::user()->username}}
@stop

@section('content')
	<div class="contenedor-perfil">
		<h2 id="titulo-user">Hola  {{Auth::user()->username}}</h2>
		<p class="info-vista-perfil">
		Aquí podras editar la informacion de tu perfil como tu nombre de usuario, contraseña, imagen de perfil
			
		</p>

		<div class="username-div">
			<h3>Nombre de Usuario</h3>
			<input type="text" name="username" id="username" value="{{Auth::user()->username}}">
			{{HTML::image('img/mega-imgs/user.jpg','usuario', array('width'=>'40px', 'height'=>'40px'))}}

			<div class="mensajes-ajax">
				
			</div>

			<a href="" class="btn btn-info btn-lg btn-sombra" id="btn-cambiar-img"> Cambia Mi nombre</a>
			
		</div>
		
	</div>
@stop