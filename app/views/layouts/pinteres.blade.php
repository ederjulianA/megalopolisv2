<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @yield('content-page')

{{HTML::style('Pinteres/css/bootstrap.css')}}
{{HTML::style('Pinteres/css/shopfrog.css')}}
@yield('color-tema')




<!--
<link href="css/shopfrog-blue.css" rel="stylesheet" media="screen">
<link href="css/shopfrog-brown.css" rel="stylesheet" media="screen">
<link href="css/shopfrog-green.css" rel="stylesheet" media="screen">
<link href="css/shopfrog-orange.css" rel="stylesheet" media="screen">
<link href="css/shopfrog-grey.css" rel="stylesheet" media="screen">
<link href="css/shopfrog-bw.css" rel="stylesheet" media="screen">
-->
{{HTML::style('Pinteres/css/rateit.css')}}
{{HTML::style('Pinteres/css/magnific-popup.css')}}

{{HTML::script('Pinteres/js/respond.min.js')}} 		


<link href='//fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>   
{{HTML::script('Pinteres/js/modernizr.min.js')}} 
{{HTML::script('Pinteres/js/imagesloaded.min.js')}} 
{{HTML::script('Pinteres/js/jquery.masonry.min.js')}} 
{{HTML::script('Pinteres/js/jquery.rateit.min.js')}} 
{{HTML::script('Pinteres/js/jquery.magnific-popup.min.js')}} 
{{HTML::script('Pinteres/js/bootstrap.js')}} 
{{HTML::script('Pinteres/js/shopfrog.js')}}
{{HTML::script('Pinteres/js/jquery.numeric.js')}}  


</head>
<body class="@yield('class-body')">
	
<header class="navbar navbar-fixed-top clearfix">
		
	<a class="current brand" href="/">@yield('nombre_publico')</a>

	<div id="nav-basket" class="basket">
		<a href="#" class="basket-link">
			<div class="basket-count">{{Cart::totalItems()}}</div>
		</a>
			@if(Cart::total(false))
				<div class="submenu-container">
					@yield('carrito_items')
						
				</div>
			@else
			
			@endif	
	</div>
	
	<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>

	<nav class="navbar-collapse collapse" id="main-nav">
		<ul class="nav">
			<li class="current active">
				<a href="/" class="current top-level flat">Home</a>
			</li>
			<!--<li>
				<a href="collection.html" class="top-level">Swimwear</a>
				<div class="submenu-container">
					<ul class="submenu">
						<li class="active">
							<a href="collections.html" class="sml">Bikinis</a>
							<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> bikinis</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Bikini name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Bikini name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Bikini name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>	
						</li>
						<li>
							<a href="collection.html" class="sml">Tankinis</a>	
							<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> tankinis</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Tankini name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Tankini name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Tankini name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>	
						</li>
						<li>
							<a href="collection.html" class="sml">One piece</a>
								<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> one piece's</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>One piece name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>One piece name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>One piece name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>								
						</li>
						<li>
							<a href="collection.html" class="sml">Hipster</a>
								<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> hipsters</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Hipster name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Hipster name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Hipster name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>								
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="collection.html" class="top-level">Lingerie</a>
				<div class="submenu-container">
					<ul class="submenu">
						<li class="active">
							<a href="collection.html" class="sml">Bras</a>
							<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> bras</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Bra name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Bra name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Bra name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>	
						</li>
						<li>
							<a href="collection.html" class="sml">Briefs</a>	
							<ul class="submenu-preview">
								<li class="drop-link-li">
									<a href="collection.html" class="drop-link">View all<br> briefs</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Brief name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-2-small.jpg" alt="" />
										<p>Brief name</p>
										<p class="price">$20.00</p>
									</a>
								</li>
								<li>
									<a href="product.html">
										<img src="img/product-1-small.jpg" alt="" />
										<p>Brief name</p>
										<p class="price">$20.00</p>											
									</a>
								</li>
							</ul>	
						</li>
						<li><a href="collection.html" class="sml">Thongs</a></li>
						<li><a href="collection.html" class="sml">G-strings</a></li>
					</ul>
				</div>
			</li>	
			<li><a href="collection.html" class="top-level flat">Accessories</a></li>-->								
		</ul>
	</nav><!--/.nav-collapse -->
	
</header>


	
		@yield('content')
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<p>&copy; 2014 {{$empresa->razon_social}}</p>
				
			</div> <!-- //end span3 -->
			<div class="col-sm-6 col-md-3">
				<p>Con la tegnologia de <strong>Tumegalopolis</strong></p>
				
			</div> <!-- //end span3 -->
			<div class="col-sm-6 col-md-3">
				<p>Social links</p>
				<p><a href="">Facebook</a> / <a href="">Twitter</a> / <a href="">Pinterest</a></p>
			</div> <!-- //end span3 -->
			<div class="col-sm-6 col-md-3">
				
			</div> <!-- //end span3 -->						
		</div>
	</div>
</footer>
	
</body>
</html>