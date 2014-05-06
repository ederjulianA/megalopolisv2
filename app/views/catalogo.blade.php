@extends('layouts.users')

@section('titulo')
{{$sede->nombre_publico}}
@stop

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

@section('content')
				<div id="landing-content">
		
		<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									{{HTML::image($sede->empresa->logo, $sede->empresa->razon_social)}}
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{$sede->nombre_publico}}</strong>
								<small class="block text-muted">
									{{$sede->empresa->user->email}}
								</small>
								<small class="block text-muted">
									{{$sede->direccion}}
								</small>
								<strong class="block text-muted">
									Tel: <span class="label label-danger">{{$sede->telefono}}</span>
								</strong> 
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">Seguir</a>
								<div class="seperator"></div>
								<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel m-top-md">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<span class="block font-14">{{$num_productos}}</span>
										<small class="text-muted">Productos</small>
									</div><!-- /.col -->
									<div class="col-xs-4 text-center">
										<span class="block font-14">{{$num_promos}}</span>
										<small class="text-muted">Promociones</small>
									</div><!-- /.col -->
									
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->

						
					<!--  SLIDER DE IMAGENES UTILIZANDO JAVASCRIPT Y BOOTSTRAP-->

						<div class="panel panel-default">
							<div class="panel-heading">
								Promociones disponibles

								<span class="label label-danger pull-right">Lista de promos</span>
							</div>
							<div class="panel-body">
								<div id="carousel-example-generic" class="carousel slide carousel-custom">
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										@foreach($sede->promocion as $promo)
												<li data-target="#carousel-example-generic" data-slide-to="{{$promo->id}}" class=""></li>
											@endforeach
									</ol>
									<div class="carousel-inner">
										<div class="item active">
											<div class="row">
												<div class="col-sm-5">
													<img src="{{asset('img/promociones/default.jpg') }}">
												</div>
												<div class="col-sm-5">
													<strong>Lista de Promociones</strong>
													<p class="m-top-sm">
														Aqui encontraras las promociones 
													</p>
												</div><!-- /.col -->
											</div><!-- /.row -->
										</div>
										@foreach($sede->promocion as $promo)
										<div class="item">
											<div class="row">
												<div class="col-sm-5">
													<!--<img src="img/gallery6.jpg" alt="Third Slide" class="m-bottom-md" style="height:150px;">-->
													{{ HTML::image($promo->img, $promo->titulo, array('height'=>'150px'))}}
												</div>
												<div class="col-sm-5">
													<strong>{{$promo->titulo}}</strong>
													<p class="m-top-sm">
														{{$promo->descripcion_corta}}
													</p>
												</div><!-- /.col -->	
											</div><!-- /.row -->
										</div>

										@endforeach
									</div>
									
									
								</div>
								
								<div class="text-right">
									<a class="btn btn-default btn-sm" href="#carousel-example-generic" data-slide="prev">Anterior</a>
									<a class="btn btn-default btn-sm" href="#carousel-example-generic" data-slide="next">Siguiente</a>
								</div>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->

				<!--  FIN SECCION DATOS DE EMPRESA MAS PROMOS##################################################  -->	
					
					<div class="col-md-9 col-sm-9">

						<div class="catalogo-header">
							<h2>{{$sede->nombre_publico}}</h2>
							
						</div>
						<div class="productos-container">

							<!--	<div class="producto fadeInDown animation-delay2" >
										<div class="thumbnail">
											<img src="{{asset('img/prod1.jpg') }}">
											<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
													Agotado
												</div>
											</div>
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i></a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInUp animation-delay4">
										<div class="thumbnail">
											<img src="{{asset('img/prod2.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInDown animation-delay3">
										<div class="thumbnail">
											<img src="{{asset('img/prod3.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>-->


								@foreach($productos as $key => $producto)
								
								<div class="producto fadeInUp animation-delay4" style = 'vertical-align: top;'>
									<div class="thumbnail">
										<h1 class = 'My-Circle' title = 'Unidades disponibles'>
											{{$producto->cantidad}}
										</h1>
										<img src = '{{asset($producto->imagen)}}' class="img-producto-lista" />
										<div class="caption">
											<h1 class = 'My-Title'>
												{{$producto->producto_nombre}}
											</h1>
											<h2 class = 'My-Category-Title'>
												{{$producto->categoria_nombre}}
											</h2>
											<p class = 'My-Textblock'>
												Precio: <span class = 'My-Price'>${{$producto->precio_detal}}</span>
											</p>
											<p class = 'My-Textblock'>
												{{$producto->producto_descripcion}}
											</p>
											<p>
											<a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info My-Align"><i class="fa fa-heart"></i> Favoritos</a></p>
										</div>
									</div>
								</div>

								@endforeach	





								
								
								
							
						</div><!--  ############################################# FIN DEL CONTENEDOR DE PRODUCTOS################## -->


						
						



					</div>
				</div>
		</div>
	</div>

	<!--Modal-->
		<div class="modal fade" id="simpleModal">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Produto</h4>
      				</div>
				    <div class="modal-body">
				      <div class="search-container">
									<div class="panel panel-default">
										<div class="panel-body">	
											<div class="search-header">
												<a href="#" class="h4 inline-block">Producto 1</a>

												<strong>($20.000 COP)</strong>
											 
											</div>
											
											<div class="seperator"></div>
											
											<p class="m-top-sm">
												<a href="#" class="pull-left   m-right-sm"> 
													<img src="{{asset('img/prod2.jpg') }}" alt="Author" width="100px" height="100px"> 
												</a> Descripcion del producto seleccionado
												</p>
																					
											<div class="text-right">
												<a class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a>
											</div>
										</div>
									</div><!-- /panel -->
								</div><!-- /search-container -->
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

@stop
