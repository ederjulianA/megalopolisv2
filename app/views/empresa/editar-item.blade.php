@extends('layouts.empresa')

@section('titulo')
	Editar productos
@stop

@section('content')
<script type="text/javascript">

</script>
		<div id="main-container">
				<h2>Editando {{$productos->producto_nombre}}</h2>

				<form action="{{ URL::route('edit-product')}}" method="post" enctype='multipart/form-data'>
					<div>
						<label>Sede Actual del Producto</label>
						<select name = 'sede' id = 'sede' class="">
												<option>Seleccionar sede:</option>
												@foreach($sedes as $sede_item)
													<option value = "{{$sede_item->id}}" <?php if($sede_item->id == $productos->producto_sede) { echo('selected');}?>>{{$sede_item->nombre_publico}}</option>
												@endforeach
											</select>
					</div>
					<div>
						<label>Nombre del Articulo:</label>
						<input id = 'product_name' name = 'product_name' type="text" class="" placeholder="Nombre del Producto" value="{{$productos->producto_nombre}}">
											<input id = 'product_id' name = 'product_id' type="hidden" value="{{$productos->id}}">
					</div>

					<div>
						<label>Categoria :</label>
						<select name = 'category' id = 'category' class="form-control">
												<option>Seleccionar categoría:</option>
												@foreach($categorias as $categoria)
													<option value = "{{$categoria->id}}" <?php if($categoria->id == $productos->categoria) { echo('selected');}?>>{{$categoria->nombre}}</option>
												@endforeach
											</select>	
					</div>

					<div>
						<label>Subcategoria:</label>
						<select name="subcat" id="subcat">
												
												<option>Seleccionar subcategoría:</option>
													@foreach($subcategories as $subcategory)
												<option value = "{{$subcategory->id}}" <?php if($subcategory->id == $productos->subcat_id) { echo('selected');}?>>{{$subcategory->nombre_sub}}</option>
												@endforeach
													
												
											</select>
					</div>



					<div class="form-group">
										<label class="control-label col-md-2">Precio:</label>												
										<div class="col-md-10">
											<input id = 'product_price' name = 'product_price' type="text" class="form-control input-sm" placeholder="Precio del artículo para la sede" value="{{$productos->precio_detal}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->

									<div class="form-group">
										<label class="control-label col-md-2">Cantidad a registrar del producto en la sede seleccionada:</label>												
										<div class="col-md-10">
											<input id = 'product_amount' name = 'product_amount' type="text" class="form-control input-sm" placeholder="Cantidad entera del producto" value="{{$productos->cantidad}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									
									<div class="form-group">
										<label class="control-label col-md-2">Imagen principal del producto:</label>
										<?php
											if(!empty($productos->imagen)) {
											
												?>														
												<div>
													{{HTML::image($productos->imagen)}}
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
											if(!empty($productos->img1)) {
											
												?>														
												<div>
													{{HTML::image($productos->img1)}}
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
											if(!empty($productos->img2)) {
											
												?>														
												<div>
													{{HTML::image($productos->img2)}}
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
											<textarea id = 'description' name = 'description' class="form-control" rows="3">{{$productos->producto_descripcion}}</textarea>
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
@stop