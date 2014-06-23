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
			<li><a class="active-icon c1" href="#"><i>$300</i></a>
				<ul class="sub-icon1 list">
					<li><h3>shopping cart empty</h3><a href=""></a></li>
					<li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
				</ul>
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
				<li class="active"><a href="index.html">Home</a></li> |
				<li><a href="sale.html">sale</a></li> |
				<li><a href="handbags.html">handbags</a></li> |
				<li><a href="accessories.html">accessories</a></li> |
				<li><a href="wallets.html">wallets</a></li> |
				<li><a href="sale.html">sale</a></li> |
				<li><a href="index.html">mens store</a></li> |
				<li><a href="shoes.html">shoes</a></li> |
				<li><a href="sale.html">vintage</a></li> |
				<li><a href="service.html">services</a></li> |
				<li><a href="contact.html">Contact us</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
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
					<h2>welcome to aditii</h2>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="tienda/images/slider1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="tienda/images/slider2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="tienda/images/slider3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="tienda/images/slider4.png" alt="image01" /></div>
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
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded jeens</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded shoes</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded tees</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="tienda/images/c3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">branded jeens</a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>	
	</div>
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>featured products</h2>
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
				<a href="details.html">
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
				<h4>featured sale</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>mens store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>women store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
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
			<p class="link">&copy;  All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

@stop