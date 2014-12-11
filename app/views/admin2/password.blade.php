@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Cambiar Contraseña</h2>
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

		<div class="row">
					<div class="col-xs-12 col-md-8">
						{{ Form::open(['route'=>'post-cambiar-pass','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('contrasena_actual',' Contraseña Actual (*)') }}
									{{ Form::password('contrasena_actual',['class'=>'form-control']) }}
									{{ $errors->first('contrasena_actual','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('nueva_contrasena',' Contraseña Nueva (*)') }}
									{{ Form::password('nueva_contrasena',['class'=>'form-control']) }}
									{{ $errors->first('nueva_contrasena','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('confirmar_contrasena',' Repite la contraseña Nueva (*)') }}
									{{ Form::password('confirmar_contrasena',['class'=>'form-control']) }}
									{{ $errors->first('confirmar_contrasena','<p class="alert alert-danger">:message</p>') }}
								</div>
								<p>
									<button type="submit" class="btn btn-success btn-lg">Cambiar Contraseña</button>
								</p>
						{{ Form::close()}}	

		
					</div>

					<div class="col-xs-6 col-md-4">
		
					</div>
		
		</div>
		
	</div>
@stop