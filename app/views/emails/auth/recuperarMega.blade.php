
<!DOCTYPE html>
<html style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">
<head style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">
	<meta charset="utf-8" style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">
	<title style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">Recuperar Contraseña</title>
	<style type="text/css" style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">
	*{
		margin: 0;
		padding: 0;
		font-size: 20px;
		font-family: sans-serif;
	}
	h1{
		font-size: 25px;
		color: #fff;
		font-weight: bold;
	}
	.btn-cambias-pass{
		border: 2px solid #4ec67f;
		border-radius: 7px;
		color: #4ec67f;
		margin: 20px auto;
		max-width: 100%;
		padding: 15px;
		text-align: center !important;
		text-decoration: none;
		width: 50%;

	}
	.email-background{
		background-color: #fff;
		max-width: 100%;
	}
	.email-body{
		color: #666;
		margin: 7% auto;
		max-width: 400px;
		padding: 20px;
		text-align: left;

	}
	.email-body h2{
		margin: 10px 10px 25px 15px;
	}
	.email-body p {
		margin: 10px ;
		padding: 20px;
		width: 100%;
	}
	.email-footer{
		max-width: 100%;
		width: 100%;
		padding: 20px;
		text-align: center;
		color: #666;
	}
	.email-header{
		background-color: #4ec67f;
		max-width: 100%;
		padding: 10px;
		text-align: center;
		width: 100%;

	}
	.span-user{
		font-size: 22px;
		color: #4ec67f;

	}

	</style>
</head>
<body style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">

	<div class="email-background" style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;background-color: #fff;max-width: 100%;">
		<div class="email-header" style="margin: 0;padding: 10px;font-size: 20px;font-family: sans-serif;background-color: #4ec67f;max-width: 100%;text-align: center;width: 100%;">
			<h1 style="margin: 0;padding: 0;font-size: 25px;font-family: sans-serif;color: #fff;font-weight: bold;">TuMegalopolis.com</h1>
			
		</div>
		<div class="email-body" style="margin: 7% auto;padding: 20px;font-size: 20px;font-family: sans-serif;color: #666;max-width: 400px;text-align: left;">
			<h2 style="margin: 10px 10px 25px 15px;padding: 0;font-size: 20px;font-family: sans-serif;">Hola, <span class="span-user" style="margin: 0;padding: 0;font-size: 22px;font-family: sans-serif;color: #4ec67f;">{{$username }}</span></h2>
			<p style="margin: 10px;padding: 20px;font-size: 20px;font-family: sans-serif;width: 100%;">
				Hemos recibido una solicitud para cambiar tu contraseña de Megalópolis.<br>
				Nueva Contraseña : <strong>{{$password}}</strong>
			</p>
			<p style="margin: 10px;padding: 20px;font-size: 20px;font-family: sans-serif;width: 100%;">
				<a href="{{$link}}" class="btn-cambias-pass" style="margin: 20px auto;padding: 15px;font-size: 20px;font-family: sans-serif;border: 2px solid #4ec67f;border-radius: 7px;color: #4ec67f;max-width: 100%;text-decoration: none;width: 50%;text-align: center !important;">Cambiar Contraseña</a>
			</p>

			<p style="margin: 10px;padding: 20px;font-size: 20px;font-family: sans-serif;width: 100%;">
				Si ignoras este mensaje, tu contraseña no se cambiará.
Si no has solicitado el cambio de contraseña, <a href="https://twitter.com/tumegalopolis" class="btn-info" style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">infórmanos.</a>
			</p>

			
		</div>
		<hr style="margin: 0;padding: 0;font-size: 20px;font-family: sans-serif;">
		
		<div class="email-footer" style="margin: 0;padding: 20px;font-size: 20px;font-family: sans-serif;max-width: 100%;width: 100%;text-align: center;color: #666;">
			&copy; Megalopolis 2014. Todos los derechos reservados.
			
		</div>
	</div>

</body>
</html>