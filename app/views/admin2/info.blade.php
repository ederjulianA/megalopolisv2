@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Información de tu tienda</h2>
@stop

@section('chats-msg')
	 @include('includes2.chats')
@stop



@section('content')
	<div class="container">
		@if(Session::has('message-alert'))
		<div class="row">
			 
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> {{Session::get('message-alert')}} </strong>
            </div>
            
			
		</div>
		@endif

		<div class="row">
			<div class="col-xs-12 col-md-8">
				

				{{ Form::open(['route'=>'empresa-actualizar-info-post','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('razon_social',' Razon Social de tu empresa (*)') }}
									{{ Form::text('razon_social',$empresa->razon_social,['class'=>'form-control']) }}
									{{ $errors->first('razon_social','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('telefono',' Telefono  (*)') }}
									{{ Form::text('telefono',$empresa->telefono,['class'=>'form-control']) }}
									{{ $errors->first('telefono','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('direccion_principal',' Dirección Principal  (*)') }}
									{{ Form::text('direccion_principal',$empresa->direccion_principal,['class'=>'form-control']) }}
									{{ $errors->first('direccion_principal','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('descripcion_larga',' Descripción de tu empresa  (*)') }}
									{{ Form::textarea('descripcion_larga',$empresa->desc_larga,['class'=>'form-control']) }}
									{{ $errors->first('descripcion_larga','<p class="alert alert-danger">:message</p>') }}
									{{ Form::hidden('id_empresa',$empresa->id)}}
								</div>

								<p>
									<button type="submit" class="btn btn-success btn-lg">Actualizar</button>
								</p>
				{{ Form::close()}}				
			</div>
			
		</div>
		
	</div>
@stop