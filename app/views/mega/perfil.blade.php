@extends('layouts.empresa')

@section('content')
	
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
						<a href="#Ntab" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-tags fa-2x"></i> 
							</span>
							Nuevo tab
						</a>
					</li>

						<li>
						<a href="#Npromo" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-gift fa-2x"></i> 
							</span>
							Nueva Promocion
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
								<a class="btn btn-success btn-xs m-bottom-sm">Seguir</a>
								<div class="seperator"></div>
								<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel m-top-md">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<span class="block font-14">301</span>
										<small class="text-muted">Productos</small>
									</div><!-- /.col -->
									<div class="col-xs-4 text-center">
										<span class="block font-14">129</span>
										<small class="text-muted">Promosiones</small>
									</div><!-- /.col -->
									
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->

						<div>
							@if($num_sedes == 0)
								<div class="alert alert-warning fadeInDown animation-delay2">
									Al parecer no has credo aun tu primera sede puedes hacerlo en  Mi empresa->sedes.<br> O da clic <a href="/nueva-sede" class="btn btn-warning">AQUI</a>
									
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
												<div class="text-muted">ver</div>
											</div>
										</div><!--/ panel -->
										<div class="panel panel-overview fadeInUp animation-delay6">
											<div class="overview-icon bg-danger">
												<i class="fa fa-usd"></i>
											</div>
											<div class="overview-value">
												<div class="h2">Promos</div>
												<div class="text-muted">ver</div>
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
												<label class="control-label col-md-2">Razon Social</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="razon_social" placeholder="empresa" value="{{$user->empresa->razon_social}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->



											<div class="form-group">
												<label class="control-label col-md-2">Nombre Publico</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="nombre_publico" placeholder="empresa" value="{{$user->empresa->nombre_publico}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->


											<div class="form-group">
												<label class="control-label col-md-2">direccion Principal</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="direccion_principal" placeholder="empresa" value="{{$user->empresa->direccion_principal}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->

												<div class="form-group">
												<label class="control-label col-md-2">Telefono</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="telefono" placeholder="empresa" value="{{$user->empresa->telefono}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
										
										
											<div class="form-group">
												<label class="control-label col-md-2">Descripcion Breve</label>
												<div class="col-md-10">
													<textarea class="form-control" name="descripcion_breve" rows="3">{{$user->empresa->desc_breve}}</textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">Descripcion Larga</label>
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


							<div class="tab-pane fade" id="Ntab">
								
								<div class="row">
									<div class="panel panel-info pull-right">
										<div class="panel-body">
											Ultima Actualizacion Abril 2, 2014
										</div>
									</div><!-- /panel -->
								</div><!-- /.row -->
								
								<div class="panel panel-default">
									<form class="form-horizontal form-border">
										<div class="panel-heading">
											<h2>Crear Nuevo Tab</h2>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Sector</label>												
												<div class="col-md-10">
													<select>
														<option>- Escoger Sector -</option>
													</select>
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Nombre Tab</label>
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
											<div class="form-group">
												<label class="control-label col-md-2">Descripcion Breve</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="3"></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->

										
										
										</div>
										<div class="panel-footer">
											<div class="text-right">
												<button class="btn btn-sm btn-success">	Crear Tab</button>
												
											</div>
										</div>
									</form>
								</div><!-- /panel -->
							
								
							
							</div><!-- /tab4 -->



							<div class="tab-pane fade" id="Nproducto">
								
								<div class="panel panel-default">
									<form class="form-horizontal form-border" action="../nuevo-producto" method="post" enctype='multipart/form-data'>
										<div class="panel-heading">
											<h2>Crear nuevo Producto</h2>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2">Registrar producto en la siguiente sede:</label>
													<div class="col-md-4">
													<select name = 'sede' id = 'sede' class="form-control">
														<option>Seleccionar sede:</option>
														@foreach($sedes as $sede_item)
															<option value = "{{$sede_item->id}}">{{$sede_item->nombre_publico}}</option>
														@endforeach
													</select>
												</div><!-- /.col -->
												<div class="col-md-6">													
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
											<div class="form-group">
												<label class="control-label col-md-2">Nombre:</label>												
												<div class="col-md-10">
													<input id = 'product_name' name = 'product_name' type="text" class="form-control input-sm" placeholder="Nombre del Producto" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Categoría del producto:</label>
													<div class="col-md-4">
													<select name = 'category' id = 'category' class="form-control">
														<option>Seleccionar categoría:</option>
														@foreach($categorias as $categoria)
															<option value = "{{$categoria->id}}">{{$categoria->nombre}}</option>
														@endforeach
													</select>
												</div><!-- /.col -->
												<div class="col-md-6">													
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Precio:</label>												
												<div class="col-md-10">
													<input id = 'product_price' name = 'product_price' type="text" class="form-control input-sm" placeholder="Precio del artículo para la sede" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">Cantidad a registrar del producto en la sede seleccionada:</label>												
												<div class="col-md-10">
													<input id = 'product_amount' name = 'product_amount' type="text" class="form-control input-sm" placeholder="Cantidad entera del producto" value="">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Imagen del producto:</label>												
												<div class="col-md-10">
													<input id = 'imagen' name = 'imagen' type="file" class="upload-demo"  >
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
											<div class="form-group">
												<label class="control-label col-md-2">Descripción breve:</label>
												<div class="col-md-10">
													<textarea id = 'description' name = 'description' class="form-control" rows="3"></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->

											<div class="text-right">
												<button class="btn btn-info quick-btn btn-sombra" type="submit">
												<i class="fa fa-plus-circle"></i>	Crear</button>
												
											</div>
											
								<!--
											<div class="form-group">
												<label class="control-label col-md-2"> Tabs</label>
												<div class="panel panel-default">
								
								<div class="panel-heading">
										Escoger Tabs
								</div>
								<div class="panel-body relative">
									<select multiple="multiple" id="selectedBox1" class="select-box pull-left form-control">
										<option value="1">Apple</option>
										<option value="2">Banana</option>
										<option value="3">Cola</option>
										<option value="4">Dog</option>
										<option value="5">Elephant</option>
									</select>		

									<div class="select-box-option">
										<a class="btn btn-sm btn-default" id="btnRemove">
											<i class="fa fa-angle-left"></i>
										</a>
										<a class="btn btn-sm btn-default" id="btnSelect">
											<i class="fa fa-angle-right"></i>
										</a>
										<div class="seperator"></div>
										<a class="btn btn-sm btn-default" id="btnRemoveAll">
											<i class="fa fa-angle-double-left"></i>
										</a>
										<a class="btn btn-sm btn-default" id="btnSelectAll">
											<i class="fa fa-angle-double-right"></i>
										</a>
									</div>

									<select multiple="multiple" id="selectedBox2" class="select-box pull-right form-control">
										<option>Alabama</option>
										<option>Montana</option>
										<option>New Jersey</option>
										<option>New York</option>
										<option>Texas</option>
									</select>		
								</div>
								-->
								</div><!-- /panel -->
												
						</div>
										
											

										
										
										</div>
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