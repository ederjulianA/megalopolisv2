@extends('layouts.tshop')

@section('titulo')
	Mis suscripciones
@stop



@section('content')
<style type="text/css">
	.contenedor-suscripciones{
		max-width: 100%;
		width: 100%;
	}
	.contenedor-suscripciones h2{
		font-weight: bold;
		font-size: 30px;
		letter-spacing: 1px;
		text-align: center;
	}
	.posts{padding:.5em;}
.posts .post{background:#fff;border-radius:0 0 .5em .5em;box-shadow:2px 2px 10px rgba(0,0,0,0.5);color:#7a7a7a;margin-bottom:.5em;}
.posts .post .acciones{border-top:3px solid #22bce0;padding:.5em;overflow:hidden;}
.posts .post .acciones .datos{float:right;}
.posts .post .acciones .datos .comentarios{background:#444;border-radius:3px;color:#fff;margin:0 1em 0 0;padding:2px 5px;text-decoration:none}
.posts .post .acciones .datos .estrellita{text-decoration:none;}
.posts .post .acciones .datos .estrellita:after{color:#fcb92d;content:"\e601";font-family:"iconitos";font-size:1.1em}
.posts .post .acciones .votos{float:left;}
.posts .post .acciones .votos .down,.posts .post .acciones .votos .up{text-decoration:none;}
.posts .post .acciones .votos .down:before,.posts .post .acciones .votos .up:before{font-family:"iconitos";font-size:1.5em;vertical-align:middle}
.posts .post .acciones .votos .down{color:#f00;}
.posts .post .acciones .votos .down:before{content:"\e602"}
.posts .post .acciones .votos .up{color:#008000;}
.posts .post .acciones .votos .up:before{content:"\e603"}
.posts .post .descripcion .detalles{height:160px;margin-left:130px;}
.posts .post .descripcion .detalles .autor{margin:.5em 0 2em 0}
.posts .post .descripcion .detalles .fecha{float:right;margin:0 1em 0 0}
.posts .post .descripcion .detalles .tag{background:#22bce0;border-radius:.5em;color:#fff;padding:.2em .5em;text-decoration:none}
.posts .post .descripcion .detalles .titulo{color:#444;font-size:1.1em;font-style:italic;margin:0;padding:.5em .5em 0 0}
.posts .post .descripcion .imagen{float:left;}
.posts .post .descripcion .imagen img{height:160px;vertical-align:top;width:120px}
@media screen and (min-width: 768px){header .titular .publicar{font-size:1.1em;padding-left:3em;position:relative;}
header .titular .publicar:before{left:0;font-size:2.5em;position:absolute;top:-10px}
.posts .post{display:inline-block !important;width:48%;vertical-align:top;}
.posts .post:nth-child(odd){margin-right:2%}}
</style>
		<div class="container main-container headerOffset">

		  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li><a href="{{URL::route('perfil')}}">Mi Cuenta</a> </li>
        <li class="active"> Mis Suscripciones </li>
      </ul>
    </div>
  </div>
  
  <div class="row innerPage">
    <div class="contenedor-suscripciones">
    	@if(Session::has('message-alert'))

            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
    	<h2>Mis Suscripciones <strong>({{$num_subs}})</strong></h2>

    	<section class="posts">
    		@if($num_subs > 0)
		    	@foreach($subs as $sub)
					<article class="post">
						<div class="descripcion">
							<figure class="imagen">
								<img src="{{asset($sub->logo)}}" />
							</figure>
							<div class="detalles">
								<h2 class="titulo">
									{{$sub->razon_social}}
								</h2>
								<p class="autor">
									
									@if($sub->desc_larga == null) {{$sub->desc_corta}}  @else {{$sub->desc_larga}} @endif
									
								</p>
								<!--<a class="tag" href="#">CSS3</a>-->
								<p class="fecha"> <strong>{{$sub->created_at}}</strong> </p>
							</div>
						</div>
						<div class="acciones">
							<div class="votos">
								<a class="up" href="#" data-toggle="modal" data-target="#cancelarSub-{{$sub->id}}">Cancelar suscripción</a>
								
								
							</div>
							<div class="datos">
								<a class="comentarios" href="{{URL::route('empresa-info', array('nombre_publico'=>$sub->nombre_publico))}}">
									Ir a la tienda
								</a>
								
							</div>
						</div>
					</article>







				@endforeach
			@else
				<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  <strong>No hay suscripciones!</strong> Suscribete a las tiendas de Megalópolis para estar al tanto de los nuevos articulos.<br>
				  Visita algunas tiendas y suscribete :) <a href="{{URL::route('tiendas')}}" class="btn btn-success">Ver tiendas</a> 
				</div>

			@endif
		</section>
    	
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->

@if($num_subs > 0)
@foreach($subs as $sub)										<!-- Modal para cancelar la subscripcion -->
<div class="modal fade" id="cancelarSub-{{$sub->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cancelar Suscripcion a {{$sub->nombre_publico}}</h4>
      </div>
      <div class="modal-body">
        	{{HTML::image($sub->logo, $sub->nombre_publico, array('width'=>'100px', 'height'=>'100px'))}} 
        	<form method="post" action="{{URL::route('cancelar-suscripcion-user')}}">
        		<input type="hidden" name="empresa_id" value="{{$sub->id}}">
        		<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        		<input type="submit" value="Cancelar Mi suscripcion" class="btn btn-info btn-lg btn-sombra">
        		{{ Form::token()}}
        	</form>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL CANCELAR SUSCRIPCION-->
@endforeach
@endif

@stop