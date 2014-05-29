@extends('layouts.empresa')

@section('titulo')
	Editando {{$promo->titulo}}
@stop

@section('content')
	<div id="main-container">
		
			<div class="padding-md">
					<div class="editar-promo-container">
					{{HTML::image($promo->img, $promo->titulo, array('width'=>'135px','height'=>'100px'))}}
							<form class="form-nueva-sede" method="post" action="{{ URL::route('editar-promo-post')}}" enctype="multipart/form-data" autocomplete="off">

					<div class="actualizar-sede">
                        <label for="titulo"> Estado {{Favs::estadoPromo($promo->estado)}}</label>
                      	  <select name="estado_promo">
						    		@if($promo->estado == 0)
										<option value="0" selected>No activo</option>
										<option value="1" > activo</option>
									@else
						    		<option value="1" selected> activo</option>
						    		<option value="0" >No activo</option>

						    		@endif
						    	
						    	
						    	
						    </select>
                          
                     </div>
                      <div class="actualizar-sede">
                        <label for="titulo"> Titulo</label>
                        <input type="text" name="titulo" required placeholder="Titulo de la promocion" value="{{$promo->titulo}}">
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Titulo seo</label>
                        <input type="text" name="titulo-seo" required placeholder="Titulo-seo-de-la-promocion" value="{{$promo->titulo_seo}}">
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Precio Sin descuento</label>
                        <input type="text" name="sin_descuento" required placeholder="$99999" value="{{$promo->sin_descuento}}">
                        <label>Por favor ingrese los valores sin , ni .</label>
                          
                      </div>


                      <div class="actualizar-sede">
                        <label for="titulo"> Precio con descuento</label>
                        <input type="text" name="con_descuento" required placeholder="$99999" value="{{$promo->con_descuento}}">

                        <label>Por favor ingrese los valores sin , ni .</label>
                          
                      </div>

                      <div class="actualizar-sede">
                        <label for="titulo"> Descrip. Corta</label>
                        <textarea name="desc_corta" style="width:70%;">{{$promo->descripcion_corta}}</textarea>
                          
                        
                          
                      </div>




                      <div class="actualizar-sede">
                        <label for="titulo"> Descrip. Larga</label>
                        <textarea name="desc_larga" style="width:70%;">{{$promo->descripcion_larga}}</textarea>
                          
                        
                          
                      </div>

                       <div class="actualizar-sede">
                        <label for="titulo"> Imagen Promo</label>
                       <input type="file" name="img-nueva">
                          
                        
                          
                      </div>

                  
                      <input type="hidden" name="promo_id" value="{{$promo->id}}">

                      <input type="submit" value="Actualizar" class="btn btn-success btn-sombra">
                      {{ Form::token()}}
      </form>
						
					</div>
			</div>

	</div>
		
@stop