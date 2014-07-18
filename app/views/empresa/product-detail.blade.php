@extends('layouts.tshop')
<!-- Bootstrap core CSS -->
<link href="Tshop/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="Tshop/assets/css/style.css" rel="stylesheet">


<!-- styles needed by smoothproducts.js for product zoom  -->
<link rel="stylesheet" href="Tshop/assets/css/smoothproducts.css">

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
        <li><a href="index.html">Home</a> </li>
        <li><a href="category.html">MOTOS COLOMBIA</a> </li>
        <li><a href="sub-category.html">CASCOS</a> </li>
        <li class="active">CASCO INTEGRAL ABATIBLE DOBLE VISOR CERTIFICADO 3110 </li>
      </ul>
    </div>
  </div>
  <div class="row transitionfx">
  
   <!-- left column -->
    <div class="col-lg-6 col-md-6 col-sm-6">
      <!-- product Image and Zoom -->
      <div class="main-image sp-wrap col-lg-12 no-padding"> 
        <a href="Tshop/images/product/m2.jpg"><img src="Tshop/images/product/m2.jpg" class="img-responsive" alt="img"></a> 
        <a href="Tshop/images/product/m2.1.jpg"><img src="Tshop/images/product/m2.1.jpg" class="img-responsive" alt="img"></a>
        <a href="Tshop/images/product/m2.2.jpg"><img src="Tshop/images/product/m2.2.jpg" class="img-responsive" alt="img"></a> 
      </div>
    </div><!--/ left column end -->
    
    
    <!-- right column -->
    <div class="col-lg-6 col-md-6 col-sm-5">
    
      <h1 class="product-title"> Casco Integral Abatible Doble Visor Certificado 3110</h1>
      <h3 class="product-code">Codigo de Producto : DEN1098</h3>
      <div class="product-price"> 
          <span class="price-sales"> $80,000</span> 
          <span class="price-standard">$95,000</span> 
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
          <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first" title="Add to Cart" type="button">Agregar</button>
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
          <li><a href="#size" data-toggle="tab">Tamaño</a></li>
          <li><a href="#shipping" data-toggle="tab">Envios</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="details">HORARIO DE ATENCION TELEFONICA 
LUNES A VIRNES 9AM-5PM
SABADOS 9AM-1PM
VIA EMAIL TODOS LOS DIAS A CUALQUIER HORA.<br>
            100% Original<br></div>
          <div class="tab-pane" id="size"> 1.INTEGRAL ABATIBLE<br>
2.CERTIFICADO CON RESOLUCION 1737 DE 2004<br>
3.EL MEJOR EN SU CLASE<br>
4.LA MEJOR AEROGRAFIA<br>
5.PRODUCTO NACIONAL<br>
6.DOBLE LENTE<br>
7.GARANTIA DE REPUESTOS<br>
"DE 6 PIEZAS EN ADELANTE TE DAMOS UN 30% DE DESCUENTO"<br>
            <br>
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
          <a href="#"> <i  class="fa fa-facebook"></i></a> 
            <a href="#"> <i  class="fa fa-twitter"></i></a> 
            <a href="#"> <i  class="fa fa-google-plus"></i></a> 
            <a href="#"> <i  class="fa fa-pinterest"></i></a> </div>
      </div>
      <!--/.product-share--> 
      
    </div><!--/ right column end -->
    
  </div>
  <!--/.row-->
    
  <div class="row recommended">
  
    <h1> TALVES TE INTERESE </h1>
  <div id="SimilarProductSlider">
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/m2.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">CASCO INTEGRAL ABATIBLE DOBLE VISOR CERTIFICADO 3110 </a></h4>
            <div class="price"> <span>$80,000</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/m3.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">Casco Icon Alliance Torrent White S Moto</a></h4>
            <div class="price"> <span>$450,000</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/m4.jpg" alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">WHITE GOLD</a></h4>
            <div class="price"> <span>$385,000</span></div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/m5.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">Guantes Moto Bicicleta De Protección Livianos</a></h4>
            <div class="price"> $<span>55,000</span></div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/30.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">CROWN ROCK</a></h4>
            <div class="price"> <span>$500</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/a5.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">SLIM ROCK</a></h4>
            <div class="price"> <span>$50 </span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/36.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">ROCK T-Shirts </a></h4>
            <div class="price"> <span>$130</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="Tshop/images/product/13.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">Denim T-Shirts </a></h4>
            <div class="price"> <span>$43</span> </div>
          </div>
        </div>
      </div><!--/.item-->
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
<script type="text/javascript" src="Tshop/assets/js/smoothproducts.min.js"></script> 

<!-- jQuery minimalect // custom select   --> 
<script src="Tshop/assets/js/jquery.minimalect.min.js"></script> 

<!-- include touchspin.js // touch friendly input spinner component   --> 
<script src="Tshop/assets/js/bootstrap.touchspin.js"></script> 

<!-- include custom script for site  --> 
<script src="Tshop/assets/js/script.js"></script>

