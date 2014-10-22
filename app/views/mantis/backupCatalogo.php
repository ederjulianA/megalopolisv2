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
        		<div class="col-lg-12 col-md-12 col-sm-24">
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
		                          <h4><a href="#">{{$pro->nombre}}</a></h4>
		                          <p>${{number_format($pro->precio, 0, '', '.')}}</p>
		                          <p>
		                            <div class="btn-group">
		                              <a href="{{URL::route('distribuidorProducto',array('empresa'=>$empresa->nombre_publico, 'id'=>$pro->cod))}}" class="btn btn-default"> ver mas </a>
		                              <a href="#" class="btn btn-primary addCart" id="{{$pro->cod}}"><i class="glyphicon  glyphicon-shopping-cart"></i> Comprar</a>
		                            </div>
		                          </p>
		                      </div>
		                  </div>
		              </div>
		        @endforeach  
        		</div>
        </div>
    </div>    
@stop