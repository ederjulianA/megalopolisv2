<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('content-page')
    
    <title>@yield('titulo')</title>
    {{ HTML::style('Stores/css/bootstrap.css', array('media' => 'screen'))}}
    {{ HTML::style('Stores/css/font-awesome.min.css', array('media' => 'screen'))}}
    {{ HTML::style('Stores/css/jquery.bxslider.css', array('media' => 'screen'))}}
    {{ HTML::style('Stores/css/style.css', array('media' => 'screen'))}}

    <style type="text/css">
    .logoEmpresa{
      height: 150px;
      width: auto;
      max-width: 100%;
      margin: 0 auto;
    }

    .titulo-empresa{
      max-width: 100%;
      width: 95%;
      text-align: center;

    }
    .titulo-empresa h2 {
      font-size: 25px;
      font-weight: bold;
    }
    </style>
</head>
<body>
  <header>
      <div class="container">
          <div class="row">

            <!-- Logo -->
              <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                @yield('logo-empresa')
                <!--<img src="{{asset('Stores/img/logoDef.jpg')}}" class="logoEmpresa">-->
                <!--<div class="well logo">
                  <a href="index.html">
                    Mimity <span>Online Shop</span>
                  </a>
                  <div>Lorem ipsum dolor sit amet.</div>
                </div>-->
              </div>
              <!-- End Logo -->

        <!-- Search Form -->
              <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                <div class="well">
                      <form action="">
                          <div class="input-group">
                              <input type="text" class="form-control input-search" placeholder="buscar en esta tienda"/>
                              <span class="input-group-btn">
                                  <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                          </div>
                      </form>

                      <div class="titulo-empresa"><h2>@yield('titulo-mobile')</h2></div>
                  </div>
              </div>
              <!-- End Search Form -->

              <!-- Shopping Cart List -->
              <div class="col-lg-3 col-md-4 col-sm-5">
                  <div class="well">
                      <div class="btn-group btn-group-cart">
                          @if(Cart::total(false))
                            <a href="{{URL::route('storeCart')}}">TERMINAR COMPRA <strong>({{Cart::totalItems()}})</strong></a>

                          @else
                            <a href="#">No hay compras</a>

                          @endif
                          <!--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
                              <span class="pull-left">Shopping Cart: 2 item(s)</span>
                              <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                          </button>
                          <ul class="dropdown-menu cart-content" role="menu">
                                <li>
                                    <a href="detail.html">
                                        <b>Penn State College T-Shirt</b>
                                        <span>x1 $528.96</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail.html">
                                        <b>Live Nation ACDC Gray T-Shirt</b>
                                        <span>x1 $428.96</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="cart.html">Total: $957.92</a></li>
                          </ul>-->
                      </div>
                  </div>
              </div>
              <!-- End Shopping Cart List -->
          </div>
      </div>
    </header>

  <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="">@yield('titulo-mobile')</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="active">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

  <div class="container main-container">
      @yield('content')
        
  </div>

  <footer>
      <div class="container">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
              <h4>Information</h4>
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="typography.html">Policy Privacy</a></li>
                <li><a href="typography.html">Terms and Conditions</a></li>
                <li><a href="typography.html">Shipping Methods</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
              <h4>Categories</h4>
              <ul>
                <li><a href="catalogue.html">Cras justo odio</a></li>
                <li><a href="catalogue.html">Dapibus ac facilisis in</a></li>
                <li><a href="catalogue.html">Morbi leo risus</a></li>
                <li><a href="catalogue.html">Porta ac consectetur ac</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
              <h4>Customer Service</h4>
              <ul>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">YM: erwin_heldy</a></li>
                <li><a href="#">Telp: 087825376xxx</a></li>
                <li><a href="#">Email: erwin.heldy@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
              <h4>Follow Us</h4>
              <ul class="social">
                <li><a href="#">Google Plus</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">RSS Feed</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="navbar-inverse text-center copyright">
          Copyright &copy; 2014 @yield('titulo-mobile') || powered by tuMegalopolis
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
      <i class="fa fa-angle-double-up"></i>
    </a>

    {{ HTML::script('Stores/js/jquery.js')}}
    {{ HTML::script('Stores/js/bootstrap.js')}}
    {{ HTML::script('Stores/js/jquery.bxslider.min.js')}}
    {{ HTML::script('Stores/js/jquery.blImageCenter.js')}}
    {{ HTML::script('Stores/js/mimity.js')}}
   
</body>
</html>
