@extends('layouts.tshop')

@section('titulo')
Megalopolis | Login
@stop
@section('content-page')

@stop

@section('content')
		<div class="container main-container headerOffset">

  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li class="active"> Inicio de Sesion </li>
      </ul>
    </div>
  </div>
  
  <div class="row">
  
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Identificate</span></h1>
      
      <div class="row userInfo" >

      		 <div class="col-xs-12 col-sm-6" style="text-align:center;">
          <h2 class="block-title-2"><span>Ya estas en Megalopolis?</span></h2>
          <form role="form" method="post" action="{{ URL::route('login-post')}} ">
            <div class="form-group">
              <label>Correo Electronico</label>
              <input type="email" class="form-control" name="email"  placeholder="Tu email" required>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control"  placeholder="******" required name="password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="checkbox">
                Recordarme  </label>
            </div>
            <div class="form-group">
              <p><a title="Recover your forgotten password" href="{{URL::route('recuperar-cuenta')}}">Olvidaste tu contraseña? </a></p>
            </div>
            <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
            {{Form::token()}}
          </form>
        </div>

        <div class="col-xs-12 col-sm-6" style="text-align:center;">
        	<h2>Validacion</h2>
        	
        </div>
      
       
      
      </div>
      <!--/row end--> 
      
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div> <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /wrapper -->
@stop