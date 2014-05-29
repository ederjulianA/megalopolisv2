@extends('layouts.users')

@section('titulo')
	Mis favoritos
@stop

@section('content')

<div class="mensaje-favoritos-ajax">
					
</div>
	<div class="contenedor-favoritos">
		<h2>mis favoritos (<strong id="num_favoritos">{{$num_favs}}</strong>)</h2>
		@if($favoritos->count())
				@foreach($favoritos as $fav)
			<div class="producto fadeInUp animation-delay4" style = 'vertical-align: top;' id="fav-{{$fav->id}}">
									<div class="thumbnail">
										<h1 class = 'My-Circle' title = 'Unidades disponibles'>
											{{$fav->cantidad}}
										</h1>
										<img src = '{{asset($fav->imagen)}}' class="img-producto-lista" />
										<div class="caption">
											<h1 class = 'My-Title' style="height:80px;">
												{{$fav->producto_nombre}}
											</h1>
											<h2 class = 'My-Category-Title'>
												{{$fav->categoria_nombre}}
											</h2>
											<p class = 'My-Textblock precio'>
												Precio: <span class = 'My-Price'>${{$fav->precio_detal}}</span>
											</p>
											<p class = 'My-Textblock'>
												{{ substr($fav->producto_descripcion,0,90) }}<a href="{{URL::route('productos',array('id'=>$fav->id))}}" class="label label-info">Detalle</a>
												
											</p>
											<hr>
											<p>
											<a href="/catalogo/{{{$fav->nombre_sede}}}" >{{$fav->nombre_sede}}</a><br>
											
											@if(Auth::check() && Auth::user()->tipo == 1)
												
												<a href="{{$fav->id}}"  class="remFavList btn btn-danger"><i class='fa fa-heart'></i> Quitar</a>
											@else

											@endif

											
											</p>
										</div>
									</div>
								</div>
		@endforeach

		@else
			No has agregado Ningun Producto a tus favoritos.
		@endif
		

	</div>			
@stop