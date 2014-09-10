@extends('layouts.users')
@section('titulo')
Mis suscripciones
@stop

@section('content')
	<div id="landing-content">
						<hr>
				<div class="text-center">
					<h2>Mis Subscripciones</h2>


				</div>

				<div class="contenedor-empresas">


				@foreach($subs as $sub)
							<div class="search-container suscripcion">
									<div class="panel panel-default contenedor-subs">
										<div class="panel-body">	
											<div class="search-header">
												<a href="#" class="h4 inline-block">{{$sub->nombre_publico}}</a>
													@if($sub->pro_id != null)
						<a href="{{URL::route('productos',array('id'=>$sub->pro_id))}}" class="label label-warning"><i class=" fa fa-bell"></i> Nuevo: {{$sub->pro_name}}</a>	

													@else
														<span class="label label-success">No hay notificaciones</span>

													@endif

											</div>
											
											<div class="seperator"></div>
											
											<p class="m-top-sm">
												<a href="#" class="pull-left   m-right-sm"> 
													{{HTML::image($sub->logo, $sub->nombre_publico, array('width'=>'100px', 'height'=>'100px'))}} 
												</a> @if($sub->desc_larga == null) {{$sub->desc_corta}}  @else {{$sub->desc_larga}} @endif
												</p>
																					
											
										</div>

										<div class="">
												<a href="{{URL::route('empresa-info', array('nombre_publico'=>$sub->nombre_publico))}}" >{{$sub->nombre_publico}}</a> |
												<a href="#" data-toggle="modal" data-target="#cancelarSub-{{$sub->id}}" class="label label-danger">Cancelar Suscripcion</a> |
												
											</div>
									</div><!-- /panel -->
								</div><!-- /search-container -->


									<!-- Modal para cancelar la subscripcion -->
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
							
					
				</div>

		
	</div>




@stop


