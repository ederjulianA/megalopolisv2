@extends('layouts.tshop')

@section('titulo')
Perfil | {{Auth::user()->username}}
@stop

@section('content-page')

@stop

@section('content')
		<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
      
        <li class="active"> Mi Cuenta </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-unlock-alt"></i> Mi cuenta </span></h1>
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <p> Hola  {{Auth::user()->username}} Bienvenido </p>
          <h2 class="block-title-2"><span>Aquí podran administrar la informacion de tu ceunta.</span></h2>
          <ul class="myAccountList row">
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Orders" href="#"><i class="fa fa-calendar"></i> Historial de compras </a> </div>
            </li>
            <!--<li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="My addresses" href="my-address.html"><i  class="fa fa-map-marker"></i> Mi dir</a> </div>
            </li>-->
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Add  address" href="#"> <i  class="fa fa-edit"> </i> Add  address</a> </div>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Personal information" href="{{URL::route('personal-info')}}"><i class="fa fa-cog"></i> Información personal</a> </div>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="My wishlists" href="{{URL::route('favoritos-user')}}"><i class="fa fa-heart"></i> Mis Favoritos </a> </div>
            </li>
          </ul>
          <div class="clear clearfix"> </div>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /wrapper -->

@stop