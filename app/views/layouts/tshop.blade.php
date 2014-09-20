 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->

@yield('content-page')

<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<title>@yield('titulo')</title>
<!-- Bootstrap core CSS -->
{{ HTML::style('Tshop/assets/bootstrap/css/bootstrap.css', array('media' => 'screen'))}}
<!-- Custom styles for this template -->
{{ HTML::style('Tshop/assets/css/style.css', array('media' => 'screen'))}}

<!-- styles needed by smoothproducts.js for product zoom  -->

{{ HTML::style('Tshop/assets/css/smoothproducts.css', array('media' => 'screen'))}}

<!-- css3 styles needed by minimalect --> -->
{{ HTML::style('Tshop/assets/css/jquery.minimalect.min.css', array('media' => 'screen'))}}

<!-- styles needed by checkRadio -->
{{ HTML::style('Tshop/assets/css/ion.checkRadio.css', array('media' => 'screen'))}}
{{ HTML::style('Tshop/assets/css/ion.checkRadio.cloudy.css', array('media' => 'screen'))}}

<!-- css3 animation effect for this template -->
{{ HTML::style('Tshop/assets/css/animate.min.css', array('media' => 'screen'))}}

<!-- styles needed by footable  -->

{{ HTML::style('Tshop/assets/css/footable-0.1.css', array('media' => 'screen'))}}
{{ HTML::style('Tshop/assets/css/footable.sortable-0.1.css', array('media' => 'screen'))}}



<!-- styles needed by carousel slider -->
{{ HTML::style('Tshop/assets/css/owl.carousel.css', array('media' => 'screen'))}}
{{ HTML::style('Tshop/assets/css/owl.theme.css', array('media' => 'screen'))}}

<!-- styles needed by mCustomScrollbar -->
{{ HTML::style('Tshop/assets/css/jquery.mCustomScrollbar.css', array('media' => 'screen'))}}

{{HTML::style('shop/css/shop.css')}}

{{HTML::style('css/preguntas.css')}}
<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
    type="text/javascript"></script>

<script type="text/javascript">
    function initialize(latitude, longitude) {
    
      if (GBrowserIsCompatible()) {
      map = new GMap2(document.getElementById("map_canvas"));
      map.setCenter(new GLatLng(latitude, longitude), 15);
      var marker = new GMarker(new GLatLng(latitude, longitude), {draggable: true});
      map.addOverlay(marker);
      map.setUIToDefault();
      geocoder = new GClientGeocoder();
      }
      
      return false;
    }
  </script>

  <style type="text/css">
      .ajax-validation{
        background-color: #F04F4F;
        color: #fff;
        font-weight: bold;
        text-align: center;
        width: 100%;


      }
      .mensajes-flash{
        background-color: #F04F4F;
        border-radius: 0 0 10px 10px;
        font-weight: bold;
        color: #fff;
        position: absolute;
        left: 40%;
        padding: 10px;
        top: 20%;
        width: 380px;
        z-index: 9999;

      }
      .btnCerrar{

        font-weight: bold;
        position: absolute;
        text-decoration: none;
        text-shadow: .5px .5px 1px rgba(0,0,0, .3);
        color: #5A5A5A;
        right: 7px;
        bottom: 0;
      }

      #buscador{
        padding: 5px;
        max-width: 40%;
        width: 40%;
        
        margin-top: 2px;
      }
      .form-search{
        
      }
  </style>


</head>

<body>


<!-- Modal Login start -->
@if (Auth::check())
@else
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog" >
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > Login  Megalopolis </h3>
      </div>
      <div class="modal-body">
        <form  method="post" action="{{ URL::route('login-post')}} ">
        <div class="form-group login-username">
          <div >
            <input type="hidden" name="url" id="url" value="{{URL::current()}}">
            <input name="email" id="login-user" class="form-control input"  size="20" placeholder="Tu email" type="email">
          </div>
        </div>
        <div class="form-group login-password">
          <div >
            <input name="password" id="login-password" class="form-control input"  size="20" placeholder="Tu contraseña" type="password">
          </div>
        </div>
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme"  value="forever" checked="checked" type="checkbox">
                Recordarme  </label>
            </div>
          </div>
        </div>
        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="Iniciar Sesion" type="submit">
          </div>
        </div>
        <!--userForm--> 
          {{ Form::token()}}
        </form>
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> ¿No has estado aquí antes? <a data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"> Registarte. </a> <br>
          <a href="{{URL::route('recuperar-cuenta')}}" > ¿Olvidaste tu contraseña? </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.Modal Login --> 

