@extends('layouts.users')


@section('content')
	<div class="container-fluid" style="margin-top:7%;">
			<div class="row">
					
					<div class="col-sm-12 padding-md">
						<a href="{{ URL::route('login')}}" class="btn btn-warning quick-btn" style="float:right;">
							<i class="fa fa-sign-in"></i>
							<span> Iniciar sesion</span>
						</a>
						
					</div>
				
			</div>

			<div class="row">
				<div class="col-sm-8 padding-md">
					<h1 class="megalopolis_titulo">Megalopolis</h1>
					
				</div>

				<div class="col-sm-2 padding-md">
					<a href="#">
								<div class="panel panel-default panel-stat2 bg-info">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-share"></i>
										</span>
									<div class="pull-right text-right">
											<div class="value">Ir</div>
											<div class="title">Navegar</div>
									</div>
									</div>
								</div><!-- /panel -->
					</a>			
				</div>
					
			</div>


			<div class="row">
				<div class="col-sm-2 padding-md">
					
				</div>
				<div class="col-sm-8 padding-md">
						<div class="input-group m-bottom-md">
							<input type="text" class="form-control" placeholder="Buscar en Megalopolis">
							<span class="input-group-btn">
								<button class="btn btn-danger" type="button">Buscar</button>
							</span>
						</div>
					
				</div>
				
			</div>
		
			<div class="row">
				<div class="col-sm-12 " >
					<h2 class="titulo_registro">Registrate</h2>

					@if($errors->has())
							<div id="form-errors">
								<p>Errores en el formulario :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error }}</li>
									@endforeach
								</ul>
				
							</div> <!--  end form errors-->
							@endif
						<form method="post" action="{{ URL::route('crear-cuenta-post')}}" class="form-registro" enctype="multipart/form-data">
							<div class="form-group">
								<label for="username">Nombre</label>
								<input type="text" class="form-control input-sm" placeholder="Escribe tu nombre" name="username" {{ (Input::old('username')) ? 'value="'. e(Input::old('username')).'"' : '' }}>
							</div><!-- /form-group -->

							

							<div class="form-group">
								<label>Correo Electronico</label>
								<input type="email" class="form-control input-sm" placeholder="ejemplo@ejemplo.com" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')).'"' : '' }}>
							</div><!-- /form-group -->

							<div class="form-group">
								<label for="tipo">Registrarme Como:</label>
								<select name="tipo" {{ (Input::old('tipo')) ? 'value="'. e(Input::old('tipo')).'"' : '' }}>
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
										<input type="password" class="form-control input-sm" placeholder="******" name="password">
									</div>
								</div><!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<label>Repite Contraseña</label>
										<input type="password" class="form-control input-sm" placeholder="******" name="password_confirmation">
									</div>
								</div><!-- /.col -->
							</div><!-- /.row -->

							<input type="submit" value="Registrar" class="btn btn-success btn-sm">

							{{ Form::token()}}

							</form>
					
				</div>
				
			</div>
				
		</div>

		



		<!-- ##################################### FIN DE FORMULARIO DE REFISTRO DE NUEVO USUARIO CON CLASE FADE POR DEFECTO-->

		

		
	</div>
@stop