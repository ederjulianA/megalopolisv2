@extends('layouts.users')

@section('titulo')
	Buscar por categoria
@stop


@section('content-page')
	<meta name="description" content="Buscando por categorias">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content=""/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="Buscar por categoria"/>

<meta property="og:url" content="http://www.tumegalopolis.com/public/categorias/{{$cat->id}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/mega-imgs/img-fb.jpg"/>

@stop

@section('content')
	<div class="container">
		<div class="row">
				<div class="col-md-3">
					<h2>CATEGORIAS</h2>
					<ul class="category">
						
						@foreach($categorias as $categoria)
												<li><a href="#"><i class="fa fa-chevron-right"></i> {{$categoria->nombre}}</a></li>

											@endforeach
					</ul>
					
				</div>

				<div class="col-md-9">
					
				</div>
			
		</div>
		
	</div>
@stop