@endif 


<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > REGISTRO </h3>
      </div>
      <div class="modal-body">
        <!--<div class="control-group"> <a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP CON FACEBOOK </a> </div>-->
        <h5 style="padding:10px 0 10px 0;" class="text-center"> O </h5>
        <form method="post" action="{{ URL::route('crear-cuenta-post')}}" id="form_registro">
        <div class="form-group reg-username">
          <div >
            <input name="username"  class="form-control input"  size="20" placeholder="Tu nombre de usuario" type="text" required>
          </div>
        </div>
        <div class="form-group reg-email">
          <div >
            <input name="email"  class="form-control input"  size="20" placeholder="Tu Email" type="email" required>
          </div>
        </div>
        <div class=" ">
          <div >
            <select name="tipo" class="" id="tipo" title=" tipo de usuario eres"  {{ (Input::old('tipo')) ? 'value="'. e(Input::old('tipo')).'"' : '' }}>
                  <option value="1"> Usuario </option>
                  <option value="2"> Empresa </option>
                  
                </select>
          </div>
        </div>
        <div class="form-group reg-password">
          <div >
            <input name="password"  class="form-control input"  size="20" placeholder="Contraseña" type="password">
          </div>
        </div>
        <div class="form-group reg-password">
          <div >
            <input name="password_confirmation"  class="form-control input"  size="20" placeholder="Repite ontraseña" type="password">
          </div>
          <div class="ajax-validation" id="ajax-validation">
            
          </div>
        </div>
        
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                Recuérdame </label>
            </div>
          </div>
        </div>

        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTRAME" id="btn-registro" type="submit">
          </div>
        </div>
        <!--userForm--> 
        {{ Form::token()}}
        </form>
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> ¿Ya eres miembro? <a data-toggle="modal"  data-dismiss="modal" href="#ModalLogin"> Inicia Sesion </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.ModalSignup End --> 

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
        
        <div class="pull-left ">
            <ul class="userMenu ">
              <li> <a href="#"> <span class="hidden-xs">Contáctanos</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> 
              <a  href="callto:+6481166"> 
              <span> <i class="glyphicon glyphicon-phone-alt "></i></span> 
              <span class="hidden-xs" style="margin-left:5px"> 6481166 - 6483698 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
              
                @if (Auth::check())
                      @if(Auth::user()->tipo == 2)
                        <li> <a href="{{ URL::route('empresaAdmin')}}"><span class="hidden-xs"> Mi Empresa</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>
                        @if(Auth::user()->empresa->estado == 0)
                          <li>
                            <a href="{{URL::route('pagarSuscripcion')}}">Pagar suscripción</a>
                           

                          </li>
                        @else

                        @endif
                      @else
                        <li> <a href="{{URL::route('perfil')}}">{{Favs::totalNoti(Auth::user()->id)}}  <span class="hidden-xs"> Mi cuenta</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>

                      @endif
                  
                  <li> <a href="{{URL::route('cerrar-sesion')}}"><span class="hidden-xs"> Cerrar Sesion</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>

               
                  
                @else 
                    <li> <a href="#"  data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Iniciar Sesion</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
                    <li class="hidden-xs"> <a href="#"  data-toggle="modal" data-target="#ModalSignup"> Registrarme </a> </li>
                @endif
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.navbar-top-->
  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
     <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00) </span> </button>-->
      <a class="logoMega " href="{{URL::route('index')}}"> {{HTML::image('Tshop/images/logo.png', 'megalopolis Company', array('height'=>'50px'))}} </a> 
      
      <!-- this part for mobile -->
      
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <!--<div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table  >
            <tbody>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="#"> {{HTML::image('Tshop/images/product/3.jpg', 'img')}} </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> TSHOP T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td  style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/2.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> TSHOP T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
            
            </tbody>
          </table>
        </div>-->
        <!--/.miniCartTable-->
        
        <!--<div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right subtotal"> Subtotal: $210 </h3>
          <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>-->
        <!--/.miniCartFooter--> 
        
     <!-- </div>-->
      <!--/.cartMenu--> 
   <!-- </div>-->
    <!--/.navbar-cart-->
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li class="active"> <a href="{{URL::route('index')}}"> Home </a> </li>
        <?php $categorias = Categoria::all(); $nivel =2;?>

        @include('menucat', array('categorias'=>$categorias,'nivel'=>$nivel))




        <!--##################################################################MENU DESPLEGABLE INICIAL-->
        <!--<li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> La Megalopolis <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content ">
              
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li> <a class="newProductMenuBlock" href="{{URL::route('categorias-producto', array('id'=>1))}}">{{HTML::image('Tshop/images/site/sport-wear.jpg', 'Ropa y Accesorios', array('class'=>'img-responsive'))}}  <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> ROPA Y ACCESORIOS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="#"> {{HTML::image('Tshop/images/site/libros1.jpg', 'LIBROS', array('class'=>'img-responsive'))}}<span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> LIBROS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="#">{{HTML::image('Tshop/images/site/interiores.jpg', 'Interiores', array('class'=>'img-responsive'))}}  <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> INTERIORES </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="{{URL::route('categorias-producto', array('id'=>4))}}">{{HTML::image('Tshop/images/site/tech2.jpg', 'Tecnología', array('class'=>'img-responsive'))}}  <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> TECNOLOGÍA </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li>-->

        <li class=""> <a href="{{URL::route('tiendas')}}">Ver Tiendas </a> </li>
        <li><a href="#">Blog</a></li>
        </ul>
        <div class="busc">
          <form method="get" action="{{URL::route('buscador')}}" class="form-search">
      <input type="text"  data-searchurl="search?=" name="buscador" id="buscador" required placeholder="Qué buscas..." class="">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </form>
          
        </div>

        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <!--<li class="dropdown megamenu-80width "> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> TIENDA <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> -->
              
              <!-- megamenu-content -->
              
             <!-- <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                <li>
                  <p> <strong> Women Collection </strong> </p>
                </li>
                <li> <a href="#"> Kameez </a> </li>
                <li> <a href="#"> Tops </a> </li>
                <li> <a href="#"> Shoes </a> </li>
                <li> <a href="#"> T shirt </a> </li>
                <li> <a href="#"> TSHOP </a> </li>
                <li> <a href="#"> Party  Dress </a> </li>
                <li> <a href="#"> Women Fragrances </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                <li>
                  <p> <strong> Men Collection </strong> </p>
                </li>
                <li> <a href="#"> Panjabi </a> </li>
                <li> <a href="#"> Male Fragrances </a> </li>
                <li> <a href="#"> Scarf </a> </li>
                <li> <a href="#"> Sandal </a> </li>
                <li> <a href="#"> Underwear </a> </li>
                <li> <a href="#"> Winter Collection </a> </li>
                <li> <a href="#"> Men Accessories </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
                <li>
                  <p> <strong> Top Brands </strong> </p>
                </li>
                <li> <a href="#"> Diesel </a> </li>
                <li> <a href="#"> Farah </a> </li>
                <li> <a href="#"> G-Star RAW </a> </li>
                <li> <a href="#"> Lyle & Scott </a> </li>
                <li> <a href="#"> Pretty Green </a> </li>
                <li> <a href="#"> TSHOP </a> </li>
                <li> <a href="#"> TANJIM </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem "> <a href="#">{{HTML::image('Tshop/images/site/g4.jpg', 'img', array('class'=>'img-responsive'))}}  </a> <a class="text-center productInfo alpha90" href="#"> Eodem modo typi <br>
                  <span> $60 </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem relative"> <a href="product-details.html">{{HTML::image('Tshop/images/site/g5.jpg','img', array('class'=>'img-responsive'))}}  </a> <a class="text-center productInfo alpha90" href="#"> Eodem modo typi <br>
                  <span> $60 </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li> 
      </ul>--> 
      
      <!--- this part will be hidden for mobile version -->
      <div class="nav navbar-nav navbar-right hidden-xs">
       
        <!--/.cartMenu-->
     
        
      </div>
      <!--/.navbar-nav hidden-xs--> 
    </div>
    <!--/.nav-collapse --> 
    
  </div>
  <!--/.container -->
  
  <!--<div class="search-full text-left"> <a class="pull-left search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-left">
    <form method="get" action="{{URL::route('buscador')}}">
      <input type="search"  data-searchurl="search?=" name="buscador" id="buscador" required placeholder="Qué buscas..." class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
     </form> 
    </div>
  </div>-->
  <!--/.search-full--> 
  
