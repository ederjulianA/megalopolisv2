@extends('layouts.empresa')

@section('titulo')
	Nueva Sede
@stop

@section('content')
<input type="hidden" id="id_empresa_ajax" value="{{$empresa->id}}">
	<div id="main-container">
		<div class="padding-md">
			<div class="nueva-sede">
      @if($sedes->count())
      <a href="#" class="btn btn-info btn-lg btn-sombra"data-toggle="modal" data-target="#nueva-promo"> Nueva Promo</a>
      <a href="#" class="btn btn-info btn-lg btn-sombra"data-toggle="modal" data-target="#myModal"> Nueva sede</a>
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
                        <label for="titulo"> Precio Sin descuento</label>
                        <input type="text" name="sin_descuento" required placeholder="$99999">
                        <label>Por favor ingrese los valores sin , ni .</label>
                          
                      </div>


                      <div class="actualizar-sede">
                        <label for="titulo"> Precio con descuento</label>
                        <input type="text" name="con_descuento" required placeholder="$99999">

                        <label>Por favor ingrese los valores sin , ni .</label>
                          
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
														<a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal-{{$sede->id}}" onclick = 'return toCloneInitialize({{$sede->id}});'><i class="fa fa-edit"></i></a>
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
							<label for="direccion">Ciudad</label>
							<select name="ciudad" id = 'ciudad-{{$sede->id}}' onchange = 'return toCloneUpdateAddress({{$sede->id}});'>
								<option value="0">Selecciona la ciudad:</option>
								@foreach($ciudades as $ciudad)
									@if($ciudad->id == $sede->ciudad_id)
										<option value="{{$ciudad->id}}" selected>{{$ciudad->ciudad}}</option>
									@else
										<option value="{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
									@endif
								@endforeach
							</select>
						  </div>
						<div class="actualizar-sede">
                      		<label for="direccion">Dirección:</label>
                      		<input type="text" name="direccion" onkeyup = 'return toCloneUpdateAddress({{$sede->id}});' id = 'direccion-{{$sede->id}}' autocomplete = 'off' value="{{$sede->direccion}}" required>
                      	</div>

                      	<div class="actualizar-sede">
                      		<label for="direccion">Teléfono:</label>
                      		<input type="text" name="telefono" value="{{$sede->telefono}}" required>
                      	</div>

                      	<div class="actualizar-sede">
                      		<label for="direccion">Nombre público:</label>
                      		<input name = 'nombre_publico' type="text" value="{{$sede->nombre_publico}}" required disabled>
							<p>
								Este valor no se puede modificar.
							</p>
                      	</div>
						
						<div class="actualizar-sede"> 
							<label>
								Dirección para Google Maps:
							</label>
							<input id = 'gm_address-{{$sede->id}}' name = 'gm_address' onkeyup = 'return auxiliaryClone({{$sede->id}});' autocomplete = 'off' type="text" name="address" value="" />
							<p>
								En el siguiente formato: dirección, ciudad.
							</p>
							<input id = 'latitude-{{$sede->id}}' name = 'latitude' type = 'hidden'/>
							<input id = 'longitude-{{$sede->id}}' name = 'longitude' type = 'hidden'/>
							<input id = 'bussines_id-{{$sede->id}}' name = 'bussines_id' type = 'hidden' value = '{{$empresa->id}}'/>
							<div id="map_canvas-{{$sede->id}}" style="width: 100%; height: 400px;margin-top: 10px;"></div>
                    	</div>
						@if($sede->latitude != 0)
							<input type="hidden" id = 'saved-latitude-{{$sede->id}}' name="saved-latitude-{{$sede->id}}" value="{{$sede->latitude}}">
							<input type="hidden" id = 'saved-longitude-{{$sede->id}}' name="saved-longitude-{{$sede->id}}" value="{{$sede->longitude}}">
						@else
							<input type="hidden" id = 'saved-latitude-{{$sede->id}}' name="saved-latitude-{{$sede->id}}" value="0">
							<input type="hidden" id = 'saved-longitude-{{$sede->id}}' name="saved-longitude-{{$sede->id}}" value="0">
						@endif
                      	<input type="hidden" id = 'sede_id' name="sede_id" value="{{$sede->id}}">

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
                    <li><a  href="{{URL::route('nueva-sede')}}">Todas</a></li>
                    @foreach($sedes as $sede)
                      <li><a class="lista-promos" href="{{$sede->id}}">{{$sede->nombre_publico}}</a></li>
                    @endforeach
                    
                  </ul>
                  <div class="contenedor-promos-ajax">
                  @foreach($sedes as $sede)


                    @foreach($sede->promocion as $promo)

                    
                      <div class="item-promo-lista">
                        {{ HTML::image($promo->img, $promo->titulo, array('class'=> 'img-promo-lista'))}}

                        <h3>{{$promo->titulo}}</h3>{{ Favs::estadoPromo($promo->estado)}}---<a href="{{URL::route('editar-promo', array('id'=>$promo->id))}}">Editar</a>
                        <p>
                          {{$promo->descripcion_corta}} 
                          
                         
                        </p>
                        <p class="sede-item">
                          <a class="label label-warning" href="{{URL::route('promos', array('id'=>$promo->id))}}" target="_blank">{{$promo->sede->nombre_publico}}</a>
                        </p>
                        
                      </div>



                  @endforeach


                  @endforeach
                  </div>

             
                    
                </div>		
											
								
							@else
								<span class="alert alert-danger">Aun no tienes Ninguna Sede. Para crear Productos es necesario que crees tú primera sede :)</span>
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
                    <form class="form-nueva-sede" method="post" action="{{ URL::route('nueva-sede-post')}}" autocomplete="off">
                      <div class="actualizar-sede">
                        <label for="direccion">Ciudad</label>
                        <select name="ciudad" id = 'ciudad' onchange = 'return toUpdateAddress();'>
                            <option value="0">Selecciona la ciudad:</option>
                            @foreach($ciudades as $ciudad)
								@if($ciudad->id == $empresa->ciudad->id)
									<option value="{{$ciudad->id}}" selected>{{$ciudad->ciudad}}</option>
								@else
									<option value="{{$ciudad->id}}">{{$ciudad->ciudad}}</option>
								@endif
                            @endforeach
                        </select>
                      </div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Direccion</label>
                    		<input id = 'direccion' onkeyup = 'return toUpdateAddress();' type="text" name="direccion" autocomplete = 'off' value="{{$empresa->direccion_principal}}" required>
                    	</div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Telefono</label>
                    		<input type="text" name="telefono" value="{{$empresa->telefono}}" required>
                    	</div>

                    	<div class="actualizar-sede">
                    		<label for="direccion">Nombre publico</label>
                    		 <input type="text" name="nombre_publico" value="" required id="nombre_publico_sede_seo" value="{{$empresa->nombre_publico}}">
                        <input type="hidden"  id="nombre_publico_sede_seo" value="">

                        <div id="nombre-seo">
                  
                        </div>
                    	</div>
						<div class="actualizar-sede"> 
							<label>
								Dirección para Google Maps:
							</label>
						<input id = 'gm_address' name = 'gm_address' onkeyup = 'return showAddress();' autocomplete = 'off' type="text" name="address" value="" />
						<p>
							En el siguiente formato: dirección, ciudad.
						</p>
						<input id = 'latitude' name = 'latitude' type = 'hidden'/>
						<input id = 'longitude' name = 'longitude' type = 'hidden'/>
						<input id = 'bussines_id' name = 'bussines_id' type = 'hidden' value = '{{$empresa->id}}'/>
						<div id="map_canvas" style="width: 100%; height: 400px;margin-top: 10px;"></div>
						
                    	</div>
                    	<input type="hidden" name="empresa_id" value="{{$empresa->id}}">

                    	<input type="submit" value="Agregar" class="btn btn-success btn-sombra">
                    	{{ Form::token()}}
                    </form>
                  </div>
                  <div class="modal-footer">
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
      <!-- FIN DEL MODAL DE LA PRIMERA SEDE-->
	</div>			
@stop