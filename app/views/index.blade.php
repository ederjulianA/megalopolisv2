@extends('layouts.tshop')
@section('titulo')
Megalopolis |Crea tu tienda en línea en tan solo minutos y aumenta las ganancias de tu negocio con tu catálogo online
@stop

@section('content-page')
    <meta name="description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online">
    <meta name="author" content="Megalopolis TEAM">

<meta property="og:type" content="website"/>
<meta property="og:title" content="Megalopolis |Crea tu tienda en línea en tan solo minutos y aumenta las ganancias de tu negocio con tu catálogo online"/>
<meta property="og:site_name" content="tuMegalopolis"/>
<meta property="og:description" content="Megalópolis es un espacio donde empresas y negocios particulares pueden publicar y ofrecer sus productos por medio de un catálogo que les permite llegar a mercados fuera de su entorno y escalar su negocio online"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/Tshop/face.jpg"/>

@stop

@section('content')
  <div class="contenedor">
    <h1 class="uppercase xlarge">Encuentra lo que necesitas</h1> {{HTML::image('Tshop/images/product/simbolo.png')}}

    <div class="buscador-cont">
      <form method="get" action="{{URL::route('buscador')}}">
        
        <input type="search" name="buscador" id="buscador" value="" placeholder="Qué buscas"required>
        <button  class="btn btn-primary btn-small" type="submit" value=""><i class="glyphicon glyphicon-search"></i> Buscar</button>
       </form> 
        
      </div>


      <div class="pasos-cont">
        <h2>Siguiendo estos 3 simples pasos!</h2>
          <div class="paso1">
            
            <div class="img-paso1"></div>
            <h2><span class="span-numero">1</span>Contacta al vendedor</h2>
            <p class="descripcion-paso">
              Busca tu producto y contacta al vendedor del articulo mediante sus datos de contacto o a través del sistema de preguntas
            </p>
          </div>

          <div class="paso2">
            
             <div class="img-paso2"></div>
             <h2><span class="span-numero">2</span>Realiza tu pedido</h2>
             <p class="descripcion-paso">
               Agrega el producto a tus compras y procede a acordar el pago con el vendedor
             </p>
              
            
            
          </div>

          <div class="paso3">
            
            <div class="img-paso3"></div>
            <h2><span class="span-numero">3</span> Disfruta tu pedido</h2>
            <p class="descripcion-paso">
               Recibe tu pedido según lo acordado con el vendedor y disfruta tu compra.
              
            </p>

              
                        
          </div>

        
      </div>
    
  </div>
@stop
