@extends('layouts.pinteres')



@section('nombre_publico')

		<!--{{HTML::image($empresa->logo, $empresa->razon_social, array('height'=>'50px'))}}-->
	{{$empresa->nombre_publico}}
@stop

@section('content-page')
	<meta name="description" content="@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
						@endif">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="{{$producto->producto_nombre}}"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
                    	@endif"/>
<meta property="og:url" content="{{$account}}.tumegalopolis.com/_/producto/{{$producto->slug}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/{{$producto->imagen}}"/>
@stop

@section('class-body')
	product-page
@stop

@section('titulo')
	Articulo {{$producto->producto_nombre}} 
@stop

@section('color-tema')
	<?php $col_tem = $empresa->color_tema;?>
		@if($col_tem == 1)
	{{HTML::style('Pinteres/css/shopfrog-pink.css')}}
	@elseif( $col_tem == 2)

	{{HTML::style('Pinteres/css/shopfrog-green.css')}}
	
	@elseif($col_tem == 3)
	{{HTML::style('Pinteres/css/shopfrog-orange.css')}}
	@elseif($col_tem == 4)
	{{HTML::style('Pinteres/css/shopfrog-blue.css')}}
	@elseif($col_tem == 5)
	{{HTML::style('Pinteres/css/shopfrog-brown.css')}}
	@elseif($col_tem == 6)
	{{HTML::style('Pinteres/css/shopfrog-bw.css')}}
	@elseif($col_tem == 7)
	{{HTML::style('Pinteres/css/shopfrog-grey.css')}}
	@endif
@stop

@section('carrito_items')
	<ul class="submenu-preview">
					@if($products)
						@foreach($products as $product)
							<li>
								<a href="" class="basket-item">
									<img src="{{asset($product->image)}}" alt="{{$product->name}}" height="100px" width="auto" />
									<p>{{$product->name}}</p>						
									<p class="price">{{$product->quantity}} x <span class="cur">$</span><span class="total">{{number_format($product->price, 0, '', '.')}}</span></p>											
								</a>
								<a href="" class="remove-basket-item">remover</a>
							</li>
						@endforeach	
					@endif	
					
						<li class="drop-link-li">
							<a href="/cart/" class="drop-link">Ver<br>Carrito</a>
						</li>
					</ul>
@stop

