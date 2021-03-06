@extends('layouts.users')


@section('content')
	<div id="landing-content">
		<div class="padding-md">
			
				<div class="row">
					
							<div class="col-md-3" style="text-align:center;">
								<select name="ciudad" class="select-ciudad">
									<option value="0">- CIUDAD -</option>
									@foreach($ciudades as $ciudad)
										<option value="{{$ciudad->id}}"> {{$ciudad->ciudad}}</option>
									@endforeach
									
								</select>

								<div class="menu-categorias">
									<h2>Categorias</h2>

									<ul>
										<li><a href="/navegar">Todas</a></li>
										@foreach( $categorias as $categoria)
										<li><a href="/navegar/categoria/{{$categoria->id}}">{{$categoria->nom_sector}}  </a></li>
										@endforeach
									</ul>
									
								</div>
							</div>

							<div class="col-md-7" style="text-align:center;">

								<div class="navegar-centro">
										<form method="post" action="#" >

											<input type="text" name="buscador" placeholder="Buscas algo en especifico ?"><input type="submit" value="Buscar" class="btn btn-danger">
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
														<a href="/empresa/{{$empresa->id}}" class="hoverBorder">
															<span class="hoverBorderWrapper">
																{{HTML::image($empresa->sector->img, $empresa->razon_social, array('width'=>'170px'))}}
																<span class="hoverBorderInner"></span>
																<span class="readMore">{{$empresa->sector->nom_sector}}</span>
															</span>	
														</a>
														<div class="seperator"></div>
														<p>
															<h4>{{$empresa->razon_social}}</h4>
															<small>{{$empresa->desc_breve}}</small> 
														</p>
														<p>
															<a href="/empresa/{{$empresa->id}}" class="btn btn-info">contacto</a>
														</p>
											</div><!--detail-->
												
											
					

											

									@endforeach
									
									
								</div>
								
							</div>

							<div class="col-md-2" style="text-align:center;">
								CONTENIDO DERECHA
							</div>
				</div>
		</div>

	</div>
		
		
				
	
@stop