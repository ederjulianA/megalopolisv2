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
              <h3 > Disfruta de los beneficios de tu tienda en línea </h3>
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
              <p>
                  @if($empresa->desc_larga == "")
                        {{$empresa->desc_breve}}
                    @else
                      {{$empresa->desc_larga}}
                    @endif

               </p></div>
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
  
  
  <!--/.section-block--> 
  

<div class="parallax-section parallax-image-1">
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="parallax-content clearfix">
          <h1 class="parallaxPrce"> REGÍSTRATE YA </h1>
          <h2 class="uppercase">Con un pago <b>ÚNICO</b> pago de $120.000</h2>
          <h3 > Crea tu tienda en cuestión de minutos, nosotros nos ajustamos a tus requerimientos.</h3>
          <div style="clear:both"></div>
          <a class="btn btn-discover " data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"> <i class="fa fa-shopping-cart"></i> CREAR TIENDA </a> </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</div>
<!--/.parallax-image-1--> 

<div class="parallax-section parallax-image-2">
  <div class="w100 parallax-section-overley">
  </div>
</div>

{{ HTML::script('Tshop/assets/js/grids.js')}}

@stop

@section('scriptHome')
  {{ HTML::script('Tshop/assets/js/home.js')}}
@stop