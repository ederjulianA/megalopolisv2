@extends('layouts.admin')

@section('content')

<style type="text/css">
	#titulo, #seo{
		width: 100%;
		padding: 10px;

	}
</style>


	<div>
		Producto nombre : {{$producto->nombre}}
		<br>
		<form method="post" action="{{URL::route('add-seo-slug')}}">
			<div class="form-group">
				titulo : <input type="text" name="titulo" id="titulo" value="{{$producto->nombre}}"><br>

			</div>

			<div class="form-group">
				seo : <input type="text" name="seo" id="seo" required><br>
				<input type="hidden" name="id" value="{{$producto->id}}" >

				<input type="submit" value="AGREGAR">

			</div>
			{{Form::token()}}
		</form>
	</div>
	
@stop

