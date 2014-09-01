<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Email de registro</title>
	<style type="text/css">
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
<body>
	<div class="email-background">
		<div class="email-container">
			<div class="header-email">
				{{HTML::image('Tshop/emails/header1.jpg')}}
				<h1>Gracias Por registrarte en Megalópolis</h1>
				
				
			</div>

			<div class="body-email">
				<p>
					El último paso para poder acceder a la plataforma es activar tu cuenta, lo cual puedes hacer dando click en el botón de abajo. Con cualquier duda que tengas no dudes en contactarnos.
				</p>
				<div class="email-datos">
					<h2>Datos de Inicio de Sesión</h2>
					<div class="img-pass">
						{{HTML::image('Tshop/emails/pass.jpg')}}
					</div>
					<div>
						<ul>
							<li>Usuario : <strong>{{$email}}</strong></li>
							<li>Contraseña: <strong>{{$pass}}</strong></li>
						</ul>
					</div>

					<hr>
					<div class="email-activar">
							<a href="{{$link}}" class="btn-activar">CLICK PARA ACTIVAR TU CUENTA</a>
					</div>

					
				</div>
				<div class="separador"></div>
				<div class="email-footer">
					&copy; Megalopolis 2014. Todos los derechos reservados.
					
				</div>

				
			
				
			</div>
			

		</div>
		
	</div>

</body>
</html>