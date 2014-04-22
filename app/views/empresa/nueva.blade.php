@extends('layouts.users')

@section('content')
	<div class="nueva-empresa-form">
		
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-warning">Crear Mi empresa</span> <span style="color:#ccc; text-shadow:0 1px #fff"></span>
			</h2>
		</div>


		<div class="login-widget animation-delay1" >	
				<div class="panel panel-default">
					
						<div class="panel-heading clearfix">
								<div class="pull-left">
									<i class="fa fa-lock fa-lg"></i> Nueva Empresa
								</div>

								
						</div>
						<div class="panel-body">
								@if($errors->has())
									<div class="alert alert-success">
										<p>Se presentaron Los siguientes Errores</p>
										<ul>
											@foreach($errors->all() as $error)
												<li>{{$error }}</li>
											@endforeach
										</ul>
										
									</div> <!--  end form errors-->
								@endif
							
							<form enctype="multipart/form-data" method="post" action="{{ URL::route('empresa-crear-post')}}">
								<div class="form-group">
										<label>Sector</label>
										<select name="sector" name="sector" class="form-control input-sm bounceIn animation-delay2">
											@foreach($sectores  as $sector)
												<option value="{{ $sector->id}}">{{ $sector->nom_sector }}</option>
											@endforeach
											
										</select>
								</div>


								<div class="form-group">
										<label>Ciudad</label>
										<select name="ciudad" name="ciudad" class="form-control input-sm bounceIn animation-delay3">
											@foreach($ciudad  as $ciudad)
												<option value="{{ $ciudad->id}}">{{ $ciudad->ciudad }}</option>
											@endforeach
											
										</select>
								</div>

								<div class="form-group">
									<label>Razon Social</label>
									<input type="text" name="razon_social" placeholder="Nombre de Tu empresa" class="form-control input-sm bounceIn animation-delay4" >
								</div>

								<div class="form-group">
									<label>Direccion Principal</label>
									<input type="text" name="direccion_principal" placeholder="Direccion Principal" class="form-control input-sm bounceIn animation-delay4" >
								</div>

								<div class="form-group">
									<label>Telefono</label>
									<input type="text" name="telefono" placeholder="Telefono" class="form-control input-sm bounceIn animation-delay4" >
								</div>

								<div class="form-group">
									<label>Logo</label>
									<input type="file" name="logo">
									
								</div>

								<div class="form-group">
									<label>Descripcion breve</label><br>
									<textarea name="descripcion_breve" rows="3" style="width:100%;" class="form-control input-sm bounceIn animation-delay4"></textarea>
									
								</div>
								<div class="form-group">
									<label>Descripcion breve</label> <br>
									<textarea name="descripcion_larga" rows="5" style="width:100%;" class="form-control input-sm bounceIn animation-delay6"></textarea>
										
									
									
								</div>
								<input type="hidden" name = "user_id"value="{{ Auth::user()->id}}">

								<input type="submit" value="Crear" class="btn btn-primary">
								{{ Form::token()}}
							</form>
						</div>
				</div>

		</div>
	</div>
@stop