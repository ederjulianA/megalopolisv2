@extends('layouts.tshop')

@section('titulo')
Megalopolis | Recuperar Cuenta

@stop

@section('content-page')

@stop

@section('content')
		<div class="container main-container headerOffset">
    @if(Session::has('message-alert'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="{{URL::route('index')}}"> Home </a> </li>
        <li > <a href="{{URL::route('login')}}"> Login </a> </li>
        <li class="active"> Olvido Contraseña </li>
      </ul>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"> <span> <i class="fa fa-unlock-alt"> </i> Olvidaste tu contraseña? </span> </h1>
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <p> Para resetear tu contraseña, por favor ingresa tu email de registro y te enviaremos tu nueva contraseña. </p>
          <form role="form" action="{{URL::route('recuperar-cuenta-post')}}" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1"> Correo electronico </label>
              <input  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"  name="email" required>
            </div>
            <button type="submit" class="btn   btn-primary"> <i class="fa fa-unlock"> </i> Recuperar contraseña </button>
            {{Form::token()}}
          </form>
          <div class="clear clearfix">
            <ul class="pager">
              <li class="previous pull-right"> <a href="{{URL::route('login')}}"> &larr; Volver al login </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"> </div>
</div>

@stop


<!--@extends('layouts.users')

@section('titulo')
Recuperar Contraseña
@stop

@section('content')
	<div class="wrapper-olvido-pass">
		<h2>Recuperar Contraseña</h2>

		<div class="info-recuperar">
			Al parecer has llegado aqui porque olvidaste tu contraseña de inicio de sesion, porfavor ingresa
			tu email de registro para enviarte una Contraseña nueva.
			
		</div>
		<div class="form-recuperar">
			<form action="{{URL::route('recuperar-cuenta-post')}}" method="post">
				<label for="email">Email: </label>
				<input type="email" name="email" required placeholder="ejemplo@ejemplo.com">

				<input type="submit" value="Envia mi contraseña nueva" class="btn btn-info btn-sombra">

				{{ Form::token()}}
				
			</form>
			
		</div>
		
	</div>
@stop-->