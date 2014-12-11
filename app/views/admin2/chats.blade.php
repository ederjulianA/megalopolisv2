@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Todas Tus preguntas</h2>
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
          <div class="col-xs-18 col-md-12">

            <table class="table">
              <tr>
                  <th>Id Pregunta</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
                  <th> Acciones</th>

                
              </tr>
              @foreach($allChats as $chat)
                <tr>
                  <td>{{$chat->id}}</td>
                  <td>{{$chat->pregunta}}</td>
                  <td>{{$chat->respuesta}}</td>
                  <td> <a href="{{URL::route('adminpanel-chat-unico',array('id'=>$chat->id))}}" class="btn btn-info"> Ir</a></td>
                </tr>
              @endforeach
              
            </table>
    
          </div>
         
    
        </div>
		
	</div>
@stop

@section('scripts')
	
@stop