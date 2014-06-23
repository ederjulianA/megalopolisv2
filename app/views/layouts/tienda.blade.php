<!DOCTYPE HTML>
<html>
<head>
<title>Free Aditii Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<!-- Estilos de la tienda megalopolis -->
    {{ HTML::style('tienda/css/style.css', array('media' => 'screen'))}}


<!-- cargando jquery para la tienda -->
	{{ HTML::script('/tienda/js/jquery.min.js')}}
<!-- start slider -->	

    {{ HTML::style('tienda/css/slider.css', array('media' => 'screen'))}}

	
	
	{{ HTML::script('tienda/js/modernizr.custom.28468.js')}}
	<script type="text/javascript" src=""></script>
	{{ HTML::script('tienda/js/jquery.cslider.js')}}
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<!-- Owl Carousel Assets -->
		<link href="tienda/css/owl.carousel.css" rel="stylesheet">
		
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    
		    {{ HTML::script('tienda/js/owl.carousel.js')}}
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
	
		{{ HTML::script('tienda/js/move-top.js')}}
		
		{{ HTML::script('tienda/js/easing.js')}}
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>

<body>

@yield('content')
</body>
</html>