@extends('layouts.users')


@section('content')
	<div id="landing-content">
		<div class="padding-md">
			
				<div class="row">
					
							<div class="col-md-2" style="text-align:center;">
								<select name="ciudad" id="sel-ciudades" class="select-ciudad">
									<option value="0">- CIUDAD -</option>
									@foreach($ciudades as $ciudad)
										<option value="{{$ciudad->id}}"> {{$ciudad->ciudad}}</option>
									@endforeach
									
								</select>

								<!--<select name="barrio" id="sel-barrio" class="select-barrio">
									<option value="0">- barrio -</option>
									
									
								</select>-->

								<div class="menu-categorias">
									<h2>Sectores</h2>

									<ul class="menu-sectores">
										<li class="active-menu"><a href="/navegar" >Todos</a></li>
										@foreach( $categorias as $categoria)
										<!--<li><a href="/navegar/categoria/{{$categoria->id}}">{{$categoria->nom_sector}}  </a></li>-->
										<li><a class="cat-lista " href="{{$categoria->id}}">{{$categoria->nom_sector}}  </a></li>
										@endforeach
									</ul>
									
								</div>
							</div>

							<div class="col-md-8" style="text-align:center;">

								<div class="navegar-centro">
										<form method="post" action="#" >

											<input type="text" name="buscador" id="buscador" placeholder="Buscas algo en especifico ?"><input type="submit" value="Buscar" class="btn btn-danger">
											{{Form::token()}}
										</form>
									
								</div>

								<div class="empresas-container">

									@foreach($empresas as $empresa)
											<!--<div class="empresa fadeInDown animation-delay2" >
													<div class="thumbnail" style="height:300px;">
														<img src="{{asset('img/prod1.jpg') }}">
														
														<div class="caption">
															<h4>{{$empresa->razon_social}}</h4>
															<p>{{$empresa->desc_breve}}</p>
															<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
											
														</div>
										
													</div>
												
											</div>-->

												
													
														<div class="detail fadeInUp animated-element empresa">
														<a href="/empresa/{{$empresa->nombre_publico}}" class="hoverBorder">
															<span class="hoverBorderWrapper">
																{{HTML::image($empresa->logo, $empresa->razon_social, array('width'=>'170px','height'=> '90px'))}}
																<span class="hoverBorderInner"></span>
																<span class="readMore">{{$empresa->sector->nom_sector}}</span>
															</span>	
														</a>
														<div class="seperator"></div>
														<p>
															<h4><span class="label label-success">{{$empresa->razon_social}} </span></h4>
															<small>{{$empresa->desc_breve}}</small> 
														</p>
														<p>
															<a href="/empresa/{{$empresa->nombre_publico}}" class="btn btn-info">contacto</a>
															@if(Auth::check())
															

															<a href="{{$empresa->id}}" class="addFav  btn btn-warning">fav <i class="fa  fa-heart"></i> </a>
															@endif
														</p>
											</div><!--detail-->
												
											
					

											

									@endforeach
									
									
								</div>
								
							</div>

							<div class="col-md-2" style="text-align:center;">
								<div class="promos-navegar">
									<h2>Promos</h2>
									<a href="/promos/{{$promocion->id}}">{{HTML::image($promocion->img, $promocion->titulo, array('width'=>'100%', 'height'=>'300px'))}}</a>
										<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
														<span class="porcentaje-producto">- {{$promocion->porcentaje}}%</span>
												</div>
										</div>
												<p><a href="/promos/{{$promocion->id}}" class="link-promo"> {{$promocion->titulo}} </a></p>
												<p class="precio-promo-navegar">$ {{$promocion->con_descuento}}</p>
									
								</div>
								
							</div>
				</div>
		</div>

	</div>

		
		
				
	
@stop