@extends('layouts.tshop')
@section('titulo')
COMPRA EXITOSA
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
			  <div class="container main-container headerOffset">
    <div class="row innerPage">
      <div class="col-lg-12 col-md-12 col-sm-12">
        
        <div class="row userInfo">
          
          <div class="col-xs-12 col-sm-12">
            
            <h1 class="title-big text-center section-title-style2">
              <span> SOLICITUD ENVIADA </span>
            </h1>
            
            <p class="lead text-center">
             El vendedor se pondrá en contacto con Tigo para finalizar el proceso de compra. Si tienes algún problema no dudes en contactarnos, recuerda que estamos atentos a cualquier duda <a target="_blank" class="btn btn-info" href="https://twitter.com/tumegalopolis">Megalopolis</a> <br><br><h3 class="block-title-5">
                  <a class="btn btn-success btn-lg" href="{{URL::route('listOrders')}}"> Ver mis ordenes</a> 
                </h3>
            </p>
            
            <hr>
            
            <div class="row" style="text-align:center;">
            
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24">
                
                <h3 class="block-title-5">
                  Informacion de la empresa 
                </h3>
                
                <p>
                 {{$producto->razon_social}}
                  
                  <br>
                  <strong>
                    Telefono
                  </strong>
                  : 	{{$producto->telefono}}
                  <br>
                  
                </p>

                
              </div>
              
              
              
              <div style="clear:both"> </div>
              <hr>
              <div style="clear:both"> </div>
              
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3 class="block-title-5">
                  
                </h3>
                
              
                
              </div>
              
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3 class="block-title-5">
                   
                </h3>
                
              
                
              </div>
              
               <div style="clear:both"> </div>
              <hr>
               <div style="clear:both"> </div>
               
            
              
            </div><!--/.row-->
   		</div>
          
          
          
          
          
          
        </div> <!--/.row  ||  -->
        
      </div>
    </div>  <!--/row || innerPage end-->
    <div style="clear:both"> </div>
  </div><!-- ./main-container -->
  <div class="gap"></div>

@stop