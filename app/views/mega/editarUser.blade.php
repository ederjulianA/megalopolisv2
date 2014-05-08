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
		<hr>

		<div class="username-div">
			<h3>Nombre de Usuario</h3>
			<input type="text" name="username" id="username" value="{{Auth::user()->username}}">
			{{HTML::image('img/mega-imgs/user.jpg','usuario', array('width'=>'40px', 'height'=>'40px'))}}

			<div class="mensajes-ajax">
				
			</div>

			<a href="" class="btn btn-info btn-lg btn-sombra" id="btn-cambiar-img"> Cambia Mi nombre</a>
			
		</div>

		<div class="div-password-user">
			<h3>Actualizar Contraseña</h3>
			<form method="post" action="/perfil-cambiar-pass">
				<div class="">
					<label for="contrasena_actual">Contraseña actual</label>
					<input type="password" name="contrasena_actual" id="pass_actual" placeholder="******">
				</div>

				<div class="">
					<label for="nueva_contrasena">Nueva Contraseña</label>
					<input type="password" name="nueva_contrasena" id="pass_nueva" placeholder="******">
				</div>

				<div class="">
					<label for="confirmar_nueva_contrasena">Confirmar Contraseña nueva</label>
					<input type="password" name="confirmar_nueva_contrasena" id="pass_nueva_repite" placeholder="******">
					<div class="mensajes-ajax-pass">
						
					</div>
				</div>

				<input type="submit" value="Cambiar Contraseña" class="btn btn-info btn-lg btn-sombra">
				{{ Form::token()}}
			</form>
			
		</div>
		
	</div>
@stop