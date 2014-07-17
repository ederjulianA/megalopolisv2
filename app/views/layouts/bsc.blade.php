<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Megalopolis Bucaramanga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
       {{ HTML::style('BSC/bootstrap/css/bootstrap.css', array('media' => 'screen'))}}
       {{ HTML::style('BSC/bootstrap/css/united/bootstrap.css', array('media' => 'screen'))}}
       {{ HTML::style('BSC/css/main.css', array('media' => 'screen'))}}
       {{ HTML::style('BSC/css/jquery.rating.css', array('media' => 'screen'))}}


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
		<div class="row"><!-- start header -->
			<div class="span4 logo">
			<a href="index.html">
				<h1>Megalopolis Bucaramanga</h1>
			</a>
			</div>
			<div class="span8">
			
				<div class="row">
					<div class="span1">&nbsp;</div>
					<div class="span2">
						<!--<h4>Currency</h4>
						<a href="#">USD</a> |
						<a href="#"><strong>GBP</strong></a> |
						<a href="#">EUR</a>-->
					</div>
					<div class="span2">
						<a href="#"><h4>Mis favoritos (3)</h4></a>
						<a href="#">2 item(s) - $40.00</a>
					</div>					
					<div class="span3 customer_service">
						<h4>Entregas en toda la ciudad</h4>
						<h4><small>Servicio al cliente: 3013119198</small></h4>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="links pull-right">
						<a href="#">Home</a> |
						<a href="my_account.html">Mi Cuenta</a> |
						<!--<a href="cart.html">Shopping Cart</a> |-->
						<a href="#">Sobre Nosotros</a> |
						<a href="#">Contacto</a>
					</div>
				
				</div>
			</div>
		</div><!-- end header -->
		
		<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar">
					<div class="navbar-inner">
					  <div class="container" style="width: auto;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						  <span class="icon-bar"></span>

						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</a>
						<div class="nav-collapse">
						  <ul class="nav">
							  <li class="dropdown">
							  <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="listings.html">Nosotros</a></li>
								<li><a href="listings.html">Nuestros Productos</a></li>
								<!--<li class="divider"></li>
								<li class="nav-header">Accessories</li>
								<li><a href="listings.html">Keyboard</a></li>
								<li><a href="listings.html">Speakers</a></li>-->
							  </ul>
							</li>
							<li><a href="category.html">Laptops</a></li>

							<li><a href="category.html">Components</a></li>
							<li><a href="category.html">Tablets</a></li>
							<li class="dropdown">
							  <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Software <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="listings.html">Business & Office</a></li>
								<li><a href="listings.html">Children's Fun & Learning</a></li>
								<li><a href="listings.html"> Digital Imaging</a></li>
								<li class="divider"></li>
								<li class="nav-header">PC Games</li>
								<li><a href="listings.html">Action & Shooter</a></li>
								<li><a href="listings.html">Adventure</a></li>
								<li><a href="listings.html">Fighting</a></li>
							  </ul>
							</li>
							 <li><a href="listings.html">Phones &amp; PDAs</a></li>

						  </ul>

						  <ul class="nav pull-right">
						   <li class="divider-vertical"></li>
							<form class="navbar-search" action="">
								<input type="text" class="search-query span2" placeholder="Buscar">
								<button class="btn btn-primary btn-small search_btn" type="submit">Ir</button>
							</form>
							
						  </ul>
						</div><!-- /.nav-collapse -->
					  </div>
					</div><!-- /navbar-inner -->
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->	 <div class="row">
		<div class="span3">
			<!-- start sidebar -->
<ul class="breadcrumb">
    <li>Categorias</span></li>
</ul>
<div class="span3 product_list">
	<ul class="nav">
		<li>
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
		  </li>
		<li><a href="category.html">Tablets (1)</a></li>
		<li><a href="category.html">Software (0)</a></li>
		<li><a href="category.html">Phones &amp; PDAs (3)</a></li>
		<li><a href="category.html">Cameras (2)</a></li>
	</ul>
</div><!-- end sidebar -->		</div>
        @yield('content')
      <footer>
	<hr />
	<div class="row well no_margin_left">

	<div class="span3">
		<h4>Información</h4>
		<ul>
			<li><a href="two-column.html">Sobre Nosotros</a></li>
			<li><a href="typography.html">Entregas</a></li>
			<li><a href="typography.html">Politica de privacidad</a></li>
			<li><a href="typography.html">Terminos &amp; Condiciones</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Servicio al cliente</h4>
		<ul>
			<li><a href="contact.html">Contactanos</a></li>
			<li><a href="typography.html">Devoluciones</a></li>
			<li><a href="typography.html">Mapa del sitio</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Extras</h4>
		<ul>
			<li><a href="typography.html">Brands</a></li>
			
		</ul>
	</div>
	<div class="span2">
		<h4>My Account</h4>
		<ul>
			<li><a href="my_account.html">My Account</a></li>
			<li><a href="typography.html">Order History</a></li>
			<li><a href="typography.html">Wish List</a></li>
			<li><a href="typography.html">Newsletter</a></li>
		</ul>
	</div>

</footer>

</div> <!-- /container -->


<!--<div id="theme_switcher">
	<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Switch theme <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#" rel="united">United</a></li>
            <li><a href="#" rel="spacelab">Spacelab</a></li>
			<li><a href="#" rel="journal">Journal</a></li>
			<li><a href="#" rel="simplex">Simplex</a></li>
            <li><a href="#" rel="cerulean">Cerulean</a></li>
			<li><a href="#" rel="cyborg">Cyborg</a></li>
            <li><a href="#" rel="slate">Slate</a></li>
            <li><a href="#" rel="spruce">Spruce</a></li>
			<li><a href="#" rel="">Bootstrap</a></li>
		</ul>
	</div>
</div>-->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

{{ HTML::script('BSC/js/jquery.min.js')}}
{{ HTML::script('BSC/bootstrap/js/bootstrap.js')}}
{{ HTML::script('BSC/js/jquery.rating.pack.js')}}

<script>
$(function() {
	$('#theme_switcher ul li a').bind('click',
		function(e) {
			$("#switch_style").attr("href", "http://bootswatch.com/"+$(this).attr('rel')+"/bootstrap.min.css");    		
			return false;
		}
	);
});
</script>

</body>
</html>