@extends('layouts.tshop')

@section('titulo')
Mis Favoritos.
@stop

@section('content-page')

@stop

@section('content')


		<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li><a href="{{URL::route('perfil')}}">Mi Cuenta</a> </li>
        <li class="active"> Lista Favoritos </li>
      </ul>
    </div>
  </div> <!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-heart"></i> Mis favoritos (<strong id="num_favoritos">{{$num_favs}}</strong>)</span></h1>
      <div class="row userInfo">
        <div class="col-lg-12">
          <h2 class="block-title-2"> Actualiza tu lista de favoritos. </h2>
        </div>
        <div class="col-xs-12 col-sm-12">
          <table>
            <tbody>
            
              
              
              
             
            
              
            @if($favoritos->count())
            		@foreach($favoritos as $fav)
             <tr class="CartProduct" id="fav-{{$fav->id}}">
			                <td style="width:10%" class="CartProductThumb"><div> <a href="{{URL::route('productos',array('id'=>$fav->id, 'sede'=>$fav->sede_id,'slug'=>$fav->slug))}}">
			                {{HTML::image($fav->imagen, $fav->producto_nombre)}}</a> </div></td>
			                <td style="width:40%"><div class="CartDescription">
			                    <h4> <a href="{{URL::route('productos',array('id'=>$fav->id, 'sede'=>$fav->sede_id,'slug'=>$fav->slug))}}">{{$fav->producto_nombre}} </a> </h4>
			                    <span class="size">{{$fav->categoria_nombre}}</span>
			                    <div class="price"> <span>${{number_format($fav->precio_detal, 0, '', '.')}}</span> </div>
			                  </div></td>
			                <td style="width:15%"><a class="btn btn-primary" href="{{URL::route('productos',array('id'=>$fav->id, 'sede'=>$fav->sede_id,'slug'=>$fav->slug))}}"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ver producto </span> </a></td>
			                <td style="width:40%" class="delete"><a title="Delete" href="{{$fav->id}}" class="remFavList"> <i class="glyphicon glyphicon-trash fa-2x"></i> </a></td>
              </tr>

            		@endforeach

            @else
            	No has agregado Ningun Producto a tus favoritos.
            @endif
              
             
              
            </tbody>
          </table>
        </div>
        
        <div class="col-lg-12 clearfix">
          <ul class="pager">
            <li class="previous pull-right"><a href="{{URL::route('index')}}"> <i class="fa fa-home"></i> Ir a comprar </a></li>
            <li class="next pull-left"><a href="{{URL::route('perfil')}}"> &larr; Regresar a mi cuenta</a></li>
          </ul>
        </div>
        
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div>
  <!--/.row-->
  <div style="clear:both"></div>
</div> <!-- /main-container -->

@stop