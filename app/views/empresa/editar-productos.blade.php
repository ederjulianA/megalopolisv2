@extends('layouts.empresa')

@section('titulo')
	Editar productos
@stop

@section('content')
	<div id="main-container">
		<h1>
			Lista de productos de todas las sedes disponibles
		</h1>
		<ul>
			@foreach($productos as $producto)
				<li>{{$producto->id}}. {{$producto->producto_nombre}} | <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal-{{$producto->id}}" onclick = 'return toCloneInitialize({{$producto->id}});'><i class="fa fa-edit"></i></a>
													 | <a href = '#'>Eliminar</a></li>
				<div class="modal fade" id="myModal-{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title" id="myModalLabel">Editar el producto {{$producto->producto_nombre}}</h4>
						</div>
						<div class="modal-body">
						  
							 <form class="form-horizontal form-border" action="../editar-producto" method="post" enctype='multipart/form-data'>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-md-2">Registrar producto en la siguiente sede:</label>
											<div class="col-md-4">
											<select name = 'sede' id = 'sede' class="form-control">
												<option>Seleccionar sede:</option>
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
											<div class="col-md-4 selects-categoria">
											<select name = 'category' id = 'category' class="form-control">
												<option>Seleccionar categoría:</option>
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
										<label class="control-label col-md-2">Descripción breve:</label>
										<div class="col-md-10">
											<textarea id = 'description' name = 'description' class="form-control" rows="3"></textarea>
										</div><!-- /.col -->
									</div><!-- /form-group -->
										<div class="form-group">
												
												<label class="col-lg-2 control-label">Tags</label>
												<div class="col-lg-10">
													<input id = 'tags' type="text" class="tag-demo1" name="tags" value="">
												</div><!-- /.col -->
										</div><!-- /form-group -->

									<div class="text-right">
										<input type="hidden" name="empresa_id" value="{{$user->empresa->id}}">
										<button class="btn btn-info quick-btn btn-sombra" type="submit">
										<i class="fa fa-plus-circle"></i>Editar</button>
										
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						  
						</div>
					  </div>
					</div>
				</div>
			@endforeach
		</ul>
	</div>
@stop