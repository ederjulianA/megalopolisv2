@extends('layouts.tshop')

@section('titulo')
	{{$producto->producto_nombre}}
@stop

@section('content-page')
	<meta name="description" content="{{$producto->producto_descripcion}}">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="{{$producto->producto_nombre}}"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="{{$producto->producto_descripcion}}"/>
<meta property="og:url" content="http://www.tumegalopolis.com/producto/{{$producto->id}}-{{$producto->sede_id}}-{{$producto->slug}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/{{$producto->imagen}}"/>

@stop



<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->  

<!-- include pace script for automatic web page progress bar  -->


 <script>
    paceOptions = {
      elements: true
    };
</script>

<script src="Tshop/assets/js/pace.min.js"></script>
<style type="text/css">
  .cantidad{
    width: 90%;
    font-weight: bold;
    font-size: 25px;
    max-width: 100%;
    padding: 5px;
  }
  .cantidad-item{
    color: #EF2143;
  }
  
</style>

    


@section('content')
<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home-</a> </li>
        <li><a href="{{URL::route('catalogo-sede', array('empresa'=>$producto->id_empresa, 'nombre_publico'=>$producto->nombre_sede))}}">{{$producto->razon_social}}</a> </li>
        <li><a href="#">{{$producto->categoria_nombre}}</a> </li>
        <li class="#">{{$producto->producto_nombre}} </li>
      </ul>
    </div>
  </div>
  <div class="row transitionfx">
  
   <!-- left column -->
    <div class="col-lg-6 col-md-6 col-sm-6">
      <!-- product Image and Zoom -->
      <div class="main-image sp-wrap col-lg-12 no-padding"> 

      	<a href="{{asset($producto->imagen)}}"><img src="{{asset($producto->imagen)}}" class="img-responsive" alt="img"></a> 
      	@if(!$producto->img1)
      	@else
      		<a href="{{asset($producto->img1)}}"><img src="{{asset($producto->img1)}}" class="img-responsive" alt="img"></a> 
      	@endif

      	@if(!$producto->img2)
      	@else
      		<a href="{{asset($producto->img2)}}"><img src="{{asset($producto->img2)}}" class="img-responsive" alt="img"></a> 
      	@endif

      
        
        
        
      </div>
    </div><!--/ left column end -->
    
    
    <!-- right column -->
    <div class="col-lg-6 col-md-6 col-sm-5">
    
      <h1 class="product-title"> {{$producto->producto_nombre}}</h1>
      <h3 class="product-code">Codigo de Producto : DEN1098</h3>
      <div class="product-price"> 
          <span class="price-sales"> ${{number_format($producto->precio_detal, 0, '', '.')}}</span> 
          <!--<span class="price-standard">$95,000</span> -->
      </div>
      
      <div class="details-description">
        <p>{{$producto->producto_descripcion}}. </p>
      </div>
      
      <!--<div class="color-details"> 
        <span class="selected-color"><strong>COLOR</strong></span>
        <ul class="swatches Color">
          <li class="selected"> <a style="background-color:#f1f40e" > </a> </li>
          <li> <a style="background-color:#adadad" > </a> </li>
          <li> <a style="background-color:#4EC67F" > </a> </li>
        </ul>
      </div>-->
      <!--/.color-details-->
      
      <div class="productFilter">
        <div class="filterBox">
          <div class="cantidad">

            Disponibles  <span class="cantidad-item">{{$producto->cantidad}}</span>Unidad(es).
          </div>
          <!--<select>
            <option value="strawberries" selected>Cantidad</option>
            <option value="mango">1</option>
            <option value="bananas">2</option>
            <option value="watermelon">3</option>
            <option value="grapes">4</option>
            <option value="oranges">5</option>
            <option value="pineapple">6</option>
            <option value="peaches">7</option>
            <option value="cherries">8</option>
          </select>-->
        </div>
        <!--<div class="filterBox">
          <select>
            <option value="strawberries" selected>Talla</option>
            <option value="mango">XL</option>
            <option value="bananas">XXL</option>
            <option value="watermelon">M</option>
            <option value="apples">L</option>
            <option value="apples">S</option>
          </select>
        </div>-->
      </div>
      <!-- productFilter -->
      
      <div class="cart-actions">
        <div class="addto">
         @if(Auth::check() )

            @if($ship)
              <form id="form-cart-before" method="post" action="{{URL::route('form-carrito-previo')}}">
                  <input type="hidden" name="id_producto" id="id_producto" value="{{$producto->id}}">
                  <input type="hidden" name="id_empresa" id="id_empresa" value="{{$producto->id_empresa}}">
                  <input type="hidden" name="id_comprador" id="id_comprador" value="{{auth::user()->id}}">

                  <button  class="button btn-cart cart first" title="contactar a {{$producto->producto_nombre}}" type="submit">COMPRAR</button>
             </form>


            @else

            <button class="button btn-cart cart first" data-toggle="modal" data-target="#infoshipping"> COMPRAR</button>

            @endif
              
         @else
          <button class="button btn-cart cart first"  href="#"data-toggle="modal" data-target="#ModalLogin">COMPRAR</button> 
         @endif
         
          @if(Auth::check() )
                        {{ Favs::mostrarFav(Auth::user()->id, $producto->id)}}
                        

                      @else
                       
                        <a class="link-wishlist wishlist"  href="#"data-toggle="modal" data-target="#ModalLogin">Agregar a Favoritos</a> 
                      @endif
                      </div>
          
          
        <div style="clear:both"></div>
        
        <h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i>Disponible</h3>
        <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i> Out of stock</h3>
        <h3 class="incaps"> <i class="glyphicon glyphicon-lock"></i> Compra Segura</h3>
      </div>
      <!--/.cart-actions-->
      
      <div class="clear"></div>
      
      <div class="product-tab w100 clearfix">
      
        <ul class="nav nav-tabs">
          <li class="active"><a href="#details" data-toggle="tab">Detalles</a></li>
          <li><a href="#size" data-toggle="tab">Sobre la Empresa</a></li>
          <li><a href="#shipping" data-toggle="tab">Envios</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="details">
          		{{$producto->producto_descripcion}}
          </div>
          <div class="tab-pane" id="size"> 
            dirección : {{$producto->direccion_empresa}}<br>
            Telefono : <strong>{{$producto->telefono}}</strong><br>
            email: <strong>{{$producto->email_empresa}}</strong><br>
            @if($producto->desc_breve_empresa == "")
              {{$producto->desc_larga}}
            @else
          	{{$producto->desc_breve_empresa}}
            @endif
          </div>
          
          <div class="tab-pane" id="shipping">
            <table >
              <colgroup>
              <col style="width:33%">
              <col style="width:33%">
              <col style="width:33%">
              </colgroup>
              <tbody>
              
               
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3"></td>
                </tr>
              </tfoot>
            </table>
          </div>
          
        </div> <!-- /.tab content -->
        
      </div><!--/.product-tab-->
      
      <div style="clear:both"></div>
      
      <div class="product-share clearfix">
        <p> COMPARTE ESTE PRODUCTO </p>
        <div class="socialIcon"> 
            <div class="fb-share-button" data-href="http://www.tumegalopolis.com/producto/{{$producto->id}}-{{$producto->sede_id}}-{{$producto->slug}}" data-width="50" data-type="button_count"></div>
            <a href="https://twitter.com/share" data-url="http://www.tumegalopolis.com/producto/{{$producto->id}}-{{$producto->sede_id}}-{{$producto->slug}}" data-via="tumegalopolis" class="twitter-share-button" data-lang="es" data-size="large" data-hashtags="tuMegalopolis"> <i  class="fa fa-twitter"></i></a> 
           
      </div>
      <!--/.product-share--> 
      
    </div><!--/ right column end -->
    
  </div>
  <!--/.row-->
    
  <div class="row recommended">
  
    <h1> TAL VEZ TE INTERESE </h1>
  <div id="SimilarProductSlider">

  	@foreach($masProductos as $mp)
  			 <div class="item">
        <div class="product"> <a class="product-image" href="{{URL::route('productos',array('id'=>$mp->id,'sede'=>$mp->sede_id,'slug'=>$mp->slug))}}"> <img src="{{asset($mp->imagen)}}" alt="{{$mp->nombre}}"> </a>
          <div class="description">
            <h4><a href="{{URL::route('productos',array('id'=>$mp->id,'sede'=>$mp->sede_id,'slug'=>$mp->slug))}}">{{$mp->nombre}} </a></h4>
            <div class="price"> <span>${{number_format($mp->precioP, 0, '', '.')}}</span> </div>
          </div>
        </div>
      </div><!--/.item-->
  	@endforeach
     
      
    
    </div>  <!--/.recommended--> 
    
  </div>
  
  
  <div style="clear:both"></div>
  
  
