@extends('layouts.admin2');

@section('name_company')
	{{$empresa->razon_social}}
@stop

@section('title-admin')
  <h2 class="pull-left"><i class="fa fa-tags"></i> Todos los productos ({{ count($productos)}})</h2>
@stop

@section('chats-msg')
   @include('includes2.chats')
@stop

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-xs-18 col-md-12">
            @if(Session::has('message-alert'))

            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong> {{Session::get('message-alert')}} </strong>
            </div>

        @endif
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Img</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>

              </tr>
              @foreach($productos as $pro)
                <tr>
                  <td>{{$pro->id}}</td>
                  <td><img src="{{asset($pro->imagen)}}" height="70px" width="auto"></td>
                  <td>{{$pro->producto_nombre}}</td>
                  <td>{{number_format($pro->precio_detal, 0, '', '.')}}</td>
                  <td><a href="{{ URL::route('adminpanel-editar-producto',array('id'=>$pro->id))}}" class="btn btn-info"> Editar Producto</a></td>
                </tr>
              @endforeach
            </table>
          
        </div>
      
    </div>
</div>
@stop