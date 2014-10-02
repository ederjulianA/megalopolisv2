@extends('layouts.tshop')

@section('titulo')
Dirección de envio de tu pedido
@stop

@section('content')
	<style type="text/css">
	.p-info-envio{
		margin: 30px;
		font-size: 20px;
		letter-spacing: 1.5px;
	}
	</style>
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
		 <div class="col-lg-9 col-md-9 col-sm-12">
		    		<h3 class="section-title style2 text-center"> <span>Dirección de envio </span></h3>
		    		<p class="p-info-envio">Para seguir con el proceso de compra por favor actualiza tu información de envio.</p>
		    			     @if($ship)
          			<form method="post" action="{{URL::route('direccion-envio-post')}}">
            
           <div class="col-xs-12 col-sm-6">
                
                    
                    	<div class="form-group required">
                            <label for="nombre">Nombre(s) <sup>*</sup> </label>
                            <input required type="text" name="nombre" class="form-control" id="nombre" placeholder="First Name" value="{{$ship->nombre}}">
                          </div>
                          
                          <div class="form-group required">
                            <label for="apellido">Apellido(s) <sup>*</sup> </label>
                            <input type="hidden" name="url" id="url" value="{{URL::current()}}">
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
                    <button type="submit" class="btn   btn-primary"><i class="fa fa-map-marker"></i> Actualizar Dirección </button>
                </div>
                {{Form::token()}}
                
       	  </form>

                @else
 						<form method="post" action="{{URL::route('nueva-direccion-envio-post')}}">
            
            	         <div class="col-xs-12 col-sm-6">
                
                    
                    	<div class="form-group required">
                            <label for="nombre">Nombre(s) <sup>*</sup> </label>
                            <input required type="text" name="nombre" class="form-control" id="nombre" placeholder="First Name" value="">
                          </div>
                          
                          <div class="form-group required">
                            <label for="apellido">Apellido(s) <sup>*</sup> </label>
                            <input type="hidden" name="url" id="url" value="{{URL::current()}}">
                            <input required type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="">
                          </div>

                          <div class="form-group required">
                            <label for="ciudad">Ciudad <sup>*</sup> </label>
                            <select name="ciudad">
                            	@foreach($ciudades as $ciudad)
                            		<option value="{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
                            	@endforeach

                            	
                            </select>
                          </div>
                          
                       	<div class="form-group required">
                            <label for="Barrio">Barrio <sup>*</sup>   </label>
                            <input required type="text" name="barrio" class="form-control" id="Barrio" placeholder="barrio" value="">
                          </div>
                 
                          
                          <div class="form-group required">
                            <label for="InputAddress">Dirección <sup>*</sup>   </label>
                            <input required type="text" name="direccion" class="form-control" id="InputAddress" placeholder="Dirección" value="">
                          </div>
                          
                          
                          
                </div>
                
                
             <div class="col-xs-12 col-sm-6">
                
                
                	
                        
                          <div class="form-group">
                            <label for="InputAdditionalInformation">Notas a tener encuenta para el envio</label>
                            <textarea rows="3" cols="26" name="notas" class="form-control" id="InputAdditionalInformation" ></textarea>
                          </div>
                          
                          <div class="form-group required">
                            <label for="celular">Telefono <sup>*</sup></label>
                             <input  required type="tel"  name="telefono" class="form-control" id="celular" value="">

                          </div>
                          <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                          
                          
                          
                          
                          
                         
                     
                        
                                        
                
                </div>
                
                <div class="col-lg-12 col-xs-12 clearfix">
                    <button type="submit" class="btn   btn-primary"><i class="fa fa-map-marker"></i> Actualizar Dirección </button>
                </div>
                {{Form::token()}}
                
				</form>


                @endif
		    	
		  </div>
		    <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
		    	 <div class="w100 cartMiniTable">
		    	 <h3 class="section-title style2 text-center"> <span>Tu compra </span></h3>

              <table id="cart-summary" class="std table">
				@if($item)              
	                <tbody>
	                  <tr >
	                    <td>Total productos</td>
	                    <td class="price" >${{number_format($item->total(), 0, '', '.')}}</td>
	                  </tr>
	                  
	                  
	                 
	                  <tr >
	                    <td > Total </td>
	                    <td class=" site-color" id="total-price">${{number_format($item->total(), 0, '', '.')}}</td>
	                  </tr>
	                  <tr >
	                    <td colspan="2"  ><div class="input-append couponForm">
	                        
                            @if($ship)
                               
                                    <form method="POST" action="{{URL::route('pagarItem')}}">
                                      <input type="hidden" name="identifier" value="{{$item->identifier}}">
                                      <input type="hidden" name="id_empresa" value="{{$item->company}}">
                                      <input type="hidden" name="id_producto" value="{{$item->id}}">
                                      <input type="hidden" name="id_comprador" value="{{Auth::user()->id}}">

                                      <input type="hidden" name="valor_unitario" value="{{$item->price}}">
                                      <input type="hidden" name="cant" value="{{$item->quantity}}">
                                      <input type="hidden" name="totalItem" value="{{$item->total()}}">
                                      <button type="submit">PAGAR</button>
                                      {{Form::token()}}
                                    </form>

                            @else

                            @endif
                         
	                        
	                      </div></td>
	                  </tr>
	                </tbody>
	               @endif 
                <tbody>
                </tbody>
              </table>
            </div>
		    	
		    </div>
		</div>    
	</div>

@stop