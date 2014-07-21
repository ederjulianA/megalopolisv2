@extends('layouts.users')

@section('titulo')
	{{$producto->producto_nombre}}
@stop


@section('content-page')
	<meta name="description" content="{{$producto->producto_descripcion}}">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="{{$producto->producto_nombre}}"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="{{$producto->producto_descripcion}}"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/{{$producto->imagen}}"/>

@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div id="main-container">

			<div class="row">
				<h3 class="headline m-top-md">
									{{$producto->producto_nombre}}
									<span class="line"></span>
								</h3>
													<div class="gallery-container" >
															<div class="gallery-item" style="width:350px; height:auto;">
															<a class="image-wrapper gallery-zoom" href="{{asset($producto->imagen)}}">
																<img src="{{asset($producto->imagen)}}" alt="gallery1" style="width:auto; height:200px; text-align:center;">		
																<div class="image-overlay">
																	<div class="image-info" width="250px">
																		<div class="h3">{{$producto->razon_social}}</div>
																		<span>{{$producto->producto_nombre}}</span>
																		
																	</div>
																</div>	
															</a><!-- /image-wrapper -->
														</div><!-- /gallery-item -->
													</div>


													@if(!$producto->img1)

													@else
															<div class="gallery-container" >
															<div class="gallery-item" style="width:350px; height:auto;">
															<a class="image-wrapper gallery-zoom" href="{{asset($producto->img1)}}">
																<img src="{{asset($producto->img1)}}" alt="gallery1" style="width:auto; height:200px; text-align:center;">		
																<div class="image-overlay">
																	<div class="image-info" width="250px">
																		<div class="h3">{{$producto->razon_social}}</div>
																		<span>{{$producto->producto_nombre}}</span>
																		
																		
																	</div>
																</div>	
															</a><!-- /image-wrapper -->
														</div><!-- /gallery-item -->
													</div>

													@endif



													@if(!$producto->img2)

													@else
															<div class="gallery-container" >
															<div class="gallery-item" style="width:350px; height:auto;">
															<a class="image-wrapper gallery-zoom" href="{{asset($producto->img2)}}">
																<img src="{{asset($producto->img2)}}" alt="gallery1" style="width:auto; height:200px; text-align:center;">		
																<div class="image-overlay">
																	<div class="image-info" width="250px">
																		<div class="h3">{{$producto->razon_social}}</div>
																		<span>{{$producto->producto_nombre}}</span>
																		
																		
																	</div>
																</div>	
															</a><!-- /image-wrapper -->
														</div><!-- /gallery-item -->
													</div>

													@endif

													@if(!$producto->img3)

													@else
															<div class="gallery-container" >
															<div class="gallery-item" style="width:350px; height:auto;">
															<a class="image-wrapper gallery-zoom" href="{{asset($producto->img3)}}">
																<img src="{{asset($producto->img3)}}" alt="gallery1" style="width:auto; height:200px; text-align:center;">		
																<div class="image-overlay">
																	<div class="image-info" width="250px">
																		<div class="h3">{{$producto->razon_social}}</div>
																		<span>{{$producto->producto_nombre}}</span>
																		
																		
																	</div>
																</div>	
															</a><!-- /image-wrapper -->
														</div><!-- /gallery-item -->
													</div>

													@endif
													
				
				
			</div>
				
			
					<div class="padding-md">
						<div class="row">
							<div class="col-md-11">	
								
									
													
													
												
								<div class="row">	
									<div class="col-md-8">
										<div class="panel blog-container">
											<div class="panel-body">
												<h4>{{$producto->razon_social}}</h4>
												<small class="text-muted">Sede <a href="{{URL::route('catalogo-sede', array('nombre_publico'=>$producto->nombre_sede))}}"><strong> {{$producto->nombre_sede}}</strong></a> |  {{$producto->direccion}}  | {{$producto->telefono}}</small>
												<div class="seperator"></div>
												<div class="seperator"></div>


			
												
												<!--<div class="image-wrapper">
													<a class="image-wrapper " href="#">
														<img src="{{asset($producto->imagen)}}" alt="{{$producto->producto_nombre}}" width="">
															
													</a>
												</div>--><!-- /image-wrapper  -->
																				
												<p class="m-top-sm m-bottom-sm">
													{{$producto->producto_descripcion}}
												</p>
												<blockquote>
													<p>{{$producto->categoria_nombre}}</p>
													<small>{{$producto->nombre_sub}} <cite title="Source Title"></cite></small>
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
														<div class="fb-share-button" data-href="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}" data-width="50" data-type="button_count"></div>
														<div>
														<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tumegalopolis.com/public/producto/{{$producto->id}}-{{$producto->sede_id}}" data-via="ederjulianA" data-lang="es" data-size="large" data-hashtags="tuMegalopolis">Twittear</a>
														</div>

														
													
													</div>
												</div>
											</div>
										</div><!-- /panel -->

										<!-- FACEBOOK COMMENTS-->
										<div class="fb-comments" data-href="http://www.tumegalopolis.com/public/producto/{{$producto->id}}" data-width="350" data-numposts="5" data-colorscheme="light"></div>
									
										
															
										
										
									</div><!-- /.col -->


									<div class="col-md-4">
										<form method="get" action="{{URL::route('buscador')}}">
											<div class="form-group">
												<div class="input-group">
												
													<input type="text" name="buscador" id="buscador" class="form-control input-sm" placeholder="Buscar Producto..." required>
													<span class="input-group-btn">

														<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
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


												<a class="pull-left" href="{{URL::route('productos',array('id'=>$mp->id,'sede'=>$mp->sede_id))}}">
													<img src="{{asset($mp->imagen)}}" alt="{{$mp->nombre}}" style="max-height: 100px; width: auto;">
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
												<li><a href="{{URL::route('categorias-producto', array('id'=>$categoria->id))}}"><i class="fa fa-chevron-right"></i> {{$categoria->nombre}}</a></li>

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