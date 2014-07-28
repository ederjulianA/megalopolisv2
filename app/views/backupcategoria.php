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

<meta property="og:url" content=""/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/mega-imgs/img-fb.jpg"/>

@stop

@section('content')

	<div class="contenedor-lista-categorias">
		<div class="container">
		<div class="row">
				<div class="col-md-3" >
					<h2>CATEGORIAS</h2>
					<ul class="category">
						
						@foreach($categorias as $categoria)
												<li><a href="{{URL::route('categorias-producto', array('id'=>$categoria->id))}}"><i class="fa fa-chevron-right"></i> {{$categoria->nombre}}</a></li>

											@endforeach
					</ul>
					
				</div>

				<div class="col-md-9 productos-categoria">
					<h2>Resultados para <span class="resultado-categorias">{{$cat->nombre}} ({{$numPro}})</span> Articulos Encontrados</h2>

					@foreach($producto as $pro)
						<a href="{{URL::route('productos',array('id'=>$pro->id))}}">
							<div class="producto-item">
								{{HTML::image($pro->imagen, $pro->producto_nombre, array('height'=>'150px','width'=>'auto'))}}
								<h3>{{$pro->producto_nombre}}</h3>
								
							
							</div>
						</a>	

					@endforeach

					
					
				</div>
			
		</div>
		
	</div>
		
	</div>
	
@stop