@section('content')
	<div class="container">
		<div class="row">

			<div class="col-xs-12">
				<a href="/">Home</a> > <a href="#">{{$producto->categoria_nombre}}</a> > <a href="#">{{$producto->nombre_sub}}</a> > {{$producto->producto_nombre}} 
			</div> <!-- //end span12 -->

		</div> <!-- //end row -->
	</div> <!-- //end container -->





				<div class="container product-main">
		<div class="row">

			<div class="col-sm-6">
				<div class="content">
				
					<!-- Product information for small screens -->
					<div class="product-details-small">
						<!-- Product name and manufacturer -->
						<h1>{{$producto->producto_nombre}}</h1>
						<small>por <a href="">{{$empresa->razon_social}}</a></small>

						<!-- Product rating and review info -->
						<div class="ratings clearfix">
							<div class="rateit" data-rateit-value="4.6" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
							<div class="extra">
								<!--<a href="#reviews">Read all 10 reviews</a> | <a href="review-product.html">Write a review</a>-->
							</div>
						</div>
					
						<!-- Pricing and offer info -->
						<div class="pricing clearfix">
							<p class="price"><span class="cur">$</span><span class="total">{{number_format($producto->precio_detal, 0, '', '.')}}</span> </p>
							<!--<p class="special">2 swimsuits for $35</p>-->
						</div>
					</div>
				
					<div class="main-imgs clearfix">
						<a href="{{asset($producto->imagen)}}" title="{{$producto->producto_nombre}}: view 1"><img id="img1" src="{{asset($producto->imagen)}}" alt="{{$producto->producto_nombre}}" class="main-img img-responsive" /></a>
						@if(!$producto->img1)
      					@else
      						<a href="{{asset($producto->img1)}}" title="{{$producto->producto_nombre}}: view 2"><img id="img2" src="{{asset($producto->img1)}}" alt="{{$producto->producto_nombre}}" class="main-img img-responsive background" /></a>
      					@endif
      					@if(!$producto->img2)
      					@else
      						<a href="{{asset($producto->img2)}}" title="{{$producto->producto_nombre}}: view 2"><img id="img3" src="{{asset($producto->img1)}}" alt="{{$producto->producto_nombre}}" class="main-img img-responsive background" /></a>
      					@endif
						
					</div>
					<ul class="alternate-images clearfix">
						<li><a href="#" data-img="img1"><img src="{{asset($producto->imagen)}}" alt="{{$producto->producto_nombre}}" height="80px" width="auto" /></a></li>
						@if(!$producto->img1)
						@else

						<li><a href="#" data-img="img2"><img src="{{asset($producto->img1)}}" alt="{{$producto->producto_nombre}}"  height="80px" width="auto"/></a></li>
						@endif

						@if(!$producto->img2)
						@else

						<li><a href="#" data-img="img3"><img src="{{asset($producto->img2)}}" alt="{{$producto->producto_nombre}}" height="80px" width="auto" /></a></li>
						@endif
					</ul>
				</div>
			</div> <!-- // end span6 -->

			<div class="col-sm-6">
				<div class="content">
					
					<!-- Product information for large screens -->
					<div class="product-details-large">
						<!-- Product name and manufacturer -->
						<h1>{{$producto->producto_nombre}}</h1>
						<small>por <a href="">{{$empresa->razon_social}}</a></small>

						<!-- Product rating and review info -->
						<div class="ratings clearfix">
							<div class="rateit" data-rateit-value="4.6" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
							<div class="extra">
								<!--<a href="#reviews">Read all 10 reviews</a> | <a href="review-product.html">Write a review</a>-->
							</div>
						</div>
					
						<!-- Pricing and offer info -->
						<div class="pricing clearfix">
							<p class="price"><span class="cur">$</span><span class="total">{{number_format($producto->precio_detal, 0, '', '.')}}</span> </p>
							<!--<p class="special">2 swimsuits for $35</p>-->
						</div>
					</div>
					
					<!-- Product options -->
					<form class="form-inline clearfix cart" method="post" action="/addCartT">
					<input type="hidden" name="product_id" value="{{$producto->id}}">
						              <input type="hidden" name="url" id="url" value="{{URL::current()}}">
						<div>
							<label>Cantidad</label>	
							<input type="text" required value="1" class="input-sm form-control" name="quantity">
						</div>
						<!--<div>
							<label>Size</label>
							<select class="input-sm form-control">
								<option>S</option>
								<option>M</option>
								<option>L</option>										
							</select>
						</div>-->							
						<button  type="submit"class="btn btn-large btn-atc">Agregar Producto</button>
					</form>
					
					<!-- Product description etc -->
					<ul class="nav nav-tabs" id="product-tabs">
						<li class="active"><a href="#description">Descripción</a></li>
						<li><a href="#care">Contacto</a></li>
						<li><a href="#sizing">Tamaños</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="description">
							<p>
								{{$producto->producto_descripcion}}
							</p>
							
						</div>
						<div class="tab-pane" id="care">
							<p>
								<h2>Datos de contacto</h2>
									{{$empresa->direccion_principal}}<br>
									{{$empresa->user->email}}<br>
									{{$empresa->telefono}}
							</p>
							
						</div>
						<div class="tab-pane" id="sizing">
							<p>

							 </p>
								
							<table class="table table-striped table-bordered">
								<tr>
									<th></th><th>Size</th><th>Bust (in)</th><th>Ribcage (in)</th><th>Waist (in)</th><th>Hip (in)</th><th>Torso (in)</th>
								</tr>
								<tr>
									<td rowspan="2">S</td><td>4</td><td>33 1/2</td><td>27</td><td>25 1/2</td><td>35 1/2</td><td>58 1/2</td>
								</tr>
								<tr>
									<td>6</td><td>34 1/2</td><td>28</td><td>26 1/2</td><td>36 1/2</td><td>60</td>
								</tr>
								<tr>
									<td rowspan="2">M</td><td>8</td><td>35 1/2</td><td>29</td><td>27 1/2</td><td>37 1/2</td><td>61 1/2</td>
								</tr>
								<tr>
									<td>10</td><td>36 1/2</td><td>30</td><td>28 1/2</td><td>38 1/2</td><td>63</td>
								</tr>
								<tr>
									<td rowspan="2">L</td><td>12</td><td>38</td><td>31 1/2</td><td>30</td><td>40</td><td>64 1/2</td>
								</tr>
								<tr>
									<td>14</td><td>39 1/2</td><td>33</td><td>31 1/2</td><td>41 1/2</td><td>66</td>
								</tr>
							</table>
						</div>
					</div>
					
					<!-- Share -->
					<ul class="share">
						<li>
							<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
						</li>
						<li>
							<div class="g-plusone" data-size="medium" data-annotation="none"></div>
						</li>
						<li>
							<a href="//pinterest.com/pin/create/button/?url=PAGEURL&amp;media=IMAGE&amp;description=DESCRIPTION" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt=""/></a>
						</li>
						<li>
							<div class="fb-like" data-href="PAGEURL" data-send="false" data-width="120" data-show-faces="false" data-layout="button_count"></div>
						</li>
					</ul>
					
					
				</div>
			</div> <!-- // end span6 -->
			
		</div> <!-- //end row -->

		
		
		<div class="row">
			<div class="col-xs-12">
				<div class="content clearfix">
					<h3>Mas productos</h3>
