@extends('layouts.empresa')

@section('content')
	<style type="text/css">
			.alert-validacion{
				font-style: oblique;
				font-weight: bold;
				color: red;
			}
			.ajax-validation-form{
				
				bottom: 0;
				width: 100%;
			}
			.validacionAJAX{
				border: 1.5px solid red;
			}

	</style>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
	
	<div id="main-container">


	<!--  INICIO MENU DE TABS ###########################################-->
		<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i> 
						</span>
						Vista Previa
					</a>
				</li>
				<li>
					<a href="#edit" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i> 
						</span>
						Info Basica
					</a>
				</li>
					<li>
						<a href="#pass" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-lock fa-2x"></i> 
							</span>
							Contraseña
						</a>
					</li>

					<li>
						<a href="#Nproducto" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-briefcase fa-2x"></i> 
							</span>
							Nuevo Producto
						</a>
					</li>

				

						<li>
						<a href="#preguntas" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-flag fa-2x"></i> 
							</span>
							Preguntas
						</a>
					</li>
				
		</ul>

		<!-- FIN DE MENU DE TABS ####################################################################################33 -->

		


		<!--  INICIO DEL CONTENIDO DE LOS TABS-->



		<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									{{ HTML::image($user->empresa->logo)}}
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{$user->empresa->razon_social}}</strong>
								<small class="block text-muted">
									{{$user->email}}
								</small> 
								<div class="seperator"></div>
								<!--<a class="btn btn-success btn-xs m-bottom-sm">Seguir</a>-->
								<div class="seperator"></div>
								<!--<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>-->
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel m-top-md">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<!--<span class="block font-14">301</span>
										<small class="text-muted">Productos</small>-->
									</div><!-- /.col -->
									<div class="col-xs-4 text-center">
										<!--<span class="block font-14">129</span>
										<small class="text-muted">Promosiones</small>-->
									</div><!-- /.col -->
									
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->

						<div class="link-publico">
							<h3>Comparte el link de tu empresa en tus redes sociales:</h3>
							<span class="label label-success">http://tumegalopolis.com/empresa/{{$empresa->nombre_publico}}</span>
							
						</div>

						<div>
							@if($num_sedes == 0)
								<div class="alert alert-warning fadeInDown animation-delay2">
									Al parecer no has credo aún tu primera sede, puedes hacerlo <br>  dando clic <a href="{{URL::route('nueva-sede')}}" class="btn btn-warning">AQUÍ</a>
									
								</div>

							@else

							@endif
						</div>

						
					
					</div><!-- /.col -->
					<div class="col-md-9 col-sm-9">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default fadeInDown animation-delay2">
											<div class="panel-heading">
												<h2>Sobre La empresa</h2>
											</div>
											<div class="panel-body">
												<p>
														{{$user->empresa->desc_larga}}
												</p>
											</div>
										</div><!-- /panel -->
											
										<div class="panel panel-default fadeInDown animation-delay3">
											<div class="panel-heading">
												<i class="fa fa-book"></i> <h2>Datos de Contacto</h2>
											</div>
											<!--  LISTA DATOS DE CONTACTO DE LA EMPRESA################################-->
											<ul class="list-group"> 
												<li class="list-group-item"> 
													<p>Telefonos : <a href="#" class="text-info">{{$empresa->telefono}}</a>			</p> 
													
												</li> 
												<li class="list-group-item"> 
													<p>PBX: <a href="#" class="text-info">6322005</a>
													</p> 
													 
												</li> 

												<li class="list-group-item"> 
													<p>Direccion: <a href="#" class="text-info">{{$empresa->direccion_principal}}</a>
													</p> 
													 
												</li> 

												<li class="list-group-item"> 
													<p>Correo electronico: <a href="#" class="text-info">{{$user->email}}</a>
													</p> 
													 
												</li>
											</ul>
											<!-- /list-group -->

											<!--  FIN LISTA DATOS DE CONTACTO DE LA EMPRESA################################-->
										</div><!-- /panel -->
									</div><!-- /.col -->
									<div class="col-md-6">
										<div class="panel panel-default fadeInUp animation-delay4">
											
											</div><!-- /panel -->

										<!-- FIN DE CONTENEDOR DE UBICACION GOOGLE MAPS-->
										<div class="panel panel-overview fadeInUp animation-delay5">
											<div class="overview-icon bg-success">
												<i class="fa fa-shopping-cart"></i>
											</div>
											<div class="overview-value">
												<div class="h2">Productos</div>
												<div class="text-muted">
													<a href = '{{URL::route("editar-productos")}}'>
														ver
													</a>
												</div>
											</div>
										</div><!--/ panel -->
										<div class="panel panel-overview fadeInUp animation-delay6">
											@if($num_ventas == 0)
												<div class="overview-icon bg-info">
													<i class="fa fa-usd"></i>{{$num_ventas}}
												</div>

											@else
												<div class="overview-icon bg-danger">
													<i class="fa fa-usd"></i>{{$num_ventas}}
												</div>

											@endif
											
											<div class="overview-value">
												<div class="h2">Mis ventas</div>
												<div class="h2">({{$num_ventas}}) Pendientes</div>
												<div class="text-muted"><a href="{{URL::route('mega-ventas')}}">ver</a></div>
											</div>
										</div><!--/ panel -->
									</div><!-- /.col -->
								</div><!-- /.row -->


								<!-- ############################################## INICIO DE TABS##########################-->
								
							</div><!-- /tab1 -->
										@if($errors->has())
							<div class="alert alert-success" style="text-align:center;">
								<p>Errores en el formulario :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error }}</li>
									@endforeach
								</ul>
				
							</div> <!--  end form errors-->
							@endif
							<div class="tab-pane fade" id="edit">
								
							
								
								<div class="panel panel-default">

											<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Ultima Actualizacion {{$user->empresa->updated_at}}
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->


									<form class="form-horizontal form-border" method="post" action="{{ URL::route('empresa-actualizar-info-post')}}">
										<div class="panel-heading">
											Informacion Basica
										</div>
								
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Razón Social</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="razon_social" placeholder="empresa" value="{{$user->empresa->razon_social}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->



											<div class="form-group">
												<label class="control-label col-md-2">Nombre Publico</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" readonly="readonly" name="nombre_publico" placeholder="empresa" value="{{$user->empresa->nombre_publico}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->


											<div class="form-group">
												<label class="control-label col-md-2">dirección Principal</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="direccion_principal" placeholder="empresa" value="{{$user->empresa->direccion_principal}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->

												<div class="form-group">
												<label class="control-label col-md-2">Teléfono</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="telefono" placeholder="empresa" value="{{$user->empresa->telefono}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
										
										
											<!--<div class="form-group">
												<label class="control-label col-md-2">Descripcion Breve</label>
												<div class="col-md-10">
													<textarea class="form-control" name="descripcion_breve" rows="3">{{$user->empresa->desc_breve}}</textarea>
												</div>
											</div>--><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">Información Básica </label>
												<div class="col-md-10">
													<textarea class="form-control" rows="5" name="descripcion_larga">{{$user->empresa->desc_larga}}</textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
										</div>
										<div class="panel-footer">
											<div class="text-right">
												<input type="submit" class="btn btn-success btn-lg  btn-sombra" value="Actualizar">
												
											</div>
										</div>
										<input hidden name="id_empresa" value="{{ $user->empresa->id}}">
										{{Form::token()}}
									</form>
								</div><!-- /panel -->

							
							
								
							
							</div><!-- /tab2 -->


							<div class="tab-pane fade" id="pass">
								
								<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Ultima Actualizacion {{$user->updated_at}}
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->
								
								<div class="panel panel-default">
									<form class="form-horizontal form-border" method="post" action="{{URL::route('post-cambiar-pass')}}">
										<div class="panel-heading">
											Actualizar Contraseña
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Contraseña Actual</label>												
												<div class="col-md-10">
													<input type="password" class="form-control input-sm" name="contrasena_actual" placeholder="******" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Nueva Contraseña</label>
												<div class="col-md-10">
													<input type="password" name="nueva_contrasena" class="form-control input-sm" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
											<div class="form-group">
												<label class="control-label col-md-2">Confirmar Contraseña</label>
												<div class="col-md-10">
													<input type="password" class="form-control input-sm" value="" name="confirmar_contrasena">
												</div><!-- /.col -->
											</div><!-- /form-group -->

										
										
										</div>
										<div class="panel-footer">
											<div class="text-right">
												<button class="btn btn-sm btn-success">	Actualizar</button>
												
											</div>
										</div>
										{{ Form::token()}}
									</form>
								</div><!-- /panel -->
							
								
							
							</div><!-- /tab3 -->


			



							<div class="tab-pane fade" id="Nproducto">
								
								<div class="panel panel-default">
									<form class="form-horizontal form-border"autocomplete="off" action="{{URL::route('crear-producto')}}" method="post" enctype='multipart/form-data' id="form-producto" id="form-nuevo-item" onsubmit="return enviar();">
										<div class="panel-heading">
											<h2>Crear nuevo Producto</h2>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Registrar producto en la siguiente sede: (*)</label>
													<div class="col-md-4">
													<select name = 'sede' id = 'sede' class="form-control">
														<option value="0">Seleccionar sede:</option>
														@foreach($sedes as $sede_item)
															<option value = "{{$sede_item->id}}">{{$sede_item->nombre_publico}}</option>
														@endforeach
													</select>
													
													
												</div><!-- /.col -->
												<div class="col-md-6">	
														<div class="ajax-validation-form" id="sede-ajax">
														
														</div>												
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
											<div class="form-group">
												<label class="control-label col-md-2">Nombre: (*)</label>												
												<div class="col-md-10">
													<input id = 'product_name' name = 'product_name' type="text" class="form-control input-sm" placeholder="Nombre del Producto" value="" >
												</div><!-- /.col -->
												<div class="ajax-validation-form" id="prod-nom-ajax">
														
														</div>
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">SEO SLUG: (*)</label>												
												<div class="col-md-10">
													<input id = 'seo' name = 'seo' type="text" class="form-control input-sm" placeholder="URL amigable de tu producto" value="" >
												</div><!-- /.col -->
												<div class="ajax-validation-form" id="prod-seo-ajax">
														
														</div>
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Categoría del producto: (*)</label>
													<div class="col-md-4 selects-categoria">
													<select name = 'category' id = 'category' class="form-control" required>
														<option value="0">Seleccionar categoría:</option>
														@foreach($categorias as $categoria)
															<option value = "{{$categoria->id}}">{{$categoria->nombre}}</option>
														@endforeach
													</select>
													<select name="subcat" id="subcat">
														<option value="0">Escoge una </option>
														
													</select>

													<div class="mensaje-ajax-categorias">
														
													</div>
												</div><!-- /.col -->
												<div class="col-md-6">													
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Precio: (*)</label>												
												<div class="col-md-10">
													<input id = 'product_price' name = 'product_price' type="text" class="form-control input-sm" placeholder="Ingrese el precio sin comas ni puntos. Ej: 89900" value="" required>
												</div><!-- /.col -->
												<div class="ajax-validation-form" id="prod-prec-ajax">
														
														</div>
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">Cantidad a registrar del producto en la sede seleccionada: (*)</label>												
												<div class="col-md-10">
													<input id = 'product_amount' name = 'product_amount' type="text" class="form-control input-sm" placeholder="Cantidad entera del producto. Ej: 17" value="" required>
												</div><!-- /.col -->
												<div class="ajax-validation-form" id="prod-amount-ajax">
														
														</div>

											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Imagen del producto: (*)</label>												
												<div class="col-md-10">
													<input id = 'imagen' name = 'imagen' type="file" class="upload-demo" required  >
												</div><!-- /.col -->
												<div id="preview1" style="height:150px; width:auto; margin:0 auto;">

													<img src=""/ style="width:auto; height:150px; ">
													
												</div>
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">2da imagen:</label>												
												<div class="col-md-10">
													<input id = 'imagen2' name = 'imagen2' type="file" class="upload-demo"  >
												</div><!-- /.col -->
												<div id="preview2" style="height:150px; width:auto; margin:0 auto;">

													<img src=""/ style="width:auto; height:150px; ">
													
												</div>
											</div><!-- /form-group -->


											<div class="form-group">
												<label class="control-label col-md-2">3ra imagen:</label>												
												<div class="col-md-10">
													<input id = 'imagen3' name = 'imagen3' type="file" class="upload-demo"  >
												</div><!-- /.col -->
												<div id="preview3" style="height:150px; width:auto; margin:0 auto;">

													<img src=""/ style="width:auto; height:150px; ">
													
												</div>
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Descripción breve: (*)</label>
												<div class="col-md-10">
													<textarea id = 'description' name = 'description' class="form-control" rows="3" required></textarea>
												</div><!-- /.col -->
												<div class="ajax-validation-form" id="prod-descripcion-ajax">
														
														</div>

											</div><!-- /form-group -->
												<div class="form-group">
														
														<label class="col-lg-2 control-label">Tags (Separados por comas Ej: mis,tags)</label>
														<div class="col-lg-10">
															<input id = 'tags' type="text" class="tag-demo1" name="tags" value="">
														</div><!-- /.col -->
												</div><!-- /form-group -->

											<div class="text-right">
												<input type="hidden" name="empresa_id" value="{{$user->empresa->id}}">
												<button class="btn btn-info quick-btn btn-sombra" > Crear</button>
												<!--<input type="submit" class="btn btn-info quick-btn btn-sombra" id="btn-nuevo-producto">-->

												
												
											</div>
											
							
								</div><!-- /panel -->
												
						</div>

						</form>
										
											

										
										
										</div>




										<div class="tab-pane fade" id="preguntas">
								
								<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Ultima Actualizacion: 
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->
								
								<div class="panel panel-default">
									
										<div class="panel-heading header-preguntas">
											<h2>Mis preguntas</h2> {{HTML::image('img/mega-imgs/preg.jpg', 'preguntas', array('width'=>'60px', 'height'=>'50px'))}}
										</div>
										<div class="panel-body">

										<div class="contenedor-preguntas-null">
											<h2>Tus preguntas sin responder ({{$num_nulls}})</h2>
											@if($num_nulls == 0)
												{{HTML::image('img/mega-imgs/no-preguntas.jpg', 'preguntas', array('width'=>'250px', 'height'=>'90px'))}}
											@else	
												
											@endif
											@foreach($preguntas_null as $preg_null)
											<div class="pregunta-responder">
												{{$preg_null->pregunta}}<br>
												<form method="post" action="{{URL::route('preguntas-empresa')}}" rol="form">
													<div class="form-group">
														<input type="hidden" name="pregunta_id" value="{{$preg_null->id}}">
														<input type="hidden" name="user_id" value="{{$preg_null->user_id}}">
														<textarea name="respuesta" class="form-control"></textarea>
													</div>
													
													<input type="submit" value="Responder" class="btn btn-success">
													{{ Form::token()}}
												</form>
											</div>		
											@endforeach
											
										</div>

										<div class="contenedor-preguntas-total"> 
											<h3>Todas mis preguntas ({{$total_preguntas}})</h3>

											@foreach($preguntas as $pregunta)
												{{$pregunta->pregunta}}<br>
											@endforeach
										</div>


										
											
											
										
										

										
										
										</div>
										<div class="panel-footer">
											
										</div>
									
								</div><!-- /panel -->
							
								
							
					</div><!-- /tab6 -->
										<div class="panel-footer">
											
										</div>
									</form>
								</div><!-- /panel -->
							</div><!-- /panel -->
							
								
							
							</div><!-- /tab5 -->







							
						</div><!-- /tab-content -->
					</div><!-- /.col -->
				</div><!-- /.row -->			
		</div><!-- /.padding-md -->




	</div>
	
@stop