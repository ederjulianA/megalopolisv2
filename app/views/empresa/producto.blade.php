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
<meta property="og:url" content="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/{{$producto->imagen}}"/>

@stop
<!-- Bootstrap core CSS -->
<link href="Tshop/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="Tshop/assets/css/style.css" rel="stylesheet">


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


<!-- styles needed by smoothproducts.js for product zoom  -->
{{HTML::style('Tshop/assets/css/smoothproducts.css')}}


<!-- styles needed by carousel slider -->
<link href="Tshop/assets/css/owl.carousel.css" rel="stylesheet">
<link href="Tshop/assets/css/owl.theme.css" rel="stylesheet">

<!-- styles needed by minimalect -->
<link href="Tshop/assets/css/jquery.minimalect.min.css" rel="stylesheet">
<!-- styles needed by checkRadio -->
<link href="Tshop/assets/css/ion.checkRadio.css" rel="stylesheet">
<link href="Tshop/assets/css/ion.checkRadio.cloudy.css" rel="stylesheet">
<!-- styles needed by mCustomScrollbar -->
<link href="Tshop/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">


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

    


@section('content')
<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li><a href="{{URL::route('catalogo-sede', array('nombre_publico'=>$producto->nombre_sede))}}">{{$producto->razon_social}}</a> </li>
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
          <span class="price-sales"> ${{$producto->precio_detal}}</span> 
          <!--<span class="price-standard">$95,000</span> -->
      </div>
      
      <div class="details-description">
        <p>In scelerisque libero ut elit porttitor commodo Suspendisse laoreet magnaaaa. </p>
      </div>
      
      <div class="color-details"> 
        <span class="selected-color"><strong>COLOR</strong></span>
        <ul class="swatches Color">
          <li class="selected"> <a style="background-color:#f1f40e" > </a> </li>
          <li> <a style="background-color:#adadad" > </a> </li>
          <li> <a style="background-color:#4EC67F" > </a> </li>
        </ul>
      </div>
      <!--/.color-details-->
      
      <div class="productFilter">
        <div class="filterBox">
          <select>
            <option value="strawberries" selected>Cantidad</option>
            <option value="mango">1</option>
            <option value="bananas">2</option>
            <option value="watermelon">3</option>
            <option value="grapes">4</option>
            <option value="oranges">5</option>
            <option value="pineapple">6</option>
            <option value="peaches">7</option>
            <option value="cherries">8</option>
          </select>
        </div>
        <div class="filterBox">
          <select>
            <option value="strawberries" selected>Talla</option>
            <option value="mango">XL</option>
            <option value="bananas">XXL</option>
            <option value="watermelon">M</option>
            <option value="apples">L</option>
            <option value="apples">S</option>
          </select>
        </div>
      </div>
      <!-- productFilter -->
      
      <div class="cart-actions">
        <div class="addto">
          <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first" title="Add to Cart" type="button">Comprar</button>
          <a class="link-wishlist wishlist"  >Agregar a Favoritos</a> </div>
          
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
          	{{$producto->desc_breve}}
          </div>
          
          <div class="tab-pane" id="shipping">
            <table >
              <colgroup>
              <col style="width:33%">
              <col style="width:33%">
              <col style="width:33%">
              </colgroup>
              <tbody>
                <tr>
                  <td>Normal</td>
                  <td>1-5 Dias habiles</td>
                  <td>$7,000</td>
                </tr>
                <tr>
                  <td>Dos dias</td>
                  <td>2 dias habiles</td>
                  <td>$15,000</td>
                </tr>
               
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">* Free on orders of $50 or more</td>
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
            <div class="fb-share-button" data-href="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}" data-width="50" data-type="button_count"></div>
            <a href="https://twitter.com/share" data-url="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}" data-via="tumegalopolis" class="twitter-share-button" data-lang="es" data-size="large" data-hashtags="tuMegalopolis"> <i  class="fa fa-twitter"></i></a> 
           
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
        <div class="product"> <a class="product-image" href="{{URL::route('productos',array('id'=>$mp->id,'sede'=>$mp->sede_id))}}"> <img src="{{asset($mp->imagen)}}" alt="{{$mp->nombre}}"> </a>
          <div class="description">
            <h4><a href="{{URL::route('productos',array('id'=>$mp->id,'sede'=>$mp->sede_id))}}">{{$mp->nombre}} </a></h4>
            <div class="price"> <span>${{$mp->precioP}}</span> </div>
          </div>
        </div>
      </div><!--/.item-->
  	@endforeach
     
      
    
    </div>  <!--/.recommended--> 
    
  </div>
  
  
  <div style="clear:both"></div>
  
  
</div> <!-- /main-container -->


<div class="gap"></div>


@stop


<!-- Le javascript
================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="Tshop/assets/js/jquery/1.8.3/jquery.js"></script> 
<script src="Tshop/assets/bootstrap/js/bootstrap.min.js"></script> 

<!-- include jqueryCycle plugin --> 
<script src="Tshop/assets/js/jquery.cycle2.min.js"></script> 
<!-- include easing plugin --> 
<script src="Tshop/assets/js/jquery.easing.1.3.js"></script> 

<!-- include  parallax plugin --> 
<script type="text/javascript"  src="Tshop/assets/js/jquery.parallax-1.1.js"></script> 

<!-- optionally include helper plugins --> 
<script type="text/javascript"  src="Tshop/assets/js/helper-plugins/jquery.mousewheel.min.js"></script> 

<!-- include mCustomScrollbar plugin //Custom Scrollbar  --> 

<script type="text/javascript" src="Tshop/assets/js/jquery.mCustomScrollbar.js"></script> 

<!-- include checkRadio plugin //Custom check & Radio  --> 
<script type="text/javascript" src="Tshop/assets/js/ion-checkRadio/ion.checkRadio.min.js"></script> 

<!-- include grid.js // for equal Div height  --> 
<script src="Tshop/assets/js/grids.js"></script> 

<!-- include carousel slider plugin  --> 
<script src="Tshop/assets/js/owl.carousel.min.js"></script> 

<!-- include smoothproducts // product zoom plugin  --> 

{{HTML::script('Tshop/assets/js/smoothproducts.min.js')}}

<!-- jQuery minimalect // custom select   --> 
<script src=""></script> 
{{HTML::script('Tshop/assets/js/jquery.minimalect.min.js')}}

<!-- include touchspin.js // touch friendly input spinner component   --> 

{{HTML::script('Tshop/assets/js/bootstrap.touchspin.js')}}

<!-- include custom script for site  --> 
{{HTML::script('Tshop/assets/js/script.js')}}




