@extends('layouts.tshop')

@section('titulo')
	{{$producto->producto_nombre}}
@stop


@section('content-page')
	<meta name="description" content="{{$producto->producto_descripcion}}">
    <meta name="author" content="Megalopolis TEAM">



@stop

@section('content')
<style type="text/css">
  #cantidad{
    border: 2px solid #47D677;
    padding: 3px;
    width: 100%;
  }
</style>

<script type="text/javascript">
  $(document).on('click','#cantidad', function(){
  var cant_actual = $('#cantidad').val();
  var precio_unitario = $('#precio_unitario').val();
  var subtotal = (cant_actual * precio_unitario);
  $('#valor_total').val(subtotal);
  var np = subtotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  $('#subtotal').text("$"+np);
  $('#precio_total').text("$"+np);



});
</script>
				<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        
        <li class="active"> Confirmar compra </li>
      </ul>
    </div>
  </div>
  
  <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Esto es lo que hay en tu carrito actualmente </span></h1>
            <p>Al pulsar solicitar producto, le enviaremos una notificación al vendedor para que se ponga en contacto con Tigo</p>
  </div>

    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar"> 

      <h4 class="caps"><a href="#"><i class="fa fa-chevron-left"></i> Volver al catalogo </a></h4>
      </div>
</div>
  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-24">
      <div class="row userInfo">
        
        <div class="col-xs-12 col-sm-12">
        
       <div class="w100 clearfix"> 
       
       
               <ul class="orderStep ">
                   
                    
                    <li class="active"><a href="#"><i class="fa fa-check-square "> </i><span>Revisa tu pedido</span></a>  </li>
                
                </ul><!--orderStep-->
        </div>
        
        
        <div class="w100 clearfix">
        
        
        	<div class="row userInfo">
                
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Ver orden </h2>
                </div>
                              
            
            
            	<div class="col-xs-12 col-sm-12">
                      <div class="cartContent w100 checkoutReview ">
                        <table class="cartTable table-responsive"   style="width:100%">
                          <tbody>
                          <form method="get" action="{{URL::route('confirmar-compra')}}">
                            <tr class="CartProduct cartTableHeader">
                              <th style="width:15%"> Producto </th>
                              <th class="checkoutReviewTdDetails"  >Detalle</th>
                              <th style="width:20%" >Precio Unitario</th>
                              <th class="hidden-xs" style="width:15%">CANT</th>
                             
                              <th style="width:15%">Total</th>
                            </tr>
                            <tr class="CartProduct">
                              <td  class="CartProductThumb"><div> <a href="#">{{HTML::image($producto->imagen, $producto->producto_nombre)}}</a> </div></td>
                              <td ><div class="CartDescription">
                                  <h4> <a href="#">{{$producto->producto_nombre}} </a> </h4>
                                  <!--<span class="size">12 x 1.5 L</span>-->
                                 
                                </div></td>
                              <td class="delete"><div class="price ">${{number_format($producto->precio_detal, 0, '', '.')}} </div></td>
                              <td class="hidden-xs"><input type="number" class="integer" name="cantidad" id="cantidad" value="1" role="spinbutton" autocomplete="off" aria-valuenow="1" aria-invalid="false" tabindex="0" aria-valuemin="1" aria-valuemax="9000000000000000" min="1" ></td>
                             
                              <td class="price"><span id="subtotal">${{number_format($producto->precio_detal, 0, '', '.')}}</span></td>
                              <input type="hidden" id="precio_unitario" name="precio_unico" value="{{$producto->precio_detal}}">
                              <input type="hidden" id="id_producto" name="id_producto" value="{{$producto->id}}">
                              <input type="hidden" id="valor_unitario" name="valor_unitario" value="{{$producto->precio_detal}}">
                              <input type="hidden" id="valor_total" name="valor_total" value="{{$producto->precio_detal}}">
                              <input type="hidden" id="id_comprador" name="id_comprador" value="{{auth::user()->id}}">
                              <input type="hidden" id="id_empresa" name="id_empresa" value="{{$producto->id_empresa}}">
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                      <!--cartContent-->
                      
                      <div class="w100 costDetails">
                        <div class="table-block" id="order-detail-content">
                          <table class="std table" id="cart-summary">
                           
                           
                           
                           
                            <tr >
                              <td > Total </td>
                              <td id="total-price" class="price" ><span id="precio_total">{{number_format($producto->precio_detal, 0, '', '.')}} </span></td>
                            </tr>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--/costDetails-->


                      

          
          <!--/row-->
  
          
        </div>
                
                
                </div>
                
          
            
            
            
            </div><!--/row end-->
            
            
            
            <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> 
               </div>
               
               
               <div class="pull-right">
                <button type="submit"  class="btn btn-primary btn-small " > 
					Solicitar Producto &nbsp; <i class="fa fa-check"></i></button>
                 
              </div>
              </form>
               
               
              
            </div>
          </div>
          <!--/ cartFooter --> 
    
        	
       
     
        
        
        
        
        
        </div>
          
          
          
                
        </div>
      </div>
      <!--/row end--> 
      
  
    <!--<div class="col-lg-5 col-md-5 col-sm-14 rightSidebar"> 
      
        <div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                    <tbody id="lista-preguntas-tb"><tr >
                                      <td>Preguntar al vendedor</td>
                                      <td class="price" >?</td>
                                    </tr>
                                    @foreach($preguntas as $pregunta)
                                    	 <tr  style="">
                                      <td>{{$pregunta->pregunta}} ?</td>
                                      <td class="price" ><span class="success">{{$pregunta->respuesta}}</span></td>
                                    </tr>

                                    @endforeach
                                   
                                   

                                    
                                                                         
                                    </tbody>
                                    <tbody>
                                          <tr >
                                      <td > Dudas ? </td>
                                      <td class=" site-color" id="total-price"><textarea  id="pregunta-usuario"></textarea></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="hidden" id="id_producto" value="{{$producto->id}}">
                                        <input type="hidden" id="id_empresa" value="{{$producto->id_empresa}}">
                                        <input type="hidden" id="id_user" value="{{Auth::user()->id}}">
                                        <a id="btn-pregunta-user" class="btn btn-success btn-lg">Preguntar</a>
                                      </td>
                                    </tr>
                                    </tbody>
                                  </table> 
                                  </div>
      
    </div>-->
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  <script type="text/javascript">
    $(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });
  </script><script type="text/javascript">
  $(".numeric").numeric();
  $(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });
  $(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
  $(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });
  $("#remove").click(
    function(e)
    {
      e.preventDefault();
      $(".numeric,.integer,.positive").removeNumeric();
    }
  );
  </script>
  
  <div style="clear:both"></div>
</div>
<!-- /wrapper --> 
@stop