@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop

@section('styles')
	<link href="{{asset('admin2/adminCSS/logo.css')}}" rel="stylesheet"> 
@stop

@section('chats-msg')
	 @include('includes2.chats')
@stop

@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Logo</h2>
@stop



@section('content')
	<div class="contenedor-logo">

		<div class="actual">

			<h2>Logo Actual</h2>
			<img src="{{asset($empresa->logo)}}" alt="{{$empresa->razon_social}}"width="auto" height="150px">
			
		</div>
		<div class="form-new-logo">	
			<h2>Actualizar El logo</h2>
			{{ Form::open(['route'=>'cambiar-imagen-post','method'=>'POST','role'=>'form','files'=>true]) }}
					<div class="form-group">
									{{ Form::label('nuevo_logo',' Nuevo Logo (*)') }}
									{{ Form::file('nuevo_logo') }}
									{{ Form::hidden('id_empresa', $empresa->id)}}
									{{ $errors->first('nuevo_logo','<p class="alert alert-danger">:message</p>') }}
					</div>
					<br>
					<div class="">
						<button type="submit" class="btn btn-success btn-lg"> Actualizar logo</button>
						
					</div>

			{{ Form::close()}}


			@if(Session::has('message-alert'))
				<br><br>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> {{Session::get('message-alert')}} </strong>
            </div>

        @endif
			
		</div>

		
	</div>
@stop