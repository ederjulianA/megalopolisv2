@extends('layouts.empresa')

@section('titulo')
	Editar productos
@stop

@section('content')
	<div id="main-container">
		<h1>
			Lista de productos de todas las sedes disponibles
		</h1>
		<ul>
			@foreach($productos as $producto)
				<li>{{$producto->id}}. {{$producto->producto_nombre}} | <a href = '#'>Editar</a> | <a href = '#'>Eliminar</a></li>
			@endforeach
		</ul>
	</div>
@stop