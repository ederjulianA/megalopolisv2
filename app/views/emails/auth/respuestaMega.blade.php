<!DOCTYPE html>
<html style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
<head style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
	<meta charset="utf-8" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
	<title style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">Respuesta a Pregunta</title>
	<style type="text/css" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
		*{
			font-family: sans-serif Arial Verdana;
			font-size: 20px;

			margin: 0;
			padding: 0;
		}
		img{
			max-width: 100%;
			width: 100%;
		}
		h1{
			color: #73B1E8;
			font-size: 45px;
			font-weight: bold;
			text-align: center;
		}
		.articulo{
			font-size: 30px;
			font-weight: bold;
			color: #999;
			margin: 15px;
			font-style: oblique;
		}
		.btn-responder{
			border-bottom: 4px solid #45739A;
			border-radius: 20px;
			color: #fff;
			text-shadow: 2px 1px 0px rgba(0,0,0,.5);
			max-width: 100%;
			text-decoration: none;
			background-color: #73B1E8;
			padding: 10px;
		}
		.email-background
		{
			background-color: #fff;
			max-width: 100%;
			width: 100%;
			height: 100%;
		}

		.email-container{
			margin: 3% auto;
			background-color: #fff;
			max-width: 600px;
			width: 100%;
			padding: 5px;

		}
		.email-body{
			max-width: 100%;
			padding: 20px;

		}


		.email-header{
			max-width: 100%;
			text-align: center;
			width: 100%;
		}
		.pregunta{
			font-size: 25px;
			text-align: left;
			letter-spacing: 2px;
			color: #666;
			margin-top: 20px;

		}
		.responder {
			max-width: 100%;
			text-align: center;
			width: 100%;
			margin: 15% auto;
		}
		.usuarioTag {
			font-weight: bold;
			color: #73B1E8;
			font-size: 30px;
		}

	</style>
</head>
<body style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
	<div class="email-background" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;background-color: #fff;max-width: 100%;width: 100%;height: 100%;">	
			<div class="email-container" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 3% auto;padding: 5px;background-color: #fff;max-width: 600px;width: 100%;">
					<div class="email-header" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;max-width: 100%;text-align: center;width: 100%;">
							<img src="{{asset('Tshop/emails/respuesta.png')}}" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;max-width: 100%;width: 100%;">

						
					</div>
					<div class="email-body" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 20px;max-width: 100%;">
						<h1 style="font-family: sans-serif Arial Verdana;font-size: 45px;margin: 0;padding: 0;color: #73B1E8;font-weight: bold;text-align: center;">Nueva respuesta</h1>
						

						<p class="pregunta" style="font-family: sans-serif Arial Verdana;font-size: 25px;margin: 0;padding: 0;text-align: left;letter-spacing: 2px;color: #666;margin-top: 20px;">

							Hola <span class="usuarioTag" style="font-family: sans-serif Arial Verdana;font-size: 30px;margin: 0;padding: 0;font-weight: bold;color: #73B1E8;">{{$usuario}}</span>, 	Han Respondido tu pregunta :  <br style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;"><span class="articulo" style="font-family: sans-serif Arial Verdana;font-size: 30px;margin: 15px;padding: 0;font-weight: bold;color: #999;font-style: oblique;">"{{$pregunta}}"</span>.
							
						</p>
						<div class="responder" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 15% auto;padding: 0;max-width: 100%;text-align: center;width: 100%;">
							<a href="{{$link}}" class="btn-responder" style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 10px;border-bottom: 4px solid #45739A;border-radius: 20px;color: #fff;text-shadow: 2px 1px 0px rgba(0,0,0,.5);max-width: 100%;text-decoration: none;background-color: #73B1E8;">Ver respuesta</a>
							
						</div>
						<p>
							Puedes ver todas tus preguntas en la administración de tu cuenta.
						</p>

						<hr style="font-family: sans-serif Arial Verdana;font-size: 20px;margin: 0;padding: 0;">
						
					</div>

					<div class="email-footer" style="margin: 0;padding: 20px;font-size: 20px;font-family: sans-serif;max-width: 100%;width: 100%;text-align: center;color: #666;">
			&copy; Megalopolis 2014. Todos los derechos reservados.
			
		</div>
				
			</div>
		
	</div>

</body>
</html>