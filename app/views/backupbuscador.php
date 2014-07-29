@extends('layouts.users')

@section('titulo')
Buscar: {{$keyword}}
@stop



@section('content')
	<div class="contenedor-buscador">
			<form method="get" action="{{URL::route('buscador')}}" >

											<input type="text" name="buscador" id="buscador" placeholder="Buscas algo en especifico ?" value="{{ Favs::value($keyword)}}" required><input type="submit" value="Buscar" class="btn btn-danger">
											
			</form>

			<h2>Resultados Para: <strong>{{$keyword}}</strong> ({{$numPro}})</h2>
			

			<div class="contenedor-productos-busqueda">
				@foreach($productos as $producto)
					<div class="producto fadeInUp animation-delay4" style = 'vertical-align: top; width:320px;'>
									<div class="thumbnail">
										<h1 class = 'My-Circle' title = 'Unidades disponibles'>
											{{$producto->cantidad}}
										</h1>
										<img src = '{{asset($producto->imagen)}}' class="img-producto-lista" />
										<div class="caption">
											<h1 class = 'My-Title'>
												{{$producto->producto_nombre}}
											</h1>
											<hr>
											<h2 class = 'My-Category-Title'>
												{{$producto->categoria_nombre}}
											</h2>
											<p class = 'My-Textblock precio'>
												Precio: <span class = 'My-Price'>${{$producto->precio_detal}}</span>
											</p>
											<p class = 'My-Textblock'>
												{{ substr($producto->producto_descripcion,0,70) }}...<a href="{{URL::route('productos',array('id'=>$producto->id))}}" class="label label-danger">Detalle</a>
											</p>
											
										</div>
									</div>
								</div>

				@endforeach				
			</div>
		
	</div>
@stop