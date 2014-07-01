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
						  
						  <form class="" method="post" action="">
							<h1>
								Elementos disponibles para la edición
							</h1>
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