@extends('layouts.stores')

@section('titulo')
	CATALOGO {{$empresa->razon_social}}
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
<meta property="og:url" content="{{$account}}.tumegalopolis.com/productos"/>
<meta property="og:image" content="{{$account}}.tumegalopolis.com/{{$empresa->logo}}"/>
@stop

@section('logo-empresa')
<img src="{{asset($empresa->logo)}}" class="logoEmpresa">
@stop

@section('titulo-mobile')
{{$empresa->razon_social}}
@stop

@section('menu')
	<li><a href="/" class="">HOME</a></li>
	<li><a href="/productos/" class="active">PRODUCTOS</a></li>
@stop
@section('estilos')


	style= " background-color:{{$empresa->color_header}};color:#fff";


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
	
	<style type="text/css">
	.info-empresa{
		font-weight: bold;
		font-size: 20px;
		letter-spacing: .5px;
		color: #666;

	}
	/*header {background-image:  url({{ URL::asset($empresa->logo); }})}
	header{
		-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}*/

	</style>
 <div class="container main-container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">CATEGORIAS</span>
	            	</div>
					<div class="list-group list-categ">
						 @foreach($categorias as $cat)
          	  <a href="#" class="list-group-item">{{$cat->nombre_categoria_cat}}</a>
          @endforeach
					</div>
				</div>
				<!-- End Categories -->

				

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Catalogue -->
       		<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">CATALOGO DE PRODUCTOS</span>
            	</div>


	           	@foreach($productos as $pro)
		              <div class="col-lg-4 col-sm-4 hero-feature text-center">
		                 <div class="thumbnail">
		                    <a href="#" class="link-p">
		                        <img src="{{asset($pro->imagen)}}" alt="">
		                    </a>
		                      <div class="caption prod-caption">
		                          <h4><a href="#">{{$pro->producto_nombre}}</a></h4>
		                          <p>${{number_format($pro->precio_detal, 0, '', '.')}}</p>
		                          <p>
		                            <div class="btn-group">
		                              <a href="#" class="btn btn-default"> ver mas </a>
		                              <form method="post" action="/addCartT">
						              <input type="hidden" name="product_id" value="{{$pro->id}}">
						              <input type="hidden" name="url" id="url" value="{{URL::current()}}">
						              {{Form::hidden('quantity', 1)}}
						              <button type="submit" class="btn btn-primary"><i class="glyphicon  glyphicon-shopping-cart"></i> COMPRAR</button>
						              {{Form::token()}}
						              
						            </form>
		                            </div>
		                          </p>
		                      </div>
		                  </div>
		              </div>
		        @endforeach     
	            
				
        	</div>
        	<!-- End Catalogue -->
        	<div class="text-center">
		        	
						{{$productos->links()}}
				
				</div>


        </div>
	</div>

@stop