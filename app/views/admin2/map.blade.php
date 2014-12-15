@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Google Map</h2>
@stop

@section('chats-msg')
	   @include('includes2.chats')
@stop



@section('content')
	<div class="container container-fluid">
		 @if(Session::has('message-alert'))
		<div class="row">
			
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> {{Session::get('message-alert')}} </strong>
            </div>
            
			
		</div>
		@endif
		
	</div>

			<div class="row">
				<div class="col-xs-6 col-md-4">
					@if($empresa->latitude == null || $empresa->longitude == null)
						      	{{ Form::open(['route'=>'guardar-mapa','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('sede',' Ingresa tu dirección separada por comas de la siguiente forma: Dirección, Ciudad, Departamento, País') }}
									{{ Form::text('direccion','carrera 24 # 18-76, Bucaramanga, Santander, Colombia', ['id'=>'direccion','class'=>'form-control']) }}
									{{ $errors->first('sede','<p class="alert alert-danger">:message</p>') }}
									<button id="pasar" class="btn btn-info">Localizar en el  mapa</button>

								</div>
								<!-- div donde se dibuja el mapa-->
								<div id="map_canvas" style="width:450px;height:300px;"></div>
 
								<!--campos ocultos donde guardamos los datos-->
								<input type="hidden" name="lat" id="lat"/>
								<input type="hidden" name="lng" id="long"/>
								<input type="hidden" name="id_empresa" id="id_empresa" value="{{$empresa->id}}" />

								<button type="submit" class="btn btn-success"> Guardar Mapa</button>

								
								{{ Form::close()}}
					@else
						<h3>Actualizar Mi ubicación de google maps</h3>
							{{ Form::open(['route'=>'guardar-mapa','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('sede',' Ingresa tu dirección separada por comas de la siguiente forma: Dirección, Ciudad, Departamento, País') }}
									{{ Form::text('direccion',$empresa->dir_mapa, ['id'=>'direccion','class'=>'form-control']) }}
									{{ $errors->first('sede','<p class="alert alert-danger">:message</p>') }}
									<button id="pasar" class="btn btn-info">Localizar en el  mapa</button>

								</div>
								<!-- div donde se dibuja el mapa-->
								<div id="map_canvas" style="width:450px;height:300px;"></div>
 
								<!--campos ocultos donde guardamos los datos-->
								<input type="hidden" name="lat" id="lat" value="{{$empresa->latitude}}" />
								<input type="hidden" name="lng" id="long" value="{{$empresa->longitude}}"/>
								<input type="hidden" name="id_empresa" id="id_empresa" value="{{$empresa->id}}" />

								<button type="submit" class="btn btn-success"> Guardar Mapa</button>

								
								{{ Form::close()}}

					@endif
	
				</div>
				<div class="col-xs-12 col-md-8">
	
				</div>
	
			</div>
@stop

@section('scripts')

	<script type="text/javascript" src="{{asset('admin2/adminJS/mapGoogle.js')}}"></script>
@stop