@foreach($masP as $pro)					
<div class="product medium">
	<div class="media">
		<a class='current' href="/_/producto/{{$pro->slug}}" title="product title">
			<img src="{{asset($pro->imagen)}}" alt="{{$pro->nombre}}" data-img="product-1" class="" height="150px" width="auto" />
		</a>
		<span class="plabel">Producto</span>				
	</div>
	<div class="details">
		<p class="name"><a class='current' href="product.html">{{$pro->nombre}}</a></p>
		<p class="price"><span class="cur">$</span><span class="total">{{number_format($pro->precioP, 0, '', '.')}}</span></p>
		<a href="" class="details-expand" data-target="details-000{{$pro->id}}">+</a>
	</div>
	<div class="details-extra" id="details-000{{$pro->id}}">
		<form class="form-inline" method="post" action="/addCartT">
							 <input type="hidden" name="product_id" value="{{$pro->id}}">
						              <input type="hidden" name="url" id="url" value="{{URL::current()}}">
			<div>
				<label>Cantidad</label>	
				<input type="text" class="input-sm form-control quantity" value="1" name="quantity">
			</div>
			<!--<div>
				<label>Size</label>
				<select class="input-sm form-control size">
					<option>S</option>
					<option>M</option>
					<option>L</option>										
				</select>
			</div>-->
			<button  type="submit"class="btn btn-bottom btn-atc qadd">Agregar Producto</button>
		</form>
					
	</div>
</div>
@endforeach




					
				</div>
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->		
		
	</div> <!-- //end container -->


		<!-- Social sharing scripts -->
<!-- Google plus -->
<script type="text/javascript">
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
</script>
<!-- Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- Pinterest -->
<script type="text/javascript">
	(function(d){
		var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
		p.type = 'text/javascript';
		p.async = true;
		p.src = '//assets.pinterest.com/js/pinit.js';
		f.parentNode.insertBefore(p, f);
	}(document));
</script>
<!-- Facebook -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

@stop