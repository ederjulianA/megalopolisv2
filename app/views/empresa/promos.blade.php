@extends('layouts.users')

@section('titulo')
Promos
@stop

@section('content')
	<div class="back-promo">
				<div class="promo-container">
					<h2>{{$promo->titulo}}</h2>

					<div class="row">

						<div class="col-md-4" style="height:100%;">
							{{HTML::image($promo->img, $promo->titulo, array('width'=>'100%','height'=>'250px'))}}
							<div class="ribbon-wrapper">
							<div class="ribbon-inner shadow-pulse bg-danger">
									<span class="porcentaje-producto">- {{$promo->porcentaje}}%</span>
							</div>
						</div>

							

							
						</div>
						<div class="col-md-8 des-promos">
							
							<div class="des-corta">{{$promo->descripcion_corta}}

							</div>
							<div class="des-larga">{{$promo->descripcion_larga}}

								<p class="precio-antes-p">
									Antes : <strike class="">${{$promo->sin_descuento}}</strike>
								</p>
								<p class="precio-despues-p">
									Ahora : <span class="label label-info">${{$promo->con_descuento}}</span>
								</p>

								<div class="img-promo"></div>
							</div>
							
						</div>
							
							
						
					</div>

						
				</div>
	</div>			
@stop