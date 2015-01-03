@extends('layouts.pinteres')

@section('nombre_publico')

		<!--{{HTML::image($empresa->logo, $empresa->razon_social, array('height'=>'50px'))}}-->
	{{$empresa->nombre_publico}}
@stop

@section('titulo')
	Tienda {{$empresa->razon_social}}
@stop

@section('class-body')
	product-board
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
<meta property="og:image" content="http://www.tumegalopolis.com/{{$empresa->logo}}"/>
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
							<a href="/cart/" class="drop-link">Ver<br>Carrito</a>
						</li>
					</ul>
@stop


@section('content')
{{HTML::style('Pinteres/css/demo.css')}}
{{HTML::style('Pinteres/css/bjqs.css')}}



	
		<div class="container main-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<h1>Confirma tu pedido</h1>
					@if(!Auth::check())
					<h3>Tu email</h3>
					<form class="form-inline signin" method="post" action="/login-tienda">
						<div class="form-group">
							<input id="email_address" name="email" tabindex="2" type="text" class="form-control" required>
							&nbsp;&nbsp;Contraseña 
							<input type="password" name="password" required>
							{{ Form::token()}}
							<input type="hidden" name="url" id="url" value="{{URL::current()}}">
						</div>
						<input type="submit" value="Login">
					</form>
					@else
							@if(Auth::user()->shipping())
								PAY
							@else
								INFO
							@endif
					@endif
					<hr />
				</div> <!-- //end content -->
				
				<div class="row">
					<div class="col-sm-8">
							@if($ship)
								<div class="content inner">
								<h3>Información de Envio</h3>
									<form class="form-horizontal" id="checkout-details" method="post" action="/direccion-post">
									<div class="form-group">
										{{ Form::label('nombre',' Nombre') }}
										{{ Form::text('nombre',$ship->nombre,array('class'=>'form-control')) }}
										{{ $errors->first('nombre','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('apellido',' Apellido') }}
										{{ Form::text('apellido',$ship->apellido,array('class'=>'form-control')) }}
										{{ $errors->first('apellido','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('telefono',' Telefono') }}
										{{ Form::text('telefono',$ship->telefono,array('class'=>'form-control')) }}
										{{ $errors->first('telefono','<p class="alert alert-danger">:message</p>') }}
									</div>	

									<div class="form-group">
										{{ Form::label('ciudad',' Ciudad') }}
										{{ Form::select('ciudad',$ciudades,$ship->ciudad, array('class'=>'form-control')) }}
										{{ $errors->first('ciudad','<p class="alert alert-danger">:message</p>') }}
									</div>	

									<div class="form-group">
										{{ Form::label('barrio',' Barrio') }}
										{{ Form::text('barrio',$ship->barrio,array('class'=>'form-control')) }}
										{{ $errors->first('barrio','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('direccion',' Dirección') }}
										{{ Form::text('direccion',$ship->direccion,array('class'=>'form-control')) }}
										{{ $errors->first('direccion','<p class="alert alert-danger">:message</p>') }}
									</div>					
									
									<p>
										{{ Form::token()}}

										<input type="submit" value="Actualizar información de envio">
										
									</p>
									
										
									</form>
								<hr />
							
							@else
								<form class="form-horizontal" id="checkout-details" method="post" action="">
									<div class="form-group">
										{{ Form::label('nombre',' Nombre') }}
										{{ Form::text('nombre',null,array('class'=>'form-control')) }}
										{{ $errors->first('nombre','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('apellido',' Apellido') }}
										{{ Form::text('apellido',null,array('class'=>'form-control')) }}
										{{ $errors->first('apellido','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('telefono',' Telefono') }}
										{{ Form::text('telefono',null,array('class'=>'form-control')) }}
										{{ $errors->first('telefono','<p class="alert alert-danger">:message</p>') }}
									</div>	

									<div class="form-group">
										{{ Form::label('ciudad',' Ciudad') }}
										{{ Form::select('ciudad',$ciudades, array('class'=>'form-control')) }}
										{{ $errors->first('ciudad','<p class="alert alert-danger">:message</p>') }}
									</div>	

									<div class="form-group">
										{{ Form::label('barrio',' Barrio') }}
										{{ Form::text('barrio',null,array('class'=>'form-control')) }}
										{{ $errors->first('barrio','<p class="alert alert-danger">:message</p>') }}
									</div>

									<div class="form-group">
										{{ Form::label('direccion',' Dirección') }}
										{{ Form::text('direccion',null,array('class'=>'form-control')) }}
										{{ $errors->first('direccion','<p class="alert alert-danger">:message</p>') }}
									</div>					
									
									
									
										
									</form>
							@endif
							</div> <!-- //end content -->
							
						<div class="content">
							<form method="post" action="/make-order">
							<input type="hidden" name="empresa_id" value="{{$empresa->id}}">
							<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
							<input type="submit" class="btn btn-large inline" value="Finalizar Pedido" id="">
							</form>
							or <a href="/">Volver a la tienda</a>
						</div> <!-- //end content -->
					</div> <!-- //end span8 -->
	
					<div class="col-sm-4">
						<div class="content checkout-total">
							<p>
								<small>Tu compra:</small><br>
								<span>${{number_format(Cart::total(), 0, '', '.')}}</span><br>
								<!--<small>Paso 1 de 2</small>-->
							</p>
						</div>
						<div class="content">
							<div class="cart-checkout clearfix">
								@foreach($products as $product)
									<div class="item clearfix">
										<img src="{{asset($product->image)}}" alt="{{$product->name}}" height="120px" width="auto" />
										<div class="desc">
											<p class="name">{{$product->name}}</p>
											<p class="price">{{$product->quantity}} x ${{number_format($product->price, 0, '', '.')}}</p>
										</div>
									</div> <!-- //end item -->
								@endforeach	
								
							</div>
						</div> <!-- //end content -->
					</div> <!-- //end span4 -->
				</div> <!-- //end row -->		
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->
	</div> <!-- //end container -->


@stop