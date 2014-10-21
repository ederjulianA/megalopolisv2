@extends('layouts.stores')
@section('titulo')
	TIENDA
@stop
<?php  $color = "#f60";?>
@section('estilos')


	 


@stop



@section('logo-empresa')
<img src="{{asset($empresa->logo)}}" class="logoEmpresa">
@stop

@section('menu')
	<li><a href="{{URL::route('distribuidor',array('empresa'=>$empresa->nombre_publico))}}" class="active">HOME</a></li>
	
	<li><a></a></li>

@stop

@section('titulo-mobile')
{{$empresa->razon_social}}
@stop

@section('info-footer1')
	<h4>{{$empresa->razon_social}}</h4>
	<ul>
		<li>
			@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
                    	@endif
		</li>
		<li>Direccion Principal : {{$empresa->direccion_principal}}</li>
	</ul>
@stop

@section('info-footer2')
	<h4>Sedes ({{$num_sedes}})</h4>
	<ul>
		@foreach($sedes as $s)
			<li>{{$s->nombre_publico}}---{{$s->direccion}}</li>
		@endforeach
	</ul>
@stop

@section('content')
		<div class="container main-container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-12 visible-lg visible-md">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
		                <div class="thumbnail col-lg-12 col-md-12 col-sm-6 text-center">
		                	<a href="detail.html" class="link-p">
		                    	<img src="images/product-8.jpg" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.html">Penn State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 528.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		                
				</div>
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Product Detail -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">{{$producto->nombre}}</span>
            	</div>
	            <div class="col-lg-12 col-sm-12 hero-feature">
            		<div class="sp-wrap">
						<a href="{{asset($producto->imagen)}}"><img src="{{asset($producto->imagen)}}" alt=""></a>
						
					</div>
					<h4>Live Nation 3 Days of Peace and Music Carbon</h4>
					98 items Disponibles
					<hr/>
					Descripción.
					<hr/>
					<h3>$ <span id="precio_publico">{{number_format($producto->precio, 0, '', '.')}}</span></h3>
					<div class="input-qty-detail">
						<form method="post" action="{{URL::route('addTocart')}}">
							<input type="hidden" name="product_id" id="product_id" value="{{$producto->cod}}">
							<input type="hidden" id="precio_unitario" value="{{$producto->precio}}">
							<input type="text" class="form-control input-qty text-center" value="1" id="qty-id">
							<button class="btn btn-primary pull-left" type="submit" id="btn-carrito">Agregar Al carrito</button>
							{{Form::token()}}
						</form>	
						</div>
					<br/>
					<hr/>
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
					</div>
					<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-4f0c254f1302adf8"></script>
	            </div>
	            <div class="clearfix"></div>
	            <!--<div class="col-lg-12 col-sm-12">
            		<span class="title">MAS PRODUCTOS</span>
            	</div>
            	
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.html" class="link-p">
	                    	<img src="images/product-12.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.html">Adidas Men Red Printed T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 20.63</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>-->
        	</div>
        	<!-- End Product Detail -->


        </div>
	</div>
@stop