</div>
@if(Session::has('message-alert'))

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        @endif
<!-- /.Fixed navbar  -->
@yield('content')
<!--/.parallax-section-->

<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3> Soporte </h3>
          <ul>
            <li class="supportLi">
              <p> Contáctanos </p>
              <h4> <a class="inline" href="callto:+6481166"> <strong> <i class="fa fa-phone"> </i> 6481166 </strong> </a> </h4>
              <h4> <a class="inline" href="mailto:help@tshopweb.com"> <i class="fa fa-envelope-o"> </i> megalopolis.web@gmail.com </a> </h4>

            </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Compras </h3>
          <ul>
            <li> <a href="{{URL::route('favoritos-user')}}"> Favoritos </a> </li>
            
          </ul> 
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Informacion </h3>
          <ul>

            <li> <a href="{{URL::route('aboutUs')}}"> Sobre Nosotros </a> </li>
            
            <li> <a href="{{URL::route('terminos')}}"> Términos &amp; Condiciones</a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Mi cuenta </h3>
          <ul>  
          <li> <a href="{{URL::route('index')}}"> Home </a> </li>
            <li> <a href="{{URL::route('login')}}"> Login </a> </li>
            <li> <a href="{{URL::route('perfil')}}"> Perfil </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Síguenos </h3>
          <ul class="social">
            <li> <a href="https://www.facebook.com/pages/TuMegalopolis/726858077327682?ref_type=bookmark"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="https://twitter.com/tumegalopolis"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="http://www.pinterest.com/tumegalopolis/"> <i class="fa fa-pinterest"> &nbsp; </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; Megalópolis 2014. Todos los derechos reservados. </p>
      <!--<div class="pull-right paymentMethodImg"> {{HTML::image('Tshop/images/site/payment/master_card.png', 'master_card', array('class'=>'pull-right','height'=>'30'))}}
      {{HTML::image('Tshop/images/site/payment/paypal.png', 'paypal', array('class'=>'pull-right','height'=>'30'))}} <!-- <img height="30" class="pull-right" src="Tshop/images/site/payment/american_express_card.png" alt="img" > <img  height="30" class="pull-right" src="Tshop/images/site/payment/discover_network_card.png" alt="img" > <img  height="30" class="pull-right" src="Tshop/images/site/payment/google_wallet.png" alt="img" >--> </div>
    </div>
  </div>
  <!--/.footer-bottom--> 
