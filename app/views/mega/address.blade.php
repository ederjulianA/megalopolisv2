@extends('layouts.tshop')

@section('titulo')
Dirección de envio
@stop

@section('content-page')

@stop

@section('content')

<div class="container main-container headerOffset"> 
@if(Session::has('message-alert'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif

		<div class="row">
  
			   	<div class="breadcrumbDiv col-lg-12">
			        <ul class="breadcrumb">
			          <li> <a href="{{URL::route('index')}}">Home</a> </li>
			          <li> <a href="{{URL::route('perfil')}}">Mi cuenta</a> </li>
			          <li class="active"> Dirección de envió </li>
			        </ul>
			     </div>
  		</div>


  		<!--INFORMACION DE ENVIO-->


  <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
        
        	<h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> Tu información de envió </span></h1>
        
        	<div class="row userInfo">
            
      
                
                <div class="col-lg-12 col-xs-12">
                    <h2 class="block-title-2"> Por favor Ingresa los datos solicitados. </h2>
                    <p class="required"><sup>*</sup> Campos Requeridos</p>
                </div>
                
                <form method="post" action="{{URL::route('direccion-envio-post')}}">
            
            	<div class="col-xs-12 col-sm-6">
                
                    
                    	<div class="form-group required">
                            <label for="nombre">Nombre(s) <sup>*</sup> </label>
                            <input required type="text" name="nombre" class="form-control" id="nombre" placeholder="First Name" value="{{$ship->nombre}}">
                          </div>
                          
                          <div class="form-group required">
                            <label for="apellido">Apellido(s) <sup>*</sup> </label>
                            <input required type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="{{$ship->apellido}}">
                          </div>

                          <div class="form-group required">
                            <label for="ciudad">Ciudad <sup>*</sup> </label>
                            <select name="ciudad">
                            	@foreach($ciudades as $ciudad)
                            		<option value="{{$ciudad->id}}"<?php if($ciudad->id == $ship->ciudad) { echo('selected');}?>>{{$ciudad->ciudad}}</option>
                            	@endforeach

                            	
                            </select>
                          </div>
                          
                       	<div class="form-group required">
                            <label for="Barrio">Barrio <sup>*</sup>   </label>
                            <input required type="text" name="barrio" class="form-control" id="Barrio" placeholder="barrio" value="{{$ship->barrio}}">
                          </div>
                 
                          
                          <div class="form-group required">
                            <label for="InputAddress">Dirección <sup>*</sup>   </label>
                            <input required type="text" name="direccion" class="form-control" id="InputAddress" placeholder="Dirección" value="{{$ship->direccion}}">
                          </div>
                          
                          
                          
                          
                          
                         
                          
                          
                                   
                         
                          
                          
                           
                          
                       
                          
                      
                      

                
                
                </div>
                
                
                <div class="col-xs-12 col-sm-6">
                
                
                	
                        
                          <div class="form-group">
                            <label for="InputAdditionalInformation">Notas a tener encuenta para el envio</label>
                            <textarea rows="3" cols="26" name="notas" class="form-control" id="InputAdditionalInformation" >{{$ship->notas}}</textarea>
                          </div>
                          
                          <div class="form-group required">
                            <label for="celular">Telefono <sup>*</sup></label>
                             <input  required type="tel"  name="telefono" class="form-control" id="celular" value="{{$ship->telefono}}">

                          </div>
                          
                          
                          
                          
                          
                         
                     
                        
                                        
                
                </div>
                
                <div class="col-lg-12 col-xs-12 clearfix">
                    <button type="submit" class="btn   btn-primary"><i class="fa fa-map-marker"></i> Guardar Dirección </button>
                </div>
                {{Form::token()}}
                
                </form>
                
                
                <div class="col-lg-12 col-xs-12  clearfix ">
    
                            <ul class="pager">
                          <li class="previous pull-right"><a href="{{URL::route('index')}}"> <i class="fa fa-home"></i> Inicio </a></li>
                          <li class="next pull-left"><a href="{{URL::route('perfil')}}">&larr; Perfil</a></li>
                          </ul>
               </div>
            
            
            
            </div><!--/row end-->
        	
       
        </div>
         <div class="col-lg-3 col-md-3 col-sm-5">
         </div>
         
         
      </div><!--/row-->


   </div>   

@stop