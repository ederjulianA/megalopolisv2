@extends('layouts.users')

@section('titulo')
Megalopolis Colombia
@stop

@section('content')
	<div class="container-fluid" style="margin-top:7%;">
			<div class="row">
				@if(Auth::check())

				@else
					<div class="col-sm-12 padding-md">
						<a href="{{ URL::route('login')}}" class="btn btn-warning quick-btn" style="float:right;">
							<i class="fa fa-sign-in"></i>
							<span> Iniciar sesion</span>
						</a>
						
					</div>

				@endif
					
					
				
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
										<a href="{{URL::route('navegar')}}" >
											<div class="value">Ir</div>
											<div class="title">Navegar</div>
										</a>	
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

			@if(Auth::check())

			@else
					<div class="row">
				<div class="col-sm-12 " >
					<h2 class="titulo_registro"> <a href="{{ URL::route('registro')}}" class="btn btn-warning btn-lg"><i class="fa fa-user"></i> Registrate</a>  </h2>

					
						
					
				</div>
				
			</div>

			@endif
		
			
				
		</div>

		



		<!-- ##################################### FIN DE FORMULARIO DE REFISTRO DE NUEVO USUARIO CON CLASE FADE POR DEFECTO-->

		

		
	</div>
@stop