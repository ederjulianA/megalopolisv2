@extends('layouts.empresa')

@section('titulo')
	Escoge los medios de pago que aceptas
@stop

@section('content')
	<style type="text/css">
		.agregado
		{
			box-shadow: 2px 2px 2px rgba(0,0,0,.7);
			border-bottom: 4px solid #f90;
			background-color: #325;
			cursor: normal;
			opacity: .7;
		}
		.noagregado
		{
			box-shadow: 3px 3px 3px rgba(0,0,0,.7);
			border-bottom: 4px solid #f90;
			background-color: #325;
			cursor: normal;
			
		}
		.btn-pago {
			text-decoration: none;
			max-width: 100%;
			
			margin: 10px;
			
			padding: 10px;
			width: 90%;
			color: #fff;
			font-weight: bold;
		}
		.contenedor-pagos{
			max-width: 100%;

			width: 100%;

		}
		.contenedor-pagos h2 {
			text-align: center;
			font-weight: bold;
			font-size: 30px;
			color:  #999;
		}
			.img-pagos{
			
			max-width: 100%;
			height: 80px;
			width: auto;
		}
		.item-pago{
			max-width: 100%;
			width: 70%;
			color: #364A6B;
			border: 1px solid #364A6B;
			padding: 10px;
			border-radius: 20px;
			display: block;
			text-align: center;
			margin: 10px auto;
		}
		.mensaje-ajax-pagos{
			margin:0;
			color: #fff;
			font-size: 30px;
			font-weight: bold;
			padding: 10px;
			max-width: 100%;
			width: 100%;
			background-color: #1C06DF;
			text-align: center;
		}
	</style>
	<div id="main-container">
		<div class="padding-md">
<div class="contenedor-pagos">
	<h2>Mis medios de pago </h2>
	<section class="medios-pago">
			<article class="medios-disponibles">
			<div class="" id="mesgAjax">
				<div class="menaje">
					
				</div>
				
			</div>
				<div class="header-mdis">
					<h3>Lista de los medios de pago que puedes aceptar</h3>
				</div>
				@foreach($pagos as $pago)
					<div class="item-pago">
						<img src="{{asset($pago->img)}}" class="img-pagos">
						<h3>{{$pago->titulo}}</h3>
						<p class="pago-descripcion">
							{{$pago->descripcion}}
						</p>
						<div class="contenedor-boton">

							{{Favs::pagos($pago->id,$empresa->id)}}
						</div>

					</div>
				@endforeach	

				<!--<div class="item-pago agregado">
					<img src="efecty.png" class="img-pagos">
					<h3>Acuerdo con el vendedor</h3>
					<div class="contenedor-boton">
						<a href="#" class="btn-pago">Agregado</a>
					</div>-->

				</div>

				<input type="hidden" id="emid" value="{{$empresa->id}}">
			</article>
			
		
	</section>
	
</div>
		</div>
	</div>			
@stop