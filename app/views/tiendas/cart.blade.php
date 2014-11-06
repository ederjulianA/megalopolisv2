@extends('layouts.stores')

@section('titulo')
  CARRITO {{$empresa->razon_social}}
@stop

@section('content-page')
  <meta name="description" content="@if(!$empresa->desc_corta)
                        {{$empresa->desc_larga}}
                      @else
                        {{$empresa->desc_corta}}  
            @endif">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="{{$empresa->razon_social}}"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="@if(!$empresa->desc_corta)
                        {{$empresa->desc_larga}}
                      @else
                        {{$empresa->desc_corta}}  
                      @endif"/>
<meta property="og:url" content="{{$account}}.tumegalopolis.com/cart"/>
<meta property="og:image" content="{{$account}}.tumegalopolis.com/{{$empresa->logo}}"/>
@stop

@section('logo-empresa')
<img src="{{asset($empresa->logo)}}" class="logoEmpresa">
@stop

@section('titulo-mobile')
{{$empresa->razon_social}}
@stop

@section('menu')
  <li><a href="/" class="">HOME</a></li>
  <li><a href="/productos/" class="active">PRODUCTOS</a></li>
@stop
@section('estilos')


  style= " background-color:{{$empresa->color_header}};color:#fff";


@stop

@section('info-footer1')
  <h4>{{$empresa->razon_social}}</h4>
  <ul>
    <li>
      @if(!$empresa->desc_corta)
                        {{$empresa->desc_larga}}
                      @else
                        {{$empresa->desc_corta}}  
                      @endif
    </li>
    <li>Direccion Principal : {{$empresa->direccion_principal}}</li>
  </ul>
@stop

@section('info-footer2')
  <h4>Sedes ({{$num_sedes}})</h4>
  <ul>
    @foreach($sedes as $s)
      <li>{{$s->nombre_publico}}---{{$s->direccion}}</li>
    @endforeach
  </ul>
@stop

@section('content')
  
  <style type="text/css">
  .info-empresa{
    font-weight: bold;
    font-size: 20px;
    letter-spacing: .5px;
    color: #666;

  }
  /*header {background-image:  url({{ URL::asset($empresa->logo); }})}
  header{
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }*/

  </style>
 <div class="container main-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">

            <!-- Categories -->
            <div class="col-lg-12 col-md-12 col-sm-6">
              <div class="no-padding">
                  <span class="title">CATEGORIAS</span>
                </div>
          <div class="list-group list-categ">
             @foreach($categorias as $cat)
              <a href="#" class="list-group-item">{{$cat->nombre_categoria_cat}}</a>
          @endforeach
          </div>
        </div>
        <!-- End Categories -->

        

          </div>

          <div class="clearfix visible-sm"></div>

     <!-- Cart -->
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">SHOPPING CART</span>
              </div>
              <div class="col-lg-12 col-sm-12 hero-feature">
                @if(Cart::total(false))
                  <table class="table table-bordered tbl-cart">
                    <thead>
                                    <tr>
                                        <td class="hidden-xs">Image</td>
                                        <td>Product Name</td>
                                        
                                        
                                        <td class="td-qty">Quantity</td>
                                        <td>Unit Price</td>
                                        <td>Sub Total</td>
                                        <td>Remove</td>
                                    </tr>
                                </thead>
                                <tbody>
                                      @foreach($products as $product)
                                          <tr>
                                              <td class="hidden-xs">
                                                  <a href="detail.html">
                                                      <img src="{{asset($product->image)}}" alt="{{$product->name}}" title="" width="47" height="47" />
                                                  </a>
                                              </td>
                                              <td><a href="#">{{$product->name}}</a>
                                              </td>
                                             
                                             
                                              <td class="hidden-xs">
                                                  <input type="text" name="" value="{{$product->quantity}}" class="input-qty form-control text-center" />
                                              </td>
                                              <td class="price">$ {{number_format($product->price, 0, '', '.')}}</td>
                                              <td>$ {{number_format($product->total(), 0, '', '.')}}</td>
                                              <td class="text-center">
                                                  <a href="#" class="remove_cart" rel="1">
                                                      <i class="fa fa-trash-o"></i>
                                                  </a>
                                              </td>
                                          </tr>

                                          @endforeach
                                    <tr>
                                        <td colspan="6" align="right">Total</td>
                                        <td class="total" colspan="2"><b>$ {{number_format(Cart::total(), 0, '', '.')}}</b>
                                        </td>
                                    </tr>
                                </tbody>
                  </table>
                @else
                  <div class="alert alert-danger">
                    <strong>El carrito de compras esta vacio.</strong>
                    
                  </div>
                @endif 
          <div class="btn-group btns-cart">
            <button type="button" class="btn btn-primary" onclick="window.location='catalogue.html'"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
            <button type="button" class="btn btn-primary">Update Cart</button>
            <button type="button" class="btn btn-primary" onclick="window.location='checkout.html'">Checkout <i class="fa fa-arrow-circle-right"></i></button>
          </div>

              </div>
          </div>
          <!-- End Cart -->


        </div>
  </div>

@stop