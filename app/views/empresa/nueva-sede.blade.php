@extends('layouts.empresa')

@section('titulo')
	Nueva Sede
@stop

@section('content')
	<div id="main-container">
		<div class="padding-md">
			<div class="nueva-sede">
      @if($sedes->count())
      <a href="#" class="btn btn-info btn-lg btn-sombra"data-toggle="modal" data-target="#nueva-promo"> Nueva Promo</a>
      @endif



             <!-- Modal  PARA CREAR NUEVA PROMOCION#########################################################################-->
            <div class="modal fade" id="nueva-promo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Crear Nueva Promocion</h4>
                  </div>
                  <div class="modal-body">
                    
                    <form class="form-nueva-sede" method="post" action="{{ URL::route('nueva-promo-post')}}" enctype="multipart/form-data" autocomplete="off">

                     <div class="actualizar-sede">
                        <label for="direccion">Sede</label>
                        <select name="sede_id" >
                          <option value="0">Escoge la sede</option>
                          @foreach($sedes as $sede)
                            <option value="{{$sede->id}}">{{$sede->nombre_publico}}, {{$sede->direccion}}</option>
                          @endforeach
                          
                        </select>
                      </div>
                      <div class="actualizar-sede">
                        <label for="direccion">Categoria</label>
                        <select name="categoria">
                        <option value="0">Escoge la categoria</option>
                          @foreach($categorias as $cate)
                            <option value="{{$cate->id}}"> {{$cate->nombre}}</option>
                          @endforeach
                          
                        </select>
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Titulo</label>
                        <input type="text" name="titulo" required placeholder="Titulo de la promocion">
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Titulo seo</label>
                        <input type="text" name="titulo-seo" required placeholder="Titulo-seo-de-la-promocion">
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Descrip. Corta</label>
                        <textarea name="desc_corta"></textarea>
                          
                        
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Descrip. Larga</label>
                        <textarea name="desc_larga"></textarea>
                          
                        
                          
                      </div>

                       <div class="actualizar-sede">
                        <label for="titulo"> Imagen Promo</label>
                       <input type="file" name="img">
                          
                        
                          
                      </div>

                  
                      <input type="hidden" name="empresa_id" value="{{$empresa->id}}">

                      <input type="submit" value="Agregar" class="btn btn-success btn-sombra">
                      {{ Form::token()}}
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
      <!-- FIN DEL MODAL DE LA PRIMERA SEDE-->
				<h2>Mis Sedes</h2>

				<div class="lista-sedes">
					
							@if($sedes->count())
								<table class="table table-striped">
								  <tr>
								  		<th>Nombre Publico</th>
								  		<th>Telefono</th>
								  		<th>Direccion</th>
								  		<th>Acciones</th>
								  </tr>
								
									

											@foreach($sedes as $sede)
												<tr>
													<td>{{$sede->nombre_publico}}</td>
													<td>{{$sede->telefono}}</td>
													<td>{{$sede->direccion}}</td>
													<td>
														<a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal-{{$sede->id}}"><i class="fa fa-edit"></i></a>
													</td>
												</tr>


												<!-- Modal  PARA EDITAR LAS SEDES#########################################################################-->
              <div class="modal fade" id="myModal-{{$sede->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Editar {{$sede->nombre_publico}}</h4>
                    </div>
                    <div class="modal-body">
                      
                      <form class="form-nueva-sede" method="post" action="{{ URL::route('actualizar-sede-post')}}">
                      	<div class="actualizar-sede">
                      		<label for="direccion">Direccion</label>
                      		<input type="text" name="direccion" value="{{$sede->direccion}}" required>
                      	</div>

                      	<div class="actualizar-sede">
                      		<label for="direccion">Telefono</label>
                      		<input type="text" name="telefono" value="{{$sede->telefono}}" required>
                      	</div>

                      	<div class="actualizar-sede">
                      		<label for="direccion">Nombre publico</label>
                      		<input type="text" name="nombre_publico" value="{{$sede->nombre_publico}}" required>
                      	</div>
                      	<input type="hidden" name="sede_id" value="{{$sede->id}}">

                      	<input type="submit" value="Actualizar" class="btn btn-success btn-sombra">
                      	{{ Form::token()}}
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      
                    </div>
                  </div>
                </div>
              </div><!-- FIN DEL MODAL DE LA PRIMERA SEDE-->

											@endforeach
								</table>
                     

                <div class="pormo-lista">
                  <h2>Lista de Promociones</h2>

                  <ul class="menu-sedes">
                    <li><a  href="/nueva-sede">Todas</a></li>
                    @foreach($sedes as $sede)
                      <li><a class="lista-promos" href="{{$sede->id}}">{{$sede->nombre_publico}}</a></li>
                    @endforeach
                    
                  </ul>
                  <div class="contenedor-promos-ajax">
                  @foreach($sedes as $sede)


                    @foreach($sede->promocion as $promo)

                    
                      <div class="item-promo-lista">
                        {{ HTML::image($promo->img, $promo->titulo, array('class'=> 'img-promo-lista'))}}

                        <h3>{{$promo->titulo}}</h3>
                        <p>
                          {{$promo->descripcion_corta}} 
                          
                         
                        </p>
                        <p class="sede-item">
                          <span class="label label-warning">{{$promo->sede->nombre_publico}}</span>
                        </p>
                        
                      </div>



                  @endforeach


                  @endforeach
                  </div>

             
                    
                </div>		
											
								
							@else
								<span class="alert alert-danger">Aun no tienes Ninguna Sede. Para crear Productos es necesario que crees tu primera sede :)</span>
								<a href="#" class="btn btn-warning btn-lg btn-sombra" data-toggle="modal" data-target="#myModal"> Crear Mi primera Sede</a>
							@endif
					
				</div>
											
				</div>


		</div>


		<!-- Modal  PARA CREAR LA PRIMERA SEDE DEL USUARIO#########################################################################-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Crea Tu primera Sede</h4>
                  </div>
                  <div class="modal-body">
                    <span class="alert alert-success"> Por defecto hemos Cargado los datos de registro de tu empresa.</span>
                    <form class="form-nueva-sede" method="post" action="{{ URL::route('nueva-sede-post')}}">
                      <div class="actualizar-sede">
                        <label for="direccion">Ciudad</label>
                        <select name="ciudad">
                            <option value="0">- Escoge la ciudad -</option>
                            @foreach($ciudades as $ciudad)
                              <option value="{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
                            @endforeach
                        </select>
                      </div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Direccion</label>
                    		<input type="text" name="direccion" value="{{$empresa->direccion_principal}}" required>
                    	</div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Telefono</label>
                    		<input type="text" name="telefono" value="{{$empresa->telefono}}" required>
                    	</div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Nombre publico</label>
                    		<input type="text" name="nombre_publico" value="{{$empresa->nombre_publico}}" required>
                    	</div>
                    	<input type="hidden" name="empresa_id" value="{{$empresa->id}}">

                    	<input type="submit" value="Agregar" class="btn btn-success btn-sombra">
                    	{{ Form::token()}}
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
      <!-- FIN DEL MODAL DE LA PRIMERA SEDE-->



 




	</div>			
@stop