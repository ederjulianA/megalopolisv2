@extends('layouts.stores')

@section('titulo')
	TIENDA
@stop
<?php  $color = "#f60";?>
@section('estilos')


	style= " background-color:{{$empresa->color_header}};color:#fff";


@stop



@section('logo-empresa')
<img src="{{asset($empresa->logo)}}" class="logoEmpresa">
@stop

@section('menu')
	<li><a href="{{URL::route('nuevaEmpresaView',array('empresa'=>$empresa->nombre_publico))}}" class="active">HOME</a></li>
	<li><a href="{{URL::route('nuevaProductos',array('empresa'=>$empresa->nombre_publico))}}" class="">PRODUCTOS</a></li>
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

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
    type="text/javascript"></script>

<script type="text/javascript">
    function initialize(latitude, longitude) {
    
      if (GBrowserIsCompatible()) {
      map = new GMap2(document.getElementById("map_canvas"));
      map.setCenter(new GLatLng(latitude, longitude), 15);
      var marker = new GMarker(new GLatLng(latitude, longitude), {draggable: true});
      map.addOverlay(marker);
      map.setUIToDefault();
      geocoder = new GClientGeocoder();
      }
      
      return false;
    }
  </script>

	<style type="text/css">
	.banner-empresa{
		max-width: 100%;
		width: 800px;
		height: auto;
	}
	</style>
				<div class="row">

          <!-- Slider -->
          <div class="col-lg-9 col-md-12">
                <!--{{HTML::image($empresa->banner,$empresa->razon_social,array('class'=>'banner-empresa'))}}-->
                  <div class="slider">
                      <ul class="bxslider">
                          <li>
                              <a href="index.html">
                                  {{HTML::image($empresa->banner,$empresa->razon_social,array('class'=>'banner-empresa'))}}
                              </a>
                          </li>
                          
                      </ul>
                  </div>
            </div>
            <!-- End Slider -->

      <!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    
                    <p class="info-empresa">
                    	@if(!$empresa->desc_corta)
                    		{{$empresa->desc_larga}}
                    	@else
                    		{{$empresa->desc_corta}}	
                    	@endif
                    .</p>

                </div>
                <div class="row text-center">
                	 <div id="map_canvas" style="width: 100%; height: 250px;margin-top: 10px;"></div>
                	 <div class="alert alert-info" role="alert"><strong>{{$sede->direccion}}</strong></div>
            <script type = 'text/javascript'>
              initialize({{$sede->latitude}}, {{$sede->longitude}});
            </script>
                	
                </div>
            </div>
            <!-- End Product Selection -->
        </div>

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

        <!-- Best Seller -->
        <div class="col-lg-12 col-md-12 col-sm-6">
          <div class="no-padding">
                  <span class="title">PROMOCIONES</span>
                </div>
          <div class="hero-feature">
                    <div class="thumbnail text-center">
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
               
        </div>
        <!-- End Best Seller -->

          </div>

          <div class="clearfix visible-sm"></div>

      <!-- Featured -->
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">PRODUCTOS</span>
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
		                              <a href="#" class="btn btn-primary addCart" id="{{$pro->id}}"><i class="glyphicon  glyphicon-shopping-cart"></i> Comprar</a>
		                            </div>
		                          </p>
		                      </div>
		                  </div>
		              </div>
		        @endforeach      
              
          </div>
          <!-- End Featured -->

          <div class="clearfix visible-sm"></div>

      <!-- Adidas Category -->
      <!--<div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-12 col-sm-12">
                <span class="title">ADIDAS</span>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-10.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 22.22</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-11.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Adidas Men Flame Black T-shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 15.47</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
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
              </div>
      </div>-->
      <!-- End Adidas Category -->

        </div>
@stop