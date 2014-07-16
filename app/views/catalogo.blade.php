@extends('layouts.mega')

@section('titulo')
Catalogo | {{$sede->nombre_publico}}
@stop

@section('content-page')
	<meta name="description" content="">
    <meta name="author" content="Megalopolis TEAM">

    <meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/catalogo/{{$sede->nombre_publico}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/{{$sede->empresa->logo}}"/>
@stop

@section('content')

    {{ HTML::style('MEGA/plugins/casilla-producto/css/style.css', array('media' => 'screen'))}}
		<section>
		<div class="container">
			<div class="row"><!--/category-tab--><!--/recommended_items-->
					
		  </div>
                
          <div class="img_empress" id="img_w">
	        insertar imagen Empresa</div>
          <div class="titular_w" id="titular_w_w">Nombre de la Empresa</div>
            
            <div class="info_direc" id="direc">
	          <p>Dierccion: xxxxxxxxxxxx</p>
		        <p>Telefono: xxxxxxxx</p>
		        <p>E-Mail: xxxxxxx</p>
	      </div>
                
	  </div>
   <div class="separator" id="separator_header_bz">
       
        <div class="band_1" id="green_1">Productos</div>
     <div class="cas_prod_prod" id="casillas_w">

     @foreach($productos as $key => $producto)
     		<div class="productos_w" id="producto_1">

				          	<div class="foto" id="foto"></div>
				         		  <ul>
					<li class="block">
						<input type="checkbox" name="item" id="item1" />
				        
				          <label for="item1"><i aria-hidden="true" class=""></i> Ropas y accesorios <span>124</span></label>
				        
						
					</li>
					<li class="block">
						<input type="checkbox" name="item" id="item2" />
				        
				          <label for="item2"><i aria-hidden="true" class=""></i> Detalles </label>
				        
						<ul class="options">
						  <li><a href="#"><i aria-hidden="true" class=""></i>escriba aqui los detalles del producto<span></span></a></li>
							
						</ul>
					</li>
					<li class="block">
						<input type="checkbox" name="item" id="item3" />   
						<label for="item3"><i aria-hidden="true" class=""></i> Precio </label>
						<ul class="options">
							<li><a href="http:///" target="_blank"><i aria-hidden="true" class=""></i>Precio</a></li>
							<li><a href="http:///" target="_blank"><i aria-hidden="true" class=""></i> $50.000</a></li>
							
							
						</ul>
					</li>
					<li class="block">
						<input type="checkbox" name="item" id="item4" />   
						<label for="item4"><i aria-hidden="true" class=""></i> Etiquetas <span>1</span></label>
						<ul class="options">
							<li><a href="http:///" target="_blank"><i aria-hidden="true" class=""></i>Etiquetas</a></li>
						</ul>
					</li>
					<li class="block">
						<input type="checkbox" name="item" id="item5" />   
						
					</li>
				</ul>


</div>
     @endforeach
          
		
         
        
          
        
        
        
        
        
        
        </div>
      
      <div class="band_1" id="green_1">Ubicación</div>
      <div class="mapa" id="mapa_api">insertar mapa</div>
      
   </div>
      
      
      
      <div class="btn-group pull-right">
							<div class="btn-group">
							  <ul class="dropdown-menu">
							    <li><a href="#">Medellin</a></li>
									<li><a href="#">Bogota</a></li>
							  </ul>
		</div>
							
							<div class="btn-group">
							  <ul class="dropdown-menu">
							    <li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
							  </ul>
		</div>
	  </div>
        </div>
      
	  </div>
	</section>

@stop