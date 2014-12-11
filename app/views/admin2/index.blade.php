@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-home"></i> Dashboard</h2>
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
@stop

@section('scripts')
	
@stop