@extends('layouts.admin')

@section('content')
	<script type="text/javascript">
		$(document).on('ready', function(){

		});
	</script>
	<h2>Lista de productos sin SEO-SLUG</h2>
	<div class="container-productos-slug">

		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>nombre</th>
					<th>ACCIONES</th>

				</tr>
				@foreach($productos as $pro)
					<tr>
						<td>{{$pro->nombre}}</td>
						<td><a href="{{URL::route('admin-productos-editar',array('id'=>$pro->id))}}">Agregar SEO SLUG</a></td>
					</tr>
					
				@endforeach
			</table>
			
		</div>
		
	</div>
@stop