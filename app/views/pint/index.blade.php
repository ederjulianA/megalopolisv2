@extends('layouts.pinteres')

@section('nombre_publico')

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
<meta property="og:title" content="{{$empresa->razon_social}}"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
                    	@endif"/>
<meta property="og:url" content="{{$account}}.tumegalopolis.com/"/>
<meta property="og:image" content="{{$account}}.tumegalopolis.com/{{$empresa->logo}}"/>
@stop


@section('carrito_items')
	<ul class="submenu-preview">
					@if($products)
						@foreach($products as $product)
							<li>
								<a href="#" class="basket-item">
									<img src="{{asset($product->image)}}" alt="" height="100px" width="auto" />
									<p>{{$product->name}}</p>						
									<p class="price">{{$product->quantity}} x <span class="cur">$</span><span class="total">{{number_format($product->price, 0, '', '.')}}</span></p>											
								</a>
								<a href="" class="remove-basket-item">remover</a>
							</li>
						@endforeach	
					@endif	
					
						<li class="drop-link-li">
							<a href="#" class="drop-link">Ver<br>Carrito</a>
						</li>
					</ul>
@stop


@section('content')

	<div id="product-board" class="clearfix">

				<!--
					Products
					--------
					Each item on the product board is identified by the 'product' class.
					There are two size variations, identified by the classes 'medium' or 'large'.
					
					Details expansion:
					The details expansion is operated by an id. 
					The 'details-extra' div has an id, eg: 'details-0001'
					This is paired with the anchor tag with class 'details-expand' which has a matching data-target of that id.
				-->
			
				<div class="product large cta">
					<div class="content">
						<h3>{{$empresa->razon_social}}!</h3>
						<p>
						@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
                    	@endif</p>
					</div>
					<a href="collection.html" class="btn btn-bottom">Ver todos los Productos &rarr;</a>	
				</div>
					@foreach($productos as $pro)
						<div class="product {{Favs::clase()}}">
					<div class="media">
						<a href="product.html" title="product title">
							<img src="{{asset($pro->imagen)}}" alt="product title" data-img="{{asset($pro->imagen)}}" class="img-responsive" />
						</a>
						<span class="plabel">Producto</span>				
					</div>
					<div class="details">
						<p class="name"><a href="#">{{$pro->producto_nombre}}</a></p>
						<p class="price"><span class="cur">$</span><span class="total">{{number_format($pro->precio_detal, 0, '', '.')}}</span></p>
						<a href="" class="details-expand" data-target="details-000{{$pro->id}}">+</a>
					</div>
					<div class="details-extra" id="details-000{{$pro->id}}">
						<form class="form-inline" method="post" action="/addCartT">
							 <input type="hidden" name="product_id" value="{{$pro->id}}">
						              <input type="hidden" name="url" id="url" value="{{URL::current()}}">
							<div>
								<label>Cantidad</label>	
								<input type="text" class="input-sm form-control quantity" name="quantity" value="1">
							</div>
							<!--<div>
								<label>Size</label>
								<select class="input-sm form-control size">
									<option>S</option>
									<option>M</option>
									<option>L</option>										
								</select>
							</div>-->
							<button class="btn btn-bottom btn-atc qadd">Agregar Producto</button>
						</form>
									
					</div>
						</div>
					@endforeach	
				
				
				
				
				
				
				
				<div class="product medium cta alt">
					<a href="collection.html">
						<div class="content">
							<p class="poff">10% <br /> off!</p>
							<p>All bikini's &rarr;</p>
						</div>
					</a>
				</div>		
				
				
				
				
				<div class="product medium cta alt">
					<a href="collection.html">
						<div class="content">
							<p class="poff">20% <br /> off!</p>
							<p>All accessories &rarr;</p>
						</div>
					</a>
				</div>
				
				
				
				<div class="product medium cta">
					<a href="">
						<div class="content">
							<p class="poff">Like <br /> us!</p>
							<p>en facebook &rarr;</p>
						</div>
					</a>
				</div>		
				
						
		</div> <!-- //end product-board -->
	
	<!--<div class="load-more-container">
		<button class="btn load-more">
			load more
		</button>
	</div>-->
@stop