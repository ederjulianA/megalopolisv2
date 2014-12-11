@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Mensaje de  {{$chat->username}}</h2>
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
          <div class="col-xs-6 col-md-4">
            <h2>Articulo</h2>
            <p>
              <strong>{{$chat->nombre_producto}}</strong>
            </p>
            <p>
              <img src="{{asset($chat->imagen)}}" height="200px" width="auto">
            </p>
    
          </div>
          <div class="col-xs-12 col-md-8">
            <h2>Pregunta</h2>
            <article>
              {{$chat->pregunta}}
            </article>
            <br>
            {{ Form::open(['route'=>'admin-respuesta-chat-post','method'=>'POST','role'=>'form','files'=>true]) }}

                <div class="form-group">
                  {{ Form::label('respuesta',' Responder (*)') }}
                  {{ Form::text('respuesta',$chat->respuesta,['class'=>'form-control']) }}
                  {{ $errors->first('respuesta','<p class="alert alert-danger">:message</p>') }}
                  {{Form::hidden('id_pregunta',$chat->id)}}
                </div>
                <p>
                @if($chat->respuesta == null)
                  <button type="submit" class="btn btn-success btn-lg">Responder</button>
                 @else
                  <button type="submit" class="btn btn-info btn-lg">Actualizar Respuesta</button>
                 @endif 
                </p>

            {{Form::close()}}
    
          </div>
    
        </div>
		
	</div>
@stop

@section('scripts')
	
@stop