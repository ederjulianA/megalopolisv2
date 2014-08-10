@extends('layouts.empresa')

@section('titulo')
	Editar productos
@stop

@section('content')
	<style type="text/css">
			.lista-productos-editar{

				width: 90%;

			}
			ul.lista-productos-editar li {
				display: block;
				padding: 10px;
				width: 80%;
			}

	</style>
	<div id="main-container">
		<h1>
			Lista de productos de todas las sedes disponibles
		</h1>
		<ul class="lista-productos-editar">
			@foreach($productos as $producto)
				<li>{{$producto->id}}. {{$producto->producto_nombre}} | <a href="{{URL::route('editar-productos-post', array('id'=>$producto->id))}}" class="btn btn-info" ><i class="fa fa-edit"></i></a> | <a href = '{{URL::route('eliminar-producto')}}?id={{$producto->id}}' onclick = "return confirm('¿Estás seguro?');" >Eliminar</a></li>
		<div class="modal fade" id="myModal-{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title" id="myModalLabel">Editar el producto {{$producto->producto_nombre}}</h4>
						</div>
						<div class="modal-body">
						  
							 <form class="form-horizontal form-border" action="{{ URL::route('edit-product')}}" method="post" enctype='multipart/form-data'>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-md-2">Mover a la sede:</label>
											<div class="col-md-4">
											<select name = 'sede' id = 'sede' class="form-control">
												<option>Seleccionar sede:</option>
												@foreach($sedes as $sede_item)
													<option value = "{{$sede_item->id}}" <?php if($sede_item->id == $producto->producto_sede) { echo('selected');}?>>{{$sede_item->nombre_publico}}</option>
												@endforeach
											</select>
										</div><!-- /.col -->
										<div class="col-md-6">													
										</div><!-- /.col -->
									</div><!-- /form-group -->
								
									<div class="form-group">
										<label class="control-label col-md-2">Nombre:</label>												
										<div class="col-md-10">
											<input id = 'product_name' name = 'product_name' type="text" class="form-control input-sm" placeholder="Nombre del Producto" value="{{$producto->producto_nombre}}">
											<input id = 'product_id' name = 'product_id' type="hidden" value="{{$producto->id}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									
									<div class="form-group">
										<label class="control-label col-md-2">Categoría del producto:</label>
											<div class="col-md-4 selects-categoria">
											<select name = 'category' id = 'category' class="form-control">
												<option>Seleccionar categoría:</option>
												@foreach($categorias as $categoria)
													<option value = "{{$categoria->id}}" <?php if($categoria->id == $producto->categoria) { echo('selected');}?>>{{$categoria->nombre}}</option>
												@endforeach
											</select>
											<select name="subcat" id="subcat">
												<option>Seleccionar subcategoría:</option>
													@foreach($producto->subcategories as $subcategory)
												<option value = "{{$subcategory->id}}" <?php if($subcategory->id == $producto->subcat_id) { echo('selected');}?>>{{$subcategory->nombre_sub}}</option>
												@endforeach
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
											<input id = 'product_price' name = 'product_price' type="text" class="form-control input-sm" placeholder="Precio del artículo para la sede" value="{{$producto->precio_detal}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->

									<div class="form-group">
										<label class="control-label col-md-2">Cantidad a registrar del producto en la sede seleccionada:</label>												
										<div class="col-md-10">
											<input id = 'product_amount' name = 'product_amount' type="text" class="form-control input-sm" placeholder="Cantidad entera del producto" value="{{$producto->cantidad}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									
									<div class="form-group">
										<label class="control-label col-md-2">Imagen principal del producto:</label>
										<?php
											if(!empty($producto->imagen)) {
											
												?>														
												<div>
													{{HTML::image($producto->imagen)}}
												</div>
												<?php
											}
										?>
										<label class="control-label col-md-2">
											Cambiar:
										</label>
										<div class="col-md-10">
											<input id = 'imagen' name = 'imagen' type="file" class="upload-demo"  >
										</div><!-- /.col -->
										<div id="preview1" style="height:150px; width:auto; margin:0 auto;">

											<img src=""/ style="width:auto; height:150px; ">
											
										</div>
									</div><!-- /form-group -->

									<div class="form-group">
										<label class="control-label col-md-2">Segunda imagen:</label>
										<?php
											if(!empty($producto->img1)) {
											
												?>														
												<div>
													<img src = '<?php echo($producto->img1);?>'/>
												</div>
												<?php
											} else {
											
												?>
												<label>
													Aún no se ha definido una imagen secundaria.
												</label>
												<?php
											}
										?>
										<div class="col-md-10">
											<input id = 'imagen2' name = 'imagen2' type="file" class="upload-demo"  >
										</div><!-- /.col -->
										<div id="preview2" style="height:150px; width:auto; margin:0 auto;">

											<img src=""/ style="width:auto; height:150px; ">
											
										</div>
									</div><!-- /form-group -->


									<div class="form-group">
										<label class="control-label col-md-2">Tercera imagen:</label>
										<?php
											if(!empty($producto->img2)) {
											
												?>														
												<div>
													<img src = '<?php echo($producto->img2);?>'/>
												</div>
												<?php
											} else {
											
												?>
												<label>
													Aún no se ha definido una imagen terciaria.
												</label>
												<?php
											}
										?>										
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
											<textarea id = 'description' name = 'description' class="form-control" rows="3">{{$producto->producto_descripcion}}</textarea>
										</div><!-- /.col -->
									</div><!-- /form-group -->
										<div class="form-group">
												
												<label class="col-lg-2 control-label">Tags</label>
												<div class="col-lg-10">
													<input id = 'tags' type="text" class="tag-demo1" name="tags" value="<?php if(!empty($producto->tags)) { $_tags = array(); foreach($producto->tags as $tag) { $_tags[] = $tag->etiqueta;} echo(implode(',', $_tags));}?>">
												</div><!-- /.col -->
										</div><!-- /form-group -->

									<div class="text-right">
										<input type="hidden" name="empresa_id" value="{{$user->empresa->id}}">
										<button class="btn btn-info quick-btn btn-sombra" type="submit">
										<i class="fa fa-plus-circle"></i>Editar</button>
										
									</div>
								</div>
								{{ Form::token()}}
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