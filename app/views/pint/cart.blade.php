@extends('layouts.pinteres')



@section('nombre_publico')

	{{$empresa->nombre_publico}}
@stop

@section('content-page')
	
@stop

@section('class-body')
	page-general
@stop

@section('titulo')
	Carrito {{$empresa->razon_social}}
@stop

@section('color-tema')
	<?php $col_tem = 3;?>
	@if($col_tem == 1)
	{{HTML::style('Pinteres/css/shopfrog-pink.css')}}
	@elseif( $col_tem == 2)

	{{HTML::style('Pinteres/css/shopfrog-green.css')}}
	@elseif($col_tem == 3)
	{{HTML::style('Pinteres/css/shopfrog-orange.css')}}
	@endif
@stop

@section('carrito_items')
	<ul class="submenu-preview">
					@if($products)
						@foreach($products as $product)
							<li>
								<a href="" class="basket-item">
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
	<div class="container">
		<div class="row">

			<div class="col-xs-12">
				<a href="index.html">Home</a> > Shopping cart
			</div> <!-- //end span12 -->

		</div> <!-- //end row -->
	</div> <!-- //end container -->
	
	<div class="container main-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<h1>Tu carrito de compras</h1>
					
					<div class="empty-cart">
						<p class="lead">Your don't currently have any items in your cart.</p>
						<p>Please <a href="/">return to the shop</a>.</p>
					</div>
					
					<form action="shopping-cart.php" method="post" class="shopping-cart">
						<table class="table table-striped">
							@if($products)
								@foreach($products as $product)
									<tr>
									<td class="img"><img src="{{asset($product->image)}}" alt="" height="85px" width="auto" /></td>
									<td class="name"><a href="#">{{$product->name}}</a></td>
									<td class="">
										<input class="quanitySniper cantidad" type="number" data-toggle="{{$product->id}}" value="{{$product->quantity}}" name="quanitySniper"  id="cantidad-{{$product->identifier}}" data="{{$product->identifier}}">
										
									</td>
									<td class="stock instock"></td>
									<td class="quantity-cell">
										</td>									
									</td>
									<td class="sub-total"><span class="currency">$</span><span class="total">{{number_format($product->total(), 0, '', '.')}}</span></td>
									<td><a href="" class="cart-remove pull-right"><span class="remove-small">x</span><span class="remove-large">remove</span></a></td>
									</tr>
								@endforeach	
							@else
							
							@endif	
									
												
							<tr class="cart-summary">
								<td colspan="5"></td>
								<td colspan="2" class="cart-total"><span class="currency">$</span><span class="total-total">{{number_format(Cart::total(), 0, '', '.')}}</span></td>
							</tr>	
							<tr class="cart-summary">
								<td colspan="7">
									<a class="btn btn-large pull-right" href="checkout.html">PAGAR</a>
									<!-- <input class="btn" value="Checkout" /> -->
								</td>
							</tr>	
						</table>
					</form>
					<div class="shopping-cart-help">
						<p>Update or remove items from your cart before proceeding to checkout to calculate delivery cost and use any exclusive discount codes.</p>										
						<p>
							<small><span class="instock">Instock</span> Item in stock and will be dispatched normally.</small><br />
							<small><span class="lowstock">Low stock</span> Low item stock. Additional delay might exist is dispatching your item, delays will be notified by email.</small><br />
							<small><span class="outofstock">Out of stock</span> Item is out of stock and will be placed on back order and fulfilled as soon as possible.</small>
						</p>
					</div>
				</div>			
			</div> <!-- // end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->
@stop