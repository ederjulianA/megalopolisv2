@extends('layouts.tshop')

@section('titulo')
Registro Megalopolis ||
@stop

@section('content-page')

@stop

@section('content')
<style type="text/css">
	.validacion-form{
		background-color: #47CB64;
		color: #fff;
		margin: 10px; auto;
		padding: 10px;
		text-align: center;
		width: 300px;
	}
	.validacion-form p{
		font-weight: bold;
		margin-bottom: 10px;

	}
</style>
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
      <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Registro</span></h1>
      
      <div class="row userInfo" >

      		 <div class="col-xs-12 col-sm-6" style="text-align:center;">
          <h2 class="block-title-2"><span>Ya estas en Megalopolis?</span></h2>
          <form role="form" method="post" action="{{ URL::route('crear-cuenta-post')}}" class="form-registro">
            <div class="form-group">
              <label>Nombre de Usuario</label>
              <input type="text" class="form-control"   placeholder="Escribe tu nombre" name="username" {{ (Input::old('username')) ? 'value="'. e(Input::old('username')).'"' : '' }}>
            </div>
             <div class="form-group">
              <label>Correo Electronico</label>
              <input type="email" class="form-control"   placeholder="ejemplo@ejemplo.com" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')).'"' : '' }}>
            </div>
            <div class="form-group">
              <label>Persona o empresa ?</label>
              <select name="tipo" class="bounceIn animation-delay4" id="tipo" title=" tipo de usuario eres" data-content="Puedes registrarte como usuaro u empresa "data-toggle="popover" {{ (Input::old('tipo')) ? 'value="'. e(Input::old('tipo')).'"' : '' }}>
									<option value="1"> Persona </option>
									<option value="2"> Empresa </option>
									
								</select>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control"  placeholder="******" required name="password">
            </div>
            <div class="form-group">
              <label>Repetir contraseña</label>
              <input type="password" class="form-control"  placeholder="******" required name="password_confirmation">
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

        			@if($errors->has())
							<div class="validacion-form" style="text-align:center;">
								<p>Errores en el formulario :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error }}</li>
									@endforeach
								</ul>
				
							</div> <!--  end form errors-->
							@endif
        	
        	
        </div>
      
       
      
      </div>
      <!--/row end--> 
      
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div> <!--/row-->


  </div>

@stop