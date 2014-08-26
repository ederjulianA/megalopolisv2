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

<div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
      <input type="search"  data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>
<!-- /.Fixed navbar  --> 
    
	
<div class="parallax-section parallax-fx parallax-image-aboutus parallaxOffset no-padding">
  <div class="w100 ">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="parallax-content clearfix animated ">
            <h1 class="x2large">
              Megalópolis Company 
            </h1>
            <h5 class="parallaxSubtitle">
              Tus tiendas y tus productos en línea. 
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.parallax -->

<div class="container main-container ">
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <h1 class="title-big text-center section-title-style2">
            <span >
              Nosotros
            </span>
          </h1>
          
          <p class="lead text-center">
		      	Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online.          </p>
          
          
          <hr class="hr hr30">
          <div class="row animated">
            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
  
              <h3 class="block-title-3">
                ¿Por qué Megalópolis?  
              </h3>
              <p>
              Nos dimos cuenta que, para una empresa particular o micro-empresas, montar sus negocios online y ofrecer sus productos era una tarea tediosa respecto a tiempos de desarrollo del sitio y costos del mismo. Por eso nace Megalópolis, que ofrece un espacio online donde se pueden crear catálogos de empresas de distintos gremios de forma fácil y sobre todo económica para sus usuarios.
              </p>
              
              
              
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
              <h3 class="block-title-3">
                ¿Cómo?  
              </h3>
              <p>
              Desarrollamos un sitio web donde ofrecemos un espacio online en el que puedes registrar tu empresa y subir tu catálogo de productos, mostrar tu catálogo en tu fan page y escalar tu negocio online. Todo esto en cuestión de minutos.
              </p>
              
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
              <h3 class="block-title-3">
                ¿Cuándo?
              </h3>
              <p>
              Llevamos cerca de dos meses del lanzamiento del sitio con el programa de pioneros con el que hemos conseguido el apoyo de importantes empresas de la ciudad de Bucaramanga. Este es un proceso de aprendizaje en el que crecemos en función de los requerimientos de nuestros clientes y la satisfacción de sus necesidades. Comprar y vender online de forma sencilla e intuitiva es lo que nos mueve y nuestra motivación para seguir adelante con este proyecto.
              
            </div>
            
            
            
          </div><!--/.row-->
          
          <hr>
        </div>
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->


<div class="gap"> </div>



@stop