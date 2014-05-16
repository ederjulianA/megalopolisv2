@extends('layouts.users')
@section('titulo')
Mis suscripciones
@stop

@section('content')
	<div id="landing-content">
						<hr>
				<div class="text-center">
					<h2>Mis Subscripciones</h2>


				</div>

				<div class="contenedor-empresas">


				@foreach($subs as $sub)
							<div class="search-container">
									<div class="panel panel-default contenedor-subs">
										<div class="panel-body">	
											<div class="search-header">
												<a href="#" class="h4 inline-block">{{$sub->nombre_publico}}</a>
											</div>
											
											<div class="seperator"></div>
											
											<p class="m-top-sm">
												<a href="#" class="pull-left   m-right-sm"> 
													{{HTML::image($sub->logo, $sub->nombre_publico, array('width'=>'100px', 'height'=>'100px'))}} 
												</a> @if($sub->desc_larga == null) {{$sub->desc_corta}}  @else {{$sub->desc_larga}} @endif
												</p>
																					
											
										</div>

										<div class="">
												<a href="#" >Ir al catalogo</a> |
												<a href="#" >Enviar Mensaje</a> |
												
											</div>
									</div><!-- /panel -->
								</div><!-- /search-container -->
				@endforeach
							
					
				</div>

		
	</div>

@stop


