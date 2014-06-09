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
<meta property="og:description" content="{{$producto->desc_breve}}"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/producto/{{$producto->id}}"/>
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


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
										<small class="text-muted">Sede <a href="{{URL::route('catalogo-sede', array('nombre_publico'=>$producto->nombre_sede))}}"><strong> {{$producto->nombre_sede}}</strong></a> |  {{$producto->direccion}}  | {{$producto->telefono}}</small>
										<div class="seperator"></div>
										<div class="seperator"></div>
										
										<div class="image-wrapper">
											<a class="image-wrapper " href="#">
												<img src="{{asset($producto->imagen)}}" alt="{{$producto->producto_nombre}}" width="">
													
											</a>
										</div><!-- /image-wrapper  -->
																		
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
												<div class="fb-share-button" data-href="http://www.tumegalopolis.com/public/producto/{{$producto->id}}" data-width="50" data-type="button_count"></div>
												
											
											</div>
										</div>
									</div>
								</div><!-- /panel -->

								<!-- FACEBOOK COMMENTS-->
								<div class="fb-comments" data-href="http://www.tumegalopolis.com/public/producto/{{$producto->id}}" data-width="350" data-numposts="5" data-colorscheme="light"></div>
							
								
													
								
								
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


										<a class="pull-left" href="{{URL::route('productos',array('id'=>$mp->id))}}">
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


