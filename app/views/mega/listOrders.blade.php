@extends('layouts.tshop')

@section('titulo')
	Lista de Ordenes {{Auth::user()->username}}
@stop

@section('content-page')
	<meta name="description" content="">
    <meta name="author" content="Megalopolis TEAM">



@stop

@section('content')
		<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li><a href="{{URL::route('perfil')}}">Mi Cuentat</a> </li>
        <li class="active"> Mis ordenes </li>
      </ul>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-11 col-md-9 col-sm-9">
      <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Lista de ordenes </span></h1>
      <div class="row userInfo">
        <div class="col-lg-12">
          <h2 class="block-title-2"> Tu lista de ordenes  </h2>
        </div>
        
        <div class="col-xs-12 col-sm-12">
          <table class="footable">
            <thead>
              <tr>
                <th data-class="expand" data-sort-initial="true"> <span title="table sorted by this column on load">ID de orden</span> </th>
                <th data-hide="phone,tablet" data-sort-ignore="true">Articulo</th>
                <th data-hide="phone,tablet" data-sort-ignore="true">Cantidad</th>
                <th data-hide="phone,tablet"><strong>Precio Unitario</strong></th>
                <th data-hide="default"> Total </th>
                <th data-hide="default" data-type="numeric"> Vendedor </th>
                <th data-hide="phone" data-type="numeric"> Estado </th>
              </tr>
            </thead>
            <tbody>
            	@foreach($compras as $com)
            			<tr>
                <td>#{{$com->id}}</td>
                <td>{{$com->nombre_producto}} </td>
                <td>{{$com->cantidad}} <small>item(s)</small></td>
                <td><a target="_blank" > ${{number_format($com->valor_unitario, 0, '', '.')}}</a></td>
                <td>${{number_format($com->valor_total, 0, '', '.')}}</td>
                
                <td data-value="78025368997">
                	<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-{{$com->id}}">
  {{$com->razon_social}}
</button>
                </td>
                <td data-value="3">{{ Favs::estadoPedido($com->estado)}}</td>
              </tr>
              		<!-- Modal -->
<div class="modal fade" id="myModal-{{$com->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$com->razon_social}}</h4>
      </div>
      <div class="modal-body">
        Sede en la que comnpraste -> {{$com->nombre_sede}} <br>
        Direccion -> {{$com->direccion}} <br>
        Telefono -> {{$com->telefono}} <br><br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

            	@endforeach
              
          
            </tbody>
          </table>
        </div>
        
        <div class="col-lg-12 clearfix">
          <ul class="pager">
            <li class="previous pull-right"><a href="{{URL::route('index')}}"> <i class="fa fa-home"></i> Volver a comprar </a></li>
            <li class="next pull-left"><a href="{{URL::route('perfil')}}"> &larr; Volver a mi cuenta</a></li>
          </ul>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-1 col-md-3 col-sm-3"> </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /main-container -->

<div class="gap"> </div>
@stop