</div> <!-- /main-container -->


<div class="gap"></div>
@if(Auth::check())
<!-- Modal -->
<div class="modal fade" id="infoshipping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="myModalLabel">Información de Envió</h4>
        <p>Esta información es indispensable en el momento que hagas una compra. Puedes cambiar esta información las veces que quieras en la administración de tu <a href="{{URL::route('perfil')}}" target="_blank" class="btn btn-info">Perfil</a>. <strong>Completa la información y sigue con tu compra.</strong> </p>
      </div>
      <div class="modal-body">
          <div class="form-group required">
                            <label for="nombre">Nombre(s) <sup>*</sup> </label>
                            <input required type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="">
                          </div>
                          
                          <div class="form-group required">
                            <label for="apellido">Apellido(s) <sup>*</sup> </label>
                            <input required type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" value="">
                          </div>

                          <div class="form-group required">
                            <label for="ciudad">Ciudad <sup>*</sup> </label>
                            <select name="ciudad" id="ciudad">
                              @foreach($ciudades as $ciudad)
                                <option value="{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
                              @endforeach

                              
                            </select>
                          </div>
                          
                        <div class="form-group required">
                            <input type="hidden" name="id_comprador" id="id_comprador" value="{{auth::user()->id}}">
                            <label for="Barrio">Barrio <sup>*</sup>   </label>
                            <input required type="text" name="barrio" class="form-control" id="Barrio" placeholder="barrio" value="">
                          </div>
                 
                          
                          <div class="form-group required">
                            <label for="InputAddress">Dirección <sup>*</sup>   </label>
                            <input required type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección" value="">
                          </div>

                          <div class="form-group">
                            <label for="notas">Notas a tener encuenta para el envio</label>
                            <textarea rows="3" cols="26" name="notas" class="form-control" id="notas" ></textarea>
                          </div>
                          
                          <div class="form-group required">
                            <label for="celular">Telefono <sup>*</sup></label>
                             <input  required type="tel"  name="telefono" class="form-control" id="celular" value="">

                          </div>
      </div>
      <div class="modal-footer">
        <div id="ajax-info-shipping-form">
          
        </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn-nuevo-shipping">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
@endif

@stop







