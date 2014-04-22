@extends('layouts.users')

@section('content')
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-warning">Registrate</span> <span style="color:#ccc; text-shadow:0 1px #fff"></span>
			</h2>
		</div>
		@if($errors->has())
							<div class="alert alert-success" style="text-align:center;">
								<p>Errores en el formulario :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error }}</li>
									@endforeach
								</ul>
				
							</div> <!--  end form errors-->
							@endif
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Crear Cuenta
					</div>

					<div class="pull-right">
						<span style="font-size:11px;">Ya tienes una cuenta?</span>
						<a class="btn btn-default btn-xs login-link" href="{{ URL::route('login')}}" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Iniciar Sesion</a>
					</div>
				</div>
				<div class="panel-body">
					<form method="post" action="{{ URL::route('crear-cuenta-post')}}" class="form-registro" enctype="multipart/form-data" autocomplete="off">
							<div class="form-group">
								<label for="username">Nombre</label>
								<input type="text" class="form-control input-sm  bounceIn animation-delay2 " placeholder="Escribe tu nombre" name="username" {{ (Input::old('username')) ? 'value="'. e(Input::old('username')).'"' : '' }}>
							</div><!-- /form-group -->

							

							<div class="form-group">
								<label>Correo Electronico</label>
								<input type="email" class="form-control input-sm bounceIn animation-delay3" placeholder="ejemplo@ejemplo.com" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')).'"' : '' }}>
							</div><!-- /form-group -->

							<div class="form-group">
								<label for="tipo">Registrarme Como:</label>
								<select name="tipo" class="bounceIn animation-delay4"  {{ (Input::old('tipo')) ? 'value="'. e(Input::old('tipo')).'"' : '' }}>
									<option value="1"> Usuario </option>
									<option value="2"> Empresa </option>
									
								</select>
							</div><!-- /form-group -->

							<div class="form-group">
								<label for="img"> Imagen de Usuario :</label>
								<input type="file" name="img" value="Escoge tu imagen">
								
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Contraseña</label>
										<input type="password" class="form-control input-sm bounceIn animation-delay5" placeholder="******" name="password">
									</div>
								</div><!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<label>Repite Contraseña</label>
										<input type="password" class="form-control input-sm bounceIn animation-delay6" placeholder="******" name="password_confirmation">
									</div>
								</div><!-- /.col -->
							</div><!-- /.row -->

							<input type="submit" value="Registrar" class="btn btn-success btn-sm btn-sombra">

							{{ Form::token()}}

							</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

@stop