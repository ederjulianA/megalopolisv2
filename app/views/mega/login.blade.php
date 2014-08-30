@extends('layouts.tshop')

@section('titulo')
Megalopolis | Login
@stop
@section('content-page')
 <meta name="description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="Megalopolis | Login"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/login"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/Tshop/face.jpg"/>

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
    @if(Session::has('message-alert'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
  
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