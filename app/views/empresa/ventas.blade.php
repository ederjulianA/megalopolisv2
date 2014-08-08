@extends('layouts.empresa')

@section('titulo')
	Mis ventas
@stop

<style type="text/css">
	
	
	</style>

@section('content')
<div id="main-container">
	<div class="contenedor-ventas-empresa">
		<div class="header-contenedor-ventas">
			<H2>Bienvenido al administrador de tus ventas</H2>
			<p>
				Aquí podrás gestionar todo lo relacionado con el estado de tus ventas 
			</p>
			
		</div>
		
		<div class="body-contenedor-ventas">
		@foreach($ventas as $venta)
			<div class="body-contenedor-left">
				<h3>Venta</h3>
				<div class="item-venta">
					<div class="img-item-venta">
						
						{{HTML::image($venta->imagen)}}
						<div class="valor-total">
							<p>
								Valor total de esta Compra: <br>
								<span>${{number_format($venta->valor_total, 0, '', '.')}}</span>
							</p>
							
						</div>
					</div>
					<div class="info-item table-responsive">
						<h2>	{{$venta->producto_nombre}}</h2>
						<table class="table table-striped">
							<tr>
								<th>Cantidad</th>
								<th>Valor Unitario</th>
							</tr>
							<tr>
								<td>{{$venta->cantidad_orden}}</td>
								<td>${{number_format($venta->valor_unitario, 0, '', '.')}}</td>
							</tr>	
						</table>
						<div class="info-comprador-item">
							<h2>Información del Comprador</h2>
							<table class="table table-striped">
							<tr>
								<th>Nombre</th>
								<th>email</th>
								<th>Ciudad</th>
								<th>Dirección</th>
								<th>Teléfono</th>
							</tr>
							<tr>
								<td>{{$venta->nombre_comprador}}</td>
								<td>{{$venta->email_comprador}}</td>
								<td>{{$venta->nombre_ciudad}}</td>
								<td>{{$venta->direccion_comprador}}</td>
								<td>{{$venta->telefono_comprador}}</td>
							</tr>

						</table>
							
						</div>
						<div class="info-estado-pedido">
							<p>
								Por favor has nos saber cuándo hayas entregado el articulo a tu comprado.
								Una vez hecho esto, pulsa el botón de abajo y le haremos saber a tu comprador del envió. 
							</p>
							<a href="#" class="notificar-envio">Notificar producto Enviado</a>



							
						</div>
						
					</div>
					
				</div>
				
			</div>
			@endforeach

			

			
		</div>
		
		
	</div>
</div>
@stop