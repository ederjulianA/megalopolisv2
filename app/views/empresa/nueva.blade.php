@extends('layouts.users')

@section('titulo')
Crear Nueva empresa
@stop

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
							
							<form enctype="multipart/form-data" method="post" action="{{ URL::route('empresa-crear-post')}}" autocomplete="off">
								<!--<div class="form-group">
										<label>Sector (*)</label>
										<select name="sector" name="sector" class="form-control input-sm bounceIn animation-delay2">
											@foreach($sectores  as $sector)
												<option value="{{ $sector->id}}">{{ $sector->nom_sector }}</option>
											@endforeach
											
										</select>
								</div>-->


								<div class="form-group">
										<label>Ciudad (*)</label>
										<select  name="ciudad" class="form-control input-sm bounceIn animation-delay3" id="sel-ciudades">
											<option value="0"> ESCOGE UNA CIUDAD </option>
											@foreach($ciudad  as $ciudad)
												<option value="{{ $ciudad->id}}">{{ $ciudad->ciudad }}</option>
											@endforeach
											
										</select>
								</div>

									<!--<div class="form-group">
										<label>Selecciona el Barrio</label>
										<select  name="barrio" class="form-control input-sm bounceIn animation-delay3" id="sel-barrio">
										<option value="0">Sleccione un barrio</option>
											
											
										</select>
								</div>-->

								<div class="form-group">
									<label>Razón Social (*)</label>
									<input type="text" name="razon_social" id="razon_social"  placeholder="Nombre de Tu empresa" class="form-control input-sm bounceIn animation-delay4" title=" Razon Social" data-content="Este será el nombre que se desplegara en las vistas públicas de tu empresa "data-toggle="popover" name="razon_social" {{ (Input::old('razon_social')) ? 'value="'. e(Input::old('razon_social')).'"' : '' }} required>
								</div>
								

								<div class="form-group">
									<label> Nombre publico (*) Solo letras y/o números sin tildes ni acentos</label>
									<input type="text" name="nombre_publico" id="nombre_publico_seo"  placeholder="" class="form-control input-sm bounceIn animation-delay4"  title="Nombre Publico" required>
									<input type="hidden"  id="nombre_publico_seo" value="">
								</div>

								<div id="nombre-seo">
									
								</div>

								<div class="form-group">
									<label>Dirección Principal <span>Ej: Carrera 24 # 18-76 o Calle 9 # 23-45</span></label>
									<input type="text" name="direccion_principal" placeholder="Direccion Principal" class="form-control input-sm bounceIn animation-delay4" name="email" {{ (Input::old('direccion_principal')) ? 'value="'. e(Input::old('direccion_principal')).'"' : '' }}>
								</div>

								

								<div class="form-group">
									<label>Teléfono</label>
									<input type="text" name="telefono" placeholder="Telefono" class="form-control input-sm bounceIn animation-delay4" name="telefono" {{ (Input::old('telefono')) ? 'value="'. e(Input::old('telefono')).'"' : '' }}>
								</div>

								<div class="form-group">
									<label>Logo tamaño recomendado(468x249) (*)</label>
									<input type="file" name="logo" required>
									
								</div>

								<!--<div class="form-group">
									<label>Descripción breve</label><br>
									<input type="text" name="descripcion_breve" rows="3" style="width:100%;" class="form-control input-sm bounceIn animation-delay4" name="descripcion_breve" {{ (Input::old('descripcion_breve')) ? 'value="'. e(Input::old('descripcion_breve')).'"' : '' }}>
									
								</div>-->
								<div class="form-group">
									<label>Descripción de la empresa (*)</label> <br>
									<textarea name="descripcion_larga" rows="5" style="width:100%;" class="form-control input-sm bounceIn animation-delay6" name="descripcion_larga" {{ (Input::old('descripcion_larga')) ? 'value="'. e(Input::old('descripcion_larga')).'"' : '' }}></textarea>
										
									
									
								</div>
								<input type="hidden" name = "user_id"value="{{ Auth::user()->id}}">

								<input type="submit" value="Crear" class="btn btn-primary" id="btn-crear-empresa">
								{{ Form::token()}}
							</form>
						</div>
				</div>

		</div>
	</div>


	 <script type="text/javascript">
      $('#razon_social').popover(),
      $('#nombre_publico').popover(),
    
    </script>
@stop