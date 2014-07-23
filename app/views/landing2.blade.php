@extends('layouts.tshop')

@section('content')
<div class="banner">
  <div class="full-container">
    <div class="slider-content">
      <ul id="pager" class="container">
      </ul>
      <div class="slider slider-v2">
        <div class="slider-item slider-item-img1 " data-cycle-pager-template="<a href=#> LATEST COLLECTION </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="parallax-content clearfix">
              <h1 class="parallaxPrce"> Crea tu tienda virtual en minutos </h1>
              <h3 > Publica y compra los productos de tu interés. </h3>
              <div style="clear:both"></div>
              <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> CREAR TIENDA </a></div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 pull-right sliderText dark alpha80 hidden-xs">
                <div class="inner">
                  <h1>LATEST COLLECTION</h1>
                  <p class="hidden-xs"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpa </p>
                  <a  href="category.html" class="slide-link">SHOP NOW <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          <img  alt="img" src="Tshop/images/slider/ciudad.jpg" class="img-responsive parallaximg sliderImg"> </div>
        <!--/.slider-item-->
        
        <div class="slider-item slider-item-img2  parallax" data-cycle-pager-template="<a href=#> WOMEN COLLECTION </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-lg-5 col-md-5 col-sm-5 pull-left sliderText dark alpha80 hidden-xs">
                <div class="inner">
                  <h1>WOMEN COLLECTION</h1>
                  <p class="hidden-xs"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpa </p>
                  <a href="category.html"  class="slide-link">SHOP NOW <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          <img alt="img" src="Tshop/images/slider/slider4.jpg" class="img-responsive parallaximg sliderImg"> </div>
        <!--/.slider-item-->
        
        <div class="slider-item slider-item-img3  parallax" data-cycle-pager-template="<a href=#> NEW COLLECTION </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-lg-4 col-md-4 col-sm-5 pull-right sliderText dark alpha80 transformRight hidden-xs">
                <div class="inner">
                  <h1>NEW COLLECTION</h1>
                  <p class="hidden-xs"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpa </p>
                  <a href="category.html"  class="slide-link">SHOP NOW <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          <img alt="img" src="Tshop/images/slider/slider2.jpg" class="img-responsive parallaximg sliderImg"> </div>
        <!--/.slider-item--> 
      </div>
      <!--/.slider-v2--> 
    </div>
    <!--/.slider-content--> 
  </div>
  <!--/.full-container--> 
</div>
<!--/.banner style2-->

<div class="container main-container"> 
  
  <!-- Main component call to action -->
  
  <div class="row featuredPostContainer globalPadding style2">
    <h3 class="section-title style2 text-center"><span>PROMOCIONES</span></h3>
    <div id="productslider" class="owl-carousel owl-theme">
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/m2.2.jpg" alt="img" class="img-responsive"></a>
            <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
          </div>
          <div class="description">
            <h4><a href="product-details.html">Casco para moto </a></h4>
            <p>Casco con estilo para motociclista </p>
            <span class="size"></span> </div>
          <div class="price"> <span>$25.000</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/m4.jpg" alt="img" class="img-responsive"></a>
            <div class="promotion"> <span class="discount">15% OFF</span> </div>
          </div>
          <div class="description">
            <h4><a href="product-details.html">Chaqueta motociclista</a></h4>
            <p>Chaqueta marca x disponible en Jhon Motos. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/13.jpg" alt="img" class="img-responsive"></a>
            <div class="promotion"> <span class="new-product"> NEW</span> </div>
          </div>
          <div class="description">
            <h4><a href="product-details.html">Camiseta unicolor </a></h4>
            <p>Camiseta ver unicolor marca x. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/9.jpg" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="product-details.html">Vestido Dama </a></h4>
            <p>Vestido para dama marca x. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/12.jpg" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="product-details.html">sequitur mutationem </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/13.jpg" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="product-details.html">consuetudium lectorum.</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> <span class="old-price">$75</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/21.jpg" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="product-details.html">parum claram</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/24.jpg" alt="img" class="img-responsive"></a> </div>
          <div class="description">
            <h4><a href="product-details.html">duis dolore </a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/15.jpg" alt="img" class="img-responsive"></a></div>
          <div class="description">
            <h4><a href="product-details.html">feugait nulla facilisi</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <span class="size">XL / XXL / S </span> </div>
          <div class="price"> <span>$25</span> <span class="old-price">$75</span> </div>
          <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Agregar al carrito </span> </a> </div>
        </div>
      </div>
    </div>
    <!--/.productslider--> 
    
  </div>
  <!--/.featuredPostContainer--> 
</div>
<!-- /main container -->

<div class="parallax-section parallax-image-1">
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="parallax-content clearfix">
          <h1 class="parallaxPrce"> REGÍSTRATE YA </h1>
          <h2 class="uppercase">Haz parte de las tiendas virtuales</h2>
          <h3 > Carrito de compras y tu catálogo de productos en línea </h3>
          <div style="clear:both"></div>
          <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> REGISTRARME </a> </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</div>
<!--/.parallax-image-1-->

<div class="container main-container"> 
  
  <!-- Main component call to action -->
  
  <div class="morePost row featuredPostContainer style2 globalPaddingTop " >
    <h3 class="section-title style2 text-center"><span>Productos destacados</span></h3>
    <div class="container">
      <div class="row xsResponse">
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/30.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">aliquam erat volutpat</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> <span>$25</span> </div>
            <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a> </div>
          </div>
        </div>
        <!--/.item-->
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/31.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="discount">15% OFF</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> <span>$25</span> </div>
            <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a> </div>
          </div>
        </div>
        <!--/.item-->
        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/34.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> <span>$25</span> </div>
            <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a> </div>
          </div>
        </div>

        <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/34.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> <span>$25</span> </div>
            <div class="action-control"> <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a> </div>
          </div>
        </div>
        <!--/.item-->
        
      
      
    </div>
    <!--/.container--> 
  </div>
  <!--/.featuredPostContainer-->
    
    <!--/.row--> 
  </div>
  <!--/.section-block-->
  
  <div class="width100 section-block">
    <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-left"></i> </a> </h3>
    <div class="row">
      <div class="col-lg-12">
        <ul class="no-margin brand-carousel owl-carousel owl-theme">
          <li><img src="Tshop/images/brand/s1.png" alt="img" ></li>
          <li><img src="Tshop/images/brand/s2.png" alt="img" ></li>
          <li><img src="Tshop/images/brand/s3.png" alt="img" ></li>
     
        </ul>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.section-block--> 
  
</div>
<!--main-container-->

<div class="parallax-section parallax-image-2">
  <div class="w100 parallax-section-overley">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="parallax-content clearfix">
            <h1 class="xlarge">  </h1>
            <h5 class="parallaxSubtitle"> Megalópolis Company </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{ HTML::script('Tshop/assets/js/grids.js')}}

@stop