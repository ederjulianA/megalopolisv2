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


 

<script src="Tshop/assets/js/pace.min.js"></script>
    
  
    

    


@section('content')
<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li><a href="category.html">MEN COLLECTION</a> </li>
        <li><a href="sub-category.html">TSHIRT</a> </li>
        <li class="active">Lorem ipsum dolor sit amet </li>
      </ul>
    </div>
  </div>
  <div class="row transitionfx">
  
   <!-- left column -->
    <div class="col-lg-6 col-md-6 col-sm-6">
      <!-- product Image and Tshop/ -->
      <div class="main-image sp-wrap col-lg-12 no-padding"> 
        <a href="Tshop/images/zoom/zoom1hi.jpg"><img src="Tshop/images/zoom/zoom1.jpg" class="img-responsive" alt="img"></a> 
        <a href="Tshop/images/zoom/zoom2hi.jpg"><img src="Tshop/images/zoom/zoom2.jpg" class="img-responsive" alt="img"></a>
        <a href="Tshop/images/zoom/zoom3hi.jpg"><img src="Tshop/images/zoom/zoom3.jpg" class="img-responsive" alt="img"></a> 
      </div>
    </div><!--/ left column end -->
    
    
    <!-- right column -->
    <div class="col-lg-6 col-md-6 col-sm-5">
    
      <h1 class="product-title"> Lorem ipsum dolor sit amet</h1>
      <h3 class="product-code">Product Code : DEN1098</h3>
      <div class="product-price"> 
          <span class="price-sales"> $70</span> 
          <span class="price-standard">$95</span> 
      </div>
      
      <div class="details-description">
        <p>In scelerisque libero ut elit porttitor commodo Suspendisse laoreet magna. </p>
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
            <option value="strawberries" selected>Quantity</option>
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
            <option value="strawberries" selected>Size</option>
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
          <button onclick="productAddToCartForm.submit(this);" class="button btn-cart cart first" title="Add to Cart" type="button">Add to Cart</button>
          <a class="link-wishlist wishlist"  >Add to Wishlist</a> </div>
          
        <div style="clear:both"></div>
        
        <h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i> In stock</h3>
        <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i> Out of stock</h3>
        <h3 class="incaps"> <i class="glyphicon glyphicon-lock"></i> Secure online ordering</h3>
      </div>
      <!--/.cart-actions-->
      
      <div class="clear"></div>
      
      <div class="product-tab w100 clearfix">
      
        <ul class="nav nav-tabs">
          <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
          <li><a href="#size" data-toggle="tab">Size</a></li>
          <li><a href="#shipping" data-toggle="tab">Shipping</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="details">Sed ut eros felis. Vestibulum rutrum imperdiet nunc a interdum. In scelerisque libero ut elit porttitor commodo. Suspendisse laoreet magna nec urna fringilla viverra.<br>
            100% Cotton<br></div>
          <div class="tab-pane" id="size"> 16" waist<br>
            34" inseam<br>
            10.5" front rise<br>
            8.5" knee<br>
            7.5" leg opening<br>
            <br>
            Measurements taken from size 30<br>
            Model wears size 31. Model is 6'2 <br>
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
                  <td>Standard</td>
                  <td>1-5 business days</td>
                  <td>$7.95</td>
                </tr>
                <tr>
                  <td>Two Day</td>
                  <td>2 business days</td>
                  <td>$15</td>
                </tr>
                <tr>
                  <td>Next Day</td>
                  <td>1 business day</td>
                  <td>$30</td>
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
        <p> SHARE </p>
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
  
    <h1> YOU MAY ALOS LIKE </h1>
  <div id="SimilarProductSlider">
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/a1.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">YOUR LIFE</a></h4>
            <div class="price"> <span>$57</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/a2.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">RED CROWN</a></h4>
            <div class="price"> <span>$44</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/a3.jpg" alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">WHITE GOLD</a></h4>
            <div class="price"> <span>$35</span></div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/a4.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">DENIM 4240</a></h4>
            <div class="price"> $<span>55</span></div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/30.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">CROWN ROCK</a></h4>
            <div class="price"> <span>$500</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/a5.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">SLIM ROCK</a></h4>
            <div class="price"> <span>$50 </span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/36.jpg"  alt="img"> </a>
          <div class="description">
            <h4><a href="san-remo-spaghetti">ROCK T-Shirts </a></h4>
            <div class="price"> <span>$130</span> </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item">
        <div class="product"> <a class="product-image" > <img src="images/product/13.jpg"  alt="img"> </a>
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

