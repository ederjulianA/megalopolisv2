@extends('layouts.admin')

@section('content')

	<div class="admin-menu">
		<a href="{{URL::route('admin-categorias')}}" class="admin-cat-items">Gestionar Categorias</a>
		<a href="{{URL::route('admin-usuarios')}}" class="admin-cat-items-blue">Gestionar Usuarios</a>
		<a href="{{URL::route('admin-productos')}}" class="admin-cat-items">SEO SLUG</a>


		


		
		
	</div>

@stop