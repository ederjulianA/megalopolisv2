@extends('layouts.tshop')

@section('titulo')
	Tu carrito de compras
@stop

@section('content')

<style type="text/css">
	.nocantidad{
		max-width: 100%;
		width: 100%;
		padding: 10px;
		text-align: center;
		color: #fff;
		background-color: red;
	}
</style>
			<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        
        <li class="active">Tu compra </li>
      </ul>
    </div>
  </div><!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Mi compra </span></h1>
      <p>Por favor termina tu compra</p>
      @if(Session::has('message-alert'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <!--<h4 class="caps"><a href="category.html"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>-->
    </div>
  </div><!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="cartContent w100">
            <table class="cartTable table-responsive" style="width:100%">
              <tbody>
              
                <tr class="CartProduct cartTableHeader">
                  <td style="width:15%"  > Producto </td>
                  <td style="width:30%"  >Detalles</td>
                  <td style="width:10%"  class="delete">&nbsp;</td>
                  <td style="width:10%" >CANT</td>
                  <td style="width:10%" >Descuento</td>
                  <td style="width:15%" >Total</td>
                  <td style="width:10%" >Acciones
                     
                  </td>
                </tr>
                
                
                
                @foreach($products as $product)
               	<tr class="CartProduct">
                  <td  class="CartProductThumb"><div> <a href="#">{{HTML::image($product->image, $product->name, array('width'=>'auto', 'height'=>'100'))}}</a> </div></td>
                  <td ><div class="CartDescription">
                      <h4> <a href="#">{{$product->name}} </a> </h4>
                      
                      <div class="price"> $<span>{{number_format($product->price, 0, '', '.')}}</span></div>
                    </div></td>
                  <td class="delete"><a title="Delete" href="{{URL::route('removeItem', array('identifier'=>$product->identifier))}}"> <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                  <td ><input class="quanitySniper cantidad" type="text" data-toggle="{{$product->id}}" value="{{$product->quantity}}" name="quanitySniper"  id="cantidad-{{$product->identifier}}" data="{{$product->identifier}}"></td>
                  <td >0</td>
                  <td class="price">${{number_format($product->total(), 0, '', '.')}}</td>
                  <td>
                    @if(Auth::check())
                        
                        <a href="{{URL::route('checkout2',array('identifier'=>$product->identifier))}}" class="btn btn-success">PAGAR</a>
                       

                    @else
                      <a data-toggle="modal" data-target="#ModalLogin" class="btn btn-success">PAGAR</a>
                    @endif
                     </td>

                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
          <!--cartContent-->
          
          <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> <div id="mensaje-ajax"></div> <!--<a href="#" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a>--> </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-default" id="btn-update-car"> <i class="fa fa-undo"></i> &nbsp; Actualizar carro </button>
              </div>
            </div>
          </div> <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <div class="contentBox" >
        <div class="w100 costDetails">
          <div class="table-block" id="order-detail-content">
          @if(Auth::check())
         
           @else
          
           @endif
            <div class="w100 cartMiniTable">
              <table id="cart-summary" class="std table">
				@if($products)              
	                <tbody>
	                  <tr >
	                    <td>Total products</td>
	                    <td class="price" >${{number_format(Cart::total(), 0, '', '.')}}</td>
	                  </tr>
	                  
	                  
	                 
	                  <tr >
	                    <td > Total </td>
	                    <td class=" site-color" id="total-price">${{number_format(Cart::total(), 0, '', '.')}}</td>
	                  </tr>
	                  <tr >
	                    <td colspan="2"  ><div class="input-append couponForm">
	                        <input class="col-lg-8" id="appendedInputButton" type="text"  placeholder="Coupon code" >
	                        <button class="col-lg-4 btn btn-success" type="button">Aplicar!</button>
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
      <!-- End popular --> 
      
    </div>
    <!--/rightSidebar--> 
    
  </div><!--/row-->

  </div>



  
@stop