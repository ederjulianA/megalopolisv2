@extends('layouts.tshop')

@section('titulo')
Megalopolis |Crea tu tienda en línea en tan solo minutos y aumenta las ganancias de tu negocio con tu catálogo online
@stop

@section('content-page')
    <meta name="description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="Megalopolis |Crea tu tienda en línea en tan solo minutos y aumenta las ganancias de tu negocio con tu catálogo online"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/Tshop/face.jpg"/>

@stop

@section('content')
<style type="text/css">

</style>
<div class="banner">
  <div class="full-container">
    <div class="slider-content">
      <ul id="pager" class="container">
      </ul>
      <div class="slider slider-v2">
        <div class="slider-item slider-item-img1 " data-cycle-pager-template="<a href=#> CREA TU TIENDA </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="parallax-content clearfix">
              <h1 class="parallaxPrce"> Haz parte de los pioneros Megalópolis </h1>
              <h3 > Disfruta de los beneficios de tu tienda en línea <b>COMPLETAMENTE GRATIS. </h3>
              <div style="clear:both"></div>
              <a class="btn btn-discover " data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"> <i class="fa fa-shopping-cart"></i> QUIERO SER PIONERO </a></div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 pull-right sliderText dark alpha80 hidden-xs">
                <div class="inner">
                  <h1>Crea tu tienda</h1>
                  <p class="hidden-xs">Regísrate y crea tu tienda virtual en minutos </p>
                  <a  href="#" class="slide-link"> <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          {{HTML::image('Tshop/images/slider/ciudad.jpg', 'ciudad', array('class'=>'img-responsive parallaximg sliderImg'))}} </div>
        <!--/.slider-item-->
        
        <div class="slider-item slider-item-img2  parallax" data-cycle-pager-template="<a href=#> PUBLICA TUS PRODUCTOS </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-lg-5 col-md-5 col-sm-5 pull-left sliderText dark alpha80 hidden-xs">
                <div class="inner">
                  <h1>Publica tus productos</h1>
                  <p class="hidden-xs">Registra tus nuevos productos y actualiza tu catálogo</p>
                  <a data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"  class="slide-link">Quiero mi tienda! <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          {{HTML::image('Tshop/images/slider/teletrabajo.jpg', 'Trabajo', array('class'=>'img-responsive parallaximg sliderImg'))}}  </div>
        <!--/.slider-item-->
        
        <div class="slider-item slider-item-img3  parallax" data-cycle-pager-template="<a href=#> AUMENTA TUS GANANCIAS </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-lg-4 col-md-4 col-sm-5 pull-right sliderText dark alpha80 transformRight hidden-xs">
                <div class="inner">
                  <h1>Aumenta tus ganancias</h1>
                  <p class="hidden-xs"> Aumenta tus clientes potenciales y disfruta de las ganancias de tu negocio online </p>
                  <a  data-toggle="modal"  data-dismiss="modal" href="#ModalSignup" class="slide-link">Quiero mi tienda! <span class="arrowUnicode">►</span></a> </div>
              </div>
            </div>
          </div>
          {{HTML::image('Tshop/images/slider/exito.jpg', 'Exito', array('class'=>'img-responsive parallaximg sliderImg'))}} </div>
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
    <h3 class="section-title style2 text-center"><span>PLANES</span></h3>
    <div id="productslider" class="owl-carousel owl-theme">
      <div class="item">
       <div class="product">
          <div class="image"> <a href="#">{{HTML::image('Tshop/images/product/product4.jpg', 'PLAN', array('class'=>'img-responsive'))}}</a>
            <div class="promotion"> <span class="new-product"> $35,000</span> <!--<span class="discount">15% OFF</span>--> </div>
          </div>
          <div class="description">
            <h4><a href="#">PLAN BASICO </a></h4>
            <p>Hasta 30 productos.</p>
            <span class="size"></span> </div>
          <!--<div class="price"> <span>$25.000</span> </div>-->
          <div class="action-control"> <a class="btn btn-primary" href="#"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ver plan</span> </a> </div>
        </div>
       </div> <!-- PLANES 1#############################################################################################################-->


      <div class="item">
        <div class="product">
          <div class="image"> <a href="#">{{HTML::image('Tshop/images/product/girl3.jpg', 'PLAN', array('class'=>'img-responsive'))}}</a>
            <div class="promotion"> <span class="new-product"> $50,000</span> <!--<span class="discount">15% OFF</span>--> </div>
          </div>
          <div class="description">
            <h4><a href="#">PLAN INTERMEDIO </a></h4>
            <p>A partir de 30 productos hasta 50.</p>
            <span class="size"></span> </div>
          <!--<div class="price"> <span>$25.000</span> </div>-->
          <div class="action-control"> <a class="btn btn-primary" href="#"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ver plan</span> </a> </div>
        </div>
       </div> <!-- PLANES 2#############################################################################################################-->



      <div class="item">
        <div class="product">
          <div class="image"> <a href="#">{{HTML::image('Tshop/images/product/girl2.jpg', 'PLAN', array('class'=>'img-responsive'))}}</a>
            <div class="promotion"> <span class="new-product"> $85,000</span> <!--<span class="discount">15% OFF</span>--> </div>
          </div>
          <div class="description">
            <h4><a href="#">PLAN PROFESIONAL </a></h4>
            <p>A partir de 50 productos hasta 80.</p>
            <span class="size"></span> </div>
          <!--<div class="price"> <span>$25.000</span> </div>-->
          <div class="action-control"> <a class="btn btn-primary" href="#"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ver plan</span> </a> </div>
        </div>

      </div><!-- PLANES 4#############################################################################################################-->


      <div class="item">
        <div class="product">
          <div class="image"> <a href="#">{{HTML::image('Tshop/images/product/girl1.jpg', 'PLAN', array('class'=>'img-responsive'))}}</a>
            <div class="promotion"> <span class="new-product"> $120,000</span> <!--<span class="discount">15% OFF</span>--> </div>
          </div>
          <div class="description">
            <h4><a href="#">PLAN MEGA </a></h4>
            <p>MÁS DE 80 PRODUCTOS</p>
            <span class="size"></span> </div>
          <!--<div class="price"> <span>$25.000</span> </div>-->
          <div class="action-control"> <a class="btn btn-primary" href="#"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ver plan</span> </a> </div>
        </div>

      </div><!-- PLANES 3#############################################################################################################-->

      
      
     
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
          <h3 > Completamente <b>GRATIS</b> por tiempo limitado </h3>
          <div style="clear:both"></div>
          <a class="btn btn-discover " data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"> <i class="fa fa-shopping-cart"></i> REGISTRARME </a> </div>
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
    <h3 class="section-title style2 text-center"><span>NUESTRAS EMPRESAS</span></h3>
    <div class="container">
      <div class="row xsResponse">
      @foreach($empresas as $empresa)
          <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="{{URL::route('empresa-info', array('nombre_publico'=>$empresa->nombre_publico))}}">{{HTML::image($empresa->logo, 'img', array('class'=>'img-responsive'))}}</a>
            </div>
            <div class="description">
              <h4><a href="{{URL::route('empresa-info', array('nombre_publico'=>$empresa->nombre_publico))}}">{{$empresa->razon_social}}</a></h4>
              <p>{{$empresa->desc_breve}} </p></div>
            <!--<div class="discount plan"  > <span ></span> </div>-->
          </div>
        </div>
        <!--/.item-->
      @endforeach
        
       

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
            <img src="Tshop/images/product/simbolo.png" alt= "img">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{ HTML::script('Tshop/assets/js/grids.js')}}

@stop

@section('scriptHome')
  {{ HTML::script('Tshop/assets/js/home.js')}}
@stop