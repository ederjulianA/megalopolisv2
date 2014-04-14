@extends('layouts.users')

@section('content')
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-warning">Inicia Sesion</span> <span style="color:#ccc; text-shadow:0 1px #fff"></span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>

					<div class="pull-right">
						<span style="font-size:11px;">No eres Usuario aun?</span>
						<a class="btn btn-default btn-xs login-link" href="{{ URL::route('registro')}}" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Registrarme</a>
					</div>
				</div>
				<div class="panel-body">
					<form class="form-login" method="post" action="{{ URL::route('login-post')}} " autocomplete = "off">
						<div class="form-group">
							<label>Email</label>
							<input type="email" placeholder="ejemplo@ejemplo.com" class="form-control input-sm bounceIn animation-delay2" name="email">
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4" name="password" >
						</div>
						<div class="form-group">
							<label class="label-checkbox inline">
								<input type="checkbox" class="regular-checkbox chk-delete" />
								<span class="custom-checkbox info bounceIn animation-delay4"></span>
							</label>
							Recordarme		
						</div>
		
						<div class="seperator"></div>
						<div class="form-group">
							Olvido su Contraseña?<br/>
							Click <a href="#">Aqui</a> Para Reiniciar su Contraseña
						</div>

						<hr/>
							
						<input type="submit" class="btn btn-success" value="Iniciar Sesion">
						{{ Form::token()}}
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

@stop