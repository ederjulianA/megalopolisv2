@extends('layouts.users')

@section('titulo')
Esta es una prueba de título con mi nombre

@stop

@section('content-page')

<meta name="description" content="Prueba de contenido bla bla bla bla bla">

@stop

@section('content')

<div id="main-container">
	<div class="row">
		<div class="col-md-3">
			Fila1
		</div>

		<div class="col-md-3">
			Fila2<br>
			@foreach($usutip1 as $usu)
			{{$usu->username}}-{{$usu->email}}<br>
			@endforeach

		</div>

		<div class="col-md-3">
			Fila3
		</div>
	</div>
	<div class="row">
		@foreach($categorias as $cat)
			{{$cat->nombre}}{{$cat->id}}<br>
			
		@endforeach
	</div>
	<div class="row">
		<h1>Número de categorías {{$numCategorias}}</h1>
	</div>
</div>
@stop