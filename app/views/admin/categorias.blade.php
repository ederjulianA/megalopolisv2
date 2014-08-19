@extends('layouts.admin')

@section('content')
<style type="text/css">
	


</style>
<h2>CATEGORIAS</h2>
<a href="#" class="btn btn-info" data-toggle="modal" data-target="#nuevaCategoria">NUEVA CATEGORIA</a>
<!-- Modal -->
			<div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title" id="myModalLabel">Agregar nueva Categoria</h4>
				      </div>
				      <div class="modal-body">
				        <form method="post" action="{{URL::route('nueva-categoria-admin')}}">
				        	<div>
				        	<label for="subcategoria">Categoria</label>
				        	
				        	<input type="text" name="categoria" required>
				        	</div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button type="submit" class="btn btn-primary">Agregar</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
	

<div class="contenedor-cats">

		@foreach($categorias as $cat)

			<div class="cat-item">
				<h2 class="main-cat">{{$cat->nombre}} <a class="btn btn-info btn-categoria" href="{{$cat->id}}">Editar</a></h2>
				<input type="hidden" id="cat_nombre-{{$cat->id}}" value="{{$cat->nombre}}">
				<p id="form-ajax-{{$cat->id}}" class="form-ajax">
					
					
				</p>
				<p>
					<h2>Subcategorias</h2>
					@foreach($cat->subcategoria as $subcat)
						<a href="#" class="subcat-item">{{$subcat->nombre_sub}} <a class="btn btn-danger btn-subcategoria" href="{{$subcat->id}}">Editar</a></a>
								<input type="hidden" id="sub_nombre-{{$subcat->id}}" value="{{$subcat->nombre_sub}}">
								<p id="form-ajax-sub-{{$subcat->id}}" class="form-ajax">
					
					
								</p>
					@endforeach
				</p>
				<div class="acciones-categoria">
					<a href="#" class="btn btn-warning"data-toggle="modal" data-target="#modalNuevaCat-{{$cat->id}}"> Nueva Subcategoria</a>

					
					
				</div>
				
			</div>
			<!-- Modal -->

				
		@endforeach
</div>		

@stop

@foreach($categorias as $cat)
		<!-- Modal -->
				<div class="modal fade" id="modalNuevaCat-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title" id="myModalLabel">Agregar nueva Subcategoria a :{{$cat->nombre}}</h4>
				      </div>
				      <div class="modal-body">
				        <form method="post" action="{{URL::route('nueva-subcat')}}">
				        	<div>
				        	<label for="subcategoria">Subcategoria</label>
				        	<input type="hidden" name="id_categoria" value="{{$cat->id}}">
				        	<input type="text" name="subcatName" required>
				        	</div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button type="submit" class="btn btn-primary">Agregar</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
@endforeach