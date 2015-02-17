@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-tag"></i> Nuevo Producto</h2>
@stop

@section('chats-msg')
	 @include('includes2.chats')
@stop

@section('content')
		<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12 col-md-8">
        	{{ Form::open(['route'=>'crear-producto','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('sede',' Sede del artículo (*)') }}
									{{ Form::select('sede', $sedes,0,['class'=>'form-control','id'=>'sede']) }}
									{{ $errors->first('sede','<p class="alert alert-danger">:message</p>') }}
								</div>


        						<div class="form-group">
									{{ Form::label('category',' Categoría del artículo (*)') }}
									{{ Form::select('category', $categories,0,['class'=>'form-control','id'=>'category']) }}
									{{ $errors->first('category','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('subcat',' Sub categoría (*)') }}
									{{Form::select('subcat', array('id' => 'subcat','class'=>'form-control'))}}
									<div class="mensaje-ajax-categorias">
														
													</div>
									{{ $errors->first('subcat','<p class="alert alert-danger">:message</p>') }}
								</div>

        						<div class="form-group">
									{{ Form::label('product_name',' Nombre del artículo (*)') }}
									{{ Form::text('product_name',null,['class'=>'form-control']) }}
									{{ $errors->first('product_name','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('seo',' Url del producto (*)') }}
									http://{{$empresa->nombre_publico}}.tiendo.co/_/producto/<span id="seourl"></span>{{ Form::text('seo',null,['class'=>'form-control','id'=>'seo']) }}
									{{ $errors->first('seo','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('description',' Descripción del artículo (*)') }}
									{{ Form::textarea('description', null, array('class' => 'form-control')) }}
									{{ $errors->first('description','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('product_price',' Precio del artículo sin comas ni puntos (*)') }}
									{{ Form::text('product_price',null,['class'=>'form-control']) }}
									{{ $errors->first('product_price','<p class="alert alert-danger">:message</p>') }}
								</div>


								<div class="form-group">
									{{ Form::label('product_amount',' Cantidad disponible (*)') }}
									{{ Form::text('product_amount',null,['class'=>'form-control']) }}
									{{ $errors->first('product_amount','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('img',' Imagen principal ') }}
									{{ Form::file('imagen', array('class' => 'form-control','id'=>'imagen')) }}
									{{ Form::hidden('user_id', Auth::user()->id)}}
										<div id="preview1" style="height:150px; width:auto; margin:0 auto;">

													<img src=""/ style="width:auto; height:150px; ">
													
												</div>
									{{ $errors->first('img','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div>
									<button type="submit" class="btn btn-success btn-lg"> Crear Producto</button>
								</div>


        	{{ Form::close()}}
         
          
        </div>
        <div class="col-xs-6 col-md-4">
        	 <div class="col-xs-18 col-md-12">
            @if(Session::has('message-alert'))

            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> {{Session::get('message-alert')}} </strong>
            </div>

        @endif
        </div>
      
    </div>
</div>
@stop

@section('scripts')
	<script src="{{asset('admin2/adminJS/productos.js')}}"></script>
@stop