</footer>

<!-- Le javascript
================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
{{ HTML::script('Tshop/assets/js/jquery/1.8.3/jquery.js')}}  
{{ HTML::script('Tshop/assets/bootstrap/js/bootstrap.min.js')}}


<!-- include jqueryCycle plugin -->  

<!-- include  parallax plugin -->  
{{ HTML::script('Tshop/assets/js/jquery.parallax-1.1.js')}}

{{ HTML::script('/js/info-shipping.js')}}


@yield('scriptHome')


<!-- optionally include helper plugins --> 
{{ HTML::script('Tshop/assets/js/helper-plugins/jquery.mousewheel.min.js')}}

{{ HTML::script('Tshop/assets/js/jquery.cycle2.min.js')}}


<!-- include easing plugin --> 
{{ HTML::script('Tshop/assets/js/jquery.easing.1.3.js')}}


<!-- include mCustomScrollbar plugin //Custom Scrollbar  --> 
{{ HTML::script('Tshop/assets/js/jquery.mCustomScrollbar.js')}}
<!-- include checkRadio plugin //Custom check & Radio  --> 
{{ HTML::script('Tshop/assets/js/ion-checkRadio/ion.checkRadio.min.js')}}
<!-- include grid.js // for equal Div height  --> 
{{ HTML::script('Tshop/assets/js/grids.js')}}
<!-- include carousel slider plugin  --> 
{{ HTML::script('Tshop/assets/js/owl.carousel.min.js')}}
<!-- include smoothproducts // product zoom plugin  --> 
{{ HTML::script('Tshop/assets/js/smoothproducts.min.js')}}

<!-- jQuery minimalect // custom select   --> 
{{ HTML::script('Tshop/assets/js/jquery.minimalect.min.js')}}
<!-- include touchspin.js // touch friendly input spinner component   --> 
{{ HTML::script('Tshop/assets/js/bootstrap.touchspin.js')}}
<!-- include custom script for only homepage  --> 
<!-- include custom script for site  --> 
{{ HTML::script('Tshop/assets/js/script.js')}}
{{ HTML::script('Tshop/assets/js/pace.min.js')}}

{{ HTML::script('js/promos.js')}}

{{ HTML::script('js/barrios.js')}}

<script>

</script>
</body>
</html>
