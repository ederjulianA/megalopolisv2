@extends('layouts.users')

@section('titulo')
Landing Producto
@stop

@section('content')
	<div id="main-container">
			<div class="padding-md">
				<div class="row">
					<div class="col-md-11">	
						<h3 class="headline m-top-md">
							{{$producto->producto_nombre}}
							<span class="line"></span>
						</h3>
						<div class="row">	
							<div class="col-md-8">
								<div class="panel blog-container">
									<div class="panel-body">
										<h4>{{$producto->razon_social}}</h4>
										<small class="text-muted">Sede <a href="#"><strong> {{$producto->nombre_sede}}</strong></a> |  {{$producto->direccion}}  | {{$producto->telefono}}</small>
										<div class="seperator"></div>
										<div class="seperator"></div>
										
										<div class="image-wrapper">
											<a class="image-wrapper " href="img/productos/gafas.jpg">
												<img src="{{$producto->imagen}}" alt="{{$producto->producto_nombre}}" width="50%;">
												<div class="image-overlay"></div>	
											</a>
										</div><!-- /image-wrapper -->
																		
										<p class="m-top-sm m-bottom-sm">
											{{$producto->producto_descripcion}}
										</p>
										<blockquote>
											<p>{{$producto->categoria_nombre}}</p>
											<small>{{$producto->nombre_sub}} <cite title="Source Title">Source Title</cite></small>
										</blockquote>
										<p class="m-top-sm m-bottom-sm">
											<span class="precio-producto-2">${{$producto->precio_detal}}</span>
										</p>
									
										
									</div>
								</div><!-- /panel -->
								<div class="panel">
									<div class="panel-body">
										<div class="share-blog clearfix">
											<span class="pull-left" style="line-height: 25px;">Comparte este Producto</span>
											<div class="pull-right">
												<a href="#" class="social-connect tooltip-test facebook-hover" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
												<a href="#" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
												<a href="#" class="social-connect tooltip-test google-plus-hover" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
												<a href="#" class="social-connect tooltip-test rss-hover" data-toggle="tooltip" data-original-title="Rss feed"><i class="fa fa-rss"></i></a>
											
											</div>
										</div>
									</div>
								</div><!-- /panel -->
							
								
													
								
								
							</div><!-- /.col -->
							<div class="col-md-4">
								<form>
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control input-sm" placeholder="Buscar Producto...">
											<span class="input-group-btn">
												<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
											</span>
										</div><!-- /input-group -->
									</div><!-- /form-group -->
								</form>
								<h4 class="headline">
									MÁS PRODUCTOS
									<span class="line"></span>
								</h4>

									@foreach($masProductos as $mp)
									<div class="media popular-post">


										<a class="pull-left" href="single_post.html">
											<img src="{{$mp->imagen}}" alt="{{$mp->nombre}}">
										</a>
										<div class="media-body">
											{{$mp->nombre}} 
										</div>
									</div>
									@endforeach
								
							
								
								<h4 class="headline">
									CATEGORIAS
									<span class="line"></span>
								</h4>
								<ul class="category">
									@foreach($categorias as $categoria)
										<li><a href="#"><i class="fa fa-chevron-right"></i> {{$categoria->nombre}}</a></li>

									@endforeach
									
								</ul>
								<h4 class="headline">
									TAGS
									<span class="line"></span>
								</h4>
								<div class="tag-wrapper">
									@foreach($tags as $tag)

										<a class="blog-tag" href="#">{{$tag->etiqueta}}</a> 
									@endforeach
									
								</div>
								<h4 class="headline">
									SOBRE {{$producto->razon_social}}
									<span class="line"></span>
								</h4>
								<p>
									{{$producto->desc_breve}}
								</p>
								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->
@stop