@extends('layouts.tienda')

@section('content')

	<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="tienda/images/logo.png" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="#"><i>MEGA</i></a>
				<!--<ul class="sub-icon1 list">
					<li><h3>Carrito de Compras</h3><a href=""></a></li>
					<li><p>aqui estaran  <a href="contact.html">contactanos</a> to view them</p></li>
				</ul>-->
			</li>
		</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="{{URL::route('tienda')}}">Home</a></li> |
				@foreach($categorias as $cat)
					<li><a href="{{$cat->id}}">{{$cat->nombre}}</a></li> |

				@endforeach
				
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="{{URL::route('tienda')}}">Home</a></li>
	            	        @foreach($categorias as $cat)
					<li class="nav-item"><a href="{{$cat->id}}">{{$cat->nombre}}</a></li> |

				@endforeach
							
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="tienda/js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start slider -->
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Bienvenido a Megalopolis Store</h2>
					<p>Megalopolis Store es nuestra alternativa a nuestro servicio de catalogos en linea.</p>
					<a href="#" class="da-link">Unete</a>
					<div class="da-img"><img src="tienda/images/slider1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Tus productos online</h2>
					<p>Ponte en contacto con nuestro equipo, y en minutos tendras tus productos en linea.</p>
					<a href="details.html" class="da-link">Contactanos</a>
					<div class="da-img"><img src="tienda/images/slider2.png" alt="image01" /></div>
				</div>
			
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded shoes</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded jeens</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded shoes</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded jeens</a></h4>
				<a href="#" class="btn">shop</a>
			</div>
		</div>	
	</div>
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>Nuestros Productos</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
		

			@foreach($productos as $pro)
			<div class="grid1_of_3">
				<a href="{{URL::route('productos',array('id'=>$pro->id))}}">
					{{HTML::image($pro->imagen,$pro->nombre,array('height'=>'250px', 'widht'=>'auto'))}}
					
					<h3>{{$pro->nombre}}</h3>
					<div class="price">
						<h4>{{$pro->precio}}<span>Detalle</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>

			@endforeach
			
			<div class="clear"></div>
		</div>
		
	</div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>Catalogo online</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Vende con nosotros</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Megalopolis Company</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Links Rapidos</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
				
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  Megalopolis Company | Template by&nbsp;&nbsp;<a href="#"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

@stop