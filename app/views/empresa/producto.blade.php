@extends('layouts.users')

@section('titulo')
	{{$producto->nombre}}
@stop

@section('content')
	<div class="descripcion-producto">
		<h2>{{$producto->nombre}}</h2>
		<img src = '{{asset($producto->imagen)}}' class="img-producto-descripcion" />
		<p>
			{{$producto->descripcion}}<br>
			<a class="btn btn-danger btn-lg" style="font-size:40px;">${{$producto->precio_detal}}</a>
		</p><br>
		<p>
			Visita nuestro Catalogo <a class="btn btn-info" href="{{URL::route('catalogo-sede', array('nombre-sede'=>$producto->nombre_sede))}}">{{$producto->nombre_sede}}</a><br>
			{{$producto->direccion}}, <br> Tel:{{$producto->telefono}}
		</p>
		
			
		
	</div>
@stop