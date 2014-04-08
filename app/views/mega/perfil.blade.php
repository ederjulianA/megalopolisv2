@extends('layouts.empresa')

@section('content')
	
	<div id="main-container">

	EDITAR PERFIL {{$user->username}}
	{{ HTML::image($user->img)}}

	RAZON SOCIAL {{$user->empresa->razon_social}}


	</div>
	
@stop