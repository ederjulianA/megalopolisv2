@extends('layouts.users')

@section('titulo')
Recuperar Contraseña
@stop

@section('content')
	<div class="wrapper-olvido-pass">
		<h2>Recuperar Contraseña</h2>

		<div class="info-recuperar">
			Al parecer has llegado aqui porque olvidaste tu contraseña de inicio de sesion, porfavor ingresa
			tu email de registro para enviarte una Contraseña nueva.
			
		</div>
		<div class="form-recuperar">
			<form action="{{URL::route('recuperar-cuenta-post')}}" method="post">
				<label for="email">Email: </label>
				<input type="email" name="email" required placeholder="ejemplo@ejemplo.com">

				<input type="submit" value="Envia mi contraseña nueva" class="btn btn-info btn-sombra">

				{{ Form::token()}}
				
			</form>
			
		</div>
		
	</div>
@stop