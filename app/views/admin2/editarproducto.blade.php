@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop


@section('title-admin')
	<h2 class="pull-left"><i class="fa fa-tag"></i> Editar Producto</h2>
@stop

@section('chats-msg')
	 @include('includes2.chats')
@stop

@section('content')
		<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12 col-md-8">
        	{{ Form::open(['route'=>'edit-product','method'=>'POST','role'=>'form','files'=>true]) }}

        						<div class="form-group">
									{{ Form::label('sede',' Sede del articulo (*)') }}
									{{ Form::select('sede', $sedes,0,['class'=>'form-control','id'=>'sede']) }}
									{{ $errors->first('sede','<p class="alert alert-danger">:message</p>') }}
								</div>


        						<div class="form-group">
									{{ Form::label('category',' Categoria del articulo (*)') }}
									{{ Form::select('category', $categories,$producto->categoria_id,['class'=>'form-control','id'=>'category']) }}
									{{ $errors->first('category','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('subcat',' Sub categoria (*)') }} 
										
												
												<select name="subcat" id="subcat">
												
												
													@foreach($subcategories as $subcategory)
												<option value = "{{$subcategory->id}}" <?php if($subcategory->id == $producto->subcategoria_id) { echo('selected');}?>>{{$subcategory->nombre_sub}}</option>
												@endforeach
													
												
											</select>
											
									
									
									<div class="mensaje-ajax-categorias">
														
													</div>
									{{ $errors->first('subcat','<p class="alert alert-danger">:message</p>') }}
								</div>

        						<div class="form-group">
									{{ Form::label('product_name',' Nombre del Articulo (*)') }}
									{{ Form::text('product_name',$producto->producto_nombre,['class'=>'form-control']) }}
									{{ $errors->first('product_name','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('seo',' Url del producto (*)') }}
									http://{{$empresa->nombre_publico}}.tiendo.co/_/producto/<span id="seourl">{{$producto->slug}}</span>{{ Form::text('seo',$producto->slug,['class'=>'form-control','id'=>'seo']) }}
									{{ $errors->first('seo','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('description',' Descripción del Articulo (*)') }}
									{{ Form::textarea('description', $producto->producto_descripcion, array('class' => 'form-control')) }}
									{{ $errors->first('description','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('product_price',' Precio del articulo sin comas ni puntos (*)') }}
									{{ Form::text('product_price',$producto->precio_detal,['class'=>'form-control']) }}
									{{ $errors->first('product_price','<p class="alert alert-danger">:message</p>') }}
								</div>


								<div class="form-group">
									{{ Form::label('product_amount',' Cantidad del Articulo (*)') }}
									{{ Form::text('product_amount',$producto->cantidad,['class'=>'form-control']) }}
									{{ $errors->first('product_amount','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div class="form-group">
									{{ Form::label('img',' Imagen Principal ') }}
									{{ Form::file('imagen', array('class' => 'form-control','id'=>'imagen')) }}
									{{ Form::hidden('user_id', Auth::user()->id)}}
									{{ Form::hidden('product_id', $producto->id)}}
										<div id="preview1" style="height:150px; width:auto; margin:0 auto;">

													<img src=""/ style="width:auto; height:150px; ">
													
												</div>
									{{ $errors->first('img','<p class="alert alert-danger">:message</p>') }}
								</div>

								<div>
									<button type="submit" class="btn btn-success btn-lg"> Editar Producto</button>
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
    	<div class="row">
    		<h2>Imagen Actual</h2>
    		<img src="{{asset($producto->imagen)}}" alt="{{$producto->producto_nombre}}" height="150px" width="auto">
    		
    	</div>
</div>
@stop

@section('scripts')
	<script src="{{asset('admin2/adminJS/productos.js')}}"></script>
@stop