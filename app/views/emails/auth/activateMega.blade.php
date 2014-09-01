<!DOCTYPE html>
<html style="margin: 0;padding: 0;">
<head style="margin: 0;padding: 0;">
	<meta charset="utf-8" style="margin: 0;padding: 0;">
	<title style="margin: 0;padding: 0;">Email de registro</title>
	<style type="text/css" style="margin: 0;padding: 0;">
	*{
		margin: 0;
		padding: 0;
	}
	img {
		max-width: 100%;
		width: 100%;
	}
	h1{
		font-weight: bold;
		font-size: 35px;
		color: #252428;
		text-align: center;
		padding: 7px;
	}
	.email-activar{
		margin: 5% auto;
		max-width: 100%;
		text-align: center;
		padding: 10px;
		width: 100%;
	}
	.email-activar a {
		background-color:#4880E6;
		border-bottom: 4px solid #224584;
		text-shadow: 2px 1px 1px rgba(0,0,0,.6);
		margin-top: 15%;
		max-width: 100%;
		color: #fff;
		padding: 10px;
		text-align: center;
		text-decoration: none; 
	}
	.email-background{
		background-color: #ccc;
		max-width: 100%;

	}

	.email-container{
		margin: 10% auto;
		padding: 10px;
		max-width: 500px;

	}
	.body-email{
		background-color: #FFF;
		color: #000;
		
		width: 100%;

	}
	.body-email p{
		padding: 25px;
		text-align: justify;
		color: #666;
		line-height: 1.5em;
		letter-spacing: inherit;
	}
	.email-datos{
		padding: 20px;
	}
	.email-datos div
	{
		display: inline-block;
		vertical-align: middle;
	}
	.email-footer{
		font-size: 20px;
		max-width: 100%;
		text-align: center;
		font-weight: bold;
		padding: 10px;
		width: 100%;
	}
	.email-datos .img-pass{
		width: 35%;

	}
	.separador{
		background-color: #ccc;
		max-width: 100%;
		width: 100%;
		min-height: 10px;
	}
	</style>
</head>
<body style="margin: 0;padding: 0;">
	<div class="email-background" style="margin: 0;padding: 0;background-color: #ccc;max-width: 100%;">
		<div class="email-container" style="margin: 10% auto;padding: 10px;max-width: 500px;">
			<div class="header-email" style="margin: 0;padding: 0;">
				<img src="{{asset('Tshop/emails/header1.jpg')}}" style="margin: 0;padding: 0;max-width: 100%;width: 100%;">
				<h1 style="margin: 0;padding: 7px;font-weight: bold;font-size: 35px;color: #252428;text-align: center;">Gracias Por registrarte en Megalópolis</h1>
				
				
			</div>

			<div class="body-email" style="margin: 0;padding: 0;background-color: #FFF;color: #000;width: 100%;">
				<p style="margin: 0;padding: 25px;text-align: justify;color: #666;line-height: 1.5em;letter-spacing: inherit;">
					El último paso para poder acceder a la plataforma es activar tu cuenta, lo cual puedes hacer dando click en el botón de abajo. Con cualquier duda que tengas no dudes en contactarnos.
				</p>
				<div class="email-datos" style="margin: 0;padding: 20px;">
					<h2 style="margin: 0;padding: 0;">Datos de Inicio de Sesión</h2>
					<div class="img-pass" style="margin: 0;padding: 0;display: inline-block;vertical-align: middle;width: 35%;">
						<img src="{{asset('Tshop/emails/pass.jpg')}}" style="margin: 0;padding: 0;max-width: 100%;width: 100%;">
					</div>
					<div style="margin: 0;padding: 0;display: inline-block;vertical-align: middle;">
						<ul style="margin: 0;padding: 0;">
							<li style="margin: 0;padding: 0;">Usuario : <strong style="margin: 0;padding: 0;">{{$email}}</strong></li>
							<li style="margin: 0;padding: 0;">Contraseña: <strong style="margin: 0;padding: 0;">{{$pass}}</strong></li>
						</ul>
					</div>

					<hr style="margin: 0;padding: 0;">
					<div class="email-activar" style="margin: 5% auto;padding: 10px;max-width: 100%;text-align: center;width: 100%;display: inline-block;vertical-align: middle;">
							<a href="{{ $link }}" class="btn-activar" style="margin: 0;padding: 10px;background-color: #4880E6;border-bottom: 4px solid #224584;text-shadow: 2px 1px 1px rgba(0,0,0,.6);margin-top: 15%;max-width: 100%;color: #fff;text-align: center;text-decoration: none;">CLICK PARA ACTIVAR TU CUENTA</a>
					</div>

					
				</div>
				<div class="separador" style="margin: 0;padding: 0;background-color: #ccc;max-width: 100%;width: 100%;min-height: 10px;"></div>
				<div class="email-footer" style="margin: 0;padding: 10px;font-size: 20px;max-width: 100%;text-align: center;font-weight: bold;width: 100%;">
					&copy; Megalópolis 2014. Todos los derechos reservados.
					
				</div>

				
			
				
			</div>
			

		</div>
		
	</div>

</body>
</html>