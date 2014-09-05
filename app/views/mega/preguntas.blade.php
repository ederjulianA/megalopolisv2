@extends('layouts.tshop')

@section('titulo')
Tus preguntas
@stop
@section('content-page')

@stop


@section('content')
	<div class="container main-container headerOffset">

	 <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li><a href="{{URL::route('perfil')}}">Mi Cuenta</a> </li>
        <li class="active"> Mis preguntas </li>
      </ul>
    </div>
  </div>
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        
        <h2>Mis preguntas</h2>
        <div class="contenedor-preguntas-user">

        @foreach($preguntas as $pre)
        	<div class="pregunta-user">
        		<div class="pregunta-header">
        			<h2> <strong>{{$pre->nombre}}</strong></h2>
        			
        			
        		</div>
        		<div class="pregunta-body">
        			<h2>Tu pregunta: <strong>¿{{$pre->pregunta}}?</h2></strong>
        			<div>
        				{{HTML::image($pre->imagen,$pre->nombre,array('class'=>'img-pregunta'))}}
        			</div>
        			<div>
        				<h3>Respuesta de <strong>{{$pre->nombre_publico_empresa}}</strong></h3>
        				@if($pre->respuesta == NULL)
        					<div class="alert alert-danger">Aún no hay respuesta de la empresa:(. Te notificaremos via email cuando te respondan.</div>
        				@else
        					<span class="respuesta">"{{$pre->respuesta}}"</span>
        				@endif
        				
        			</div>
        			
        		</div>
        		<div class="pregunta-footer">
        			{{$pre->created_at}}
        			
        		</div>
        			


        		
        	</div>
        @endforeach	

        	
        </div>
        
        
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->
@stop