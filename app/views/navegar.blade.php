@extends('layouts.bsc')


@section('titulo')
Empresas Megalopolis ||
@stop
@section('content-page')

<meta name="description" content="Empresas en Megalopolis|| .">
    <meta name="author" content="Megalopolis TEAM">

    <meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/navegar"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/logo_2x.png"/>
@stop

@section('content')

<style type="text/css">
	.img-empresa{
		height: 110px;
		width: auto;
	}
</style>
		<!-- start sidebar -->
<ul class="breadcrumb">
    <li>Categorias</span></li>
</ul>
<div class="span3 product_list">
	<ul class="nav">
		<!--<li>
			<a class="active" href="category.html">Desktops (12)</a>
			<ul>
				<li><a href="listings.html"> - PC (11)</a></li>
				<li><a class="active" href="listings.html"> - Mac (1)</a></li>
			</ul>
		  </li>
		<li>
			<a href="category.html">Laptops &amp; Notebooks (5)</a>
			<ul>
				<li><a href="listings.html"> - Macs (0)</a></li>
				<li><a href="listings.html"> - Windows (0)</a></li>
			  </ul>
		  </li>
		<li>
			<a href="category.html">Components (2)</a>
				<ul>
				<li><a href="listings.html"> - Mice and Trackballs (0)</a></li>
				<li><a href="listings.html"> - Monitors (2)</a></li>
				<li><a href="listings.html"> - Printers (0)</a></li>
				<li><a href="listings.html"> - Scanners (0)</a></li>
				<li><a href="listings.html"> - Web Cameras (0)</a></li>
			  </ul>
		  </li>-->
		@foreach( $categorias as $categoria)
			<li><a href="#">{{$categoria->nom_sector}}</a></li>
		@endforeach
		
	</ul>
</div><!-- end sidebar -->		</div>
				<div class="span9">

			<div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
		<img src="BSC/css/images/carousel_1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Productos Megalopolis</h4>
                  <p>Estos Productos son patrocinados por Megalopolis.</p>
                </div>

              </div>
              <div class="item">
                <img src="BSC/css/images/carousel_2.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Productos Megalopolis</h4>
                  <p>Estos Productos son patrocinados por Megalopolis.</p>
                </div>
              </div>

              <div class="item">
		<img src="BSC/css/images/carousel_3.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Productos Megalopolis</h4>
                  <p>Estos Productos son patrocinados por Megalopolis.</p>
                </div>
              </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
          </div>
		  
		  
		  
		<div class="span7 popular_products">
		 <h4>Nuestras Empresas</h4><br />
<ul class="thumbnails">

	@foreach($empresas as $empresa)
		 <li class="span2">
          <div class="thumbnail">
            <a href="product.html">{{HTML::image($empresa->logo, $empresa->razon_social, array('class'=>'img-empresa'))}}</a>
            <div class="caption">
              <a href="#"> <h5>{{$empresa->razon_social}}</h5></a>  <br /><br />
            </div>
          </div>
        </li>
	@endforeach
       
	  

        

      </ul>
		</div>
        <div class="span2">
		
		 <div class="roe">
		<h4>Novedades</h4><br />
		<p>Suscribete al boletin semanal de megalopolis para estar al tanto de todas las novedades.</p>
		
		    <form class="form-search">
    <input type="text" class="span2" placeholder="Tu Email" /><br /><br />
    <button type="submit" class="btn pull-right">Suscribir</button>
    </form>
		</div><br /><br />
            <a href="#"><img alt="" title="" src="BSC/css/images/paypal_mc_visa_amex_disc_150x139.gif" /></a>
			<a href="#"><img alt="" src="BSC/css/images/bnr_nowAccepting_150x60.gif" /></a>

		</div>
	  
      </div>

@stop











