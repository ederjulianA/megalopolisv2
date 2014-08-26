@extends('layouts.shop')

@section('content')
  <div class="contenedor">
    <h1>Encuentra lo que necesitas</h1> {{HTML::image('Tshop/images/product/simbolo.png')}}

      <div class="buscador-cont">
      <form method="get" action="{{URL::route('buscador')}}">
        
        <input type="search" name="buscador" id="buscador" value="" placeholder="Qué buscas"required>
        <input  class="btn-buscar-b" type="submit" value="Buscar">
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
