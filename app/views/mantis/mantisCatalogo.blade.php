<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Distribuidor Megalopolis </title>
<!-- Bootstrap core CSS -->
{{HTML::style('Tshop/assets/bootstrap/css/bootstrap.css')}}


<!-- Custom styles for this template -->
{{HTML::style('Tshop/assets/css/style.css')}}


<!-- css3 animation effect for this template -->
{{HTML::style('Tshop/assets/css/animate.min.css')}}


<!-- styles needed by mCustomScrollbar -->
{{HTML::style('Tshop/assets/css/jquery.mCustomScrollbar.css')}}


	
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
    .titulo-contenedor{
    	text-align: center;
    }
    .msg-ajax-cart{
      position: fixed;
      width: 40%;
      top: 0;
      left: 30%;
      z-index: 9999;
      text-align: center;
    }
    .title{
    	text-align: center;
    	font-size: 30px;
    	font-weight: bold;
    	padding: 10px;
    }
    .contenedor-msg-ajax{
      width: 100%;
      background-color: #EA7D00;
      padding: 10px;
      font-weight: bold;
      font-size: 20px;
      color: #fff;
    }
    </style>
<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->  

<!-- include pace script for automatic web page progress bar  -->


 <script>
    paceOptions = {
      elements: true
    };
</script>
{{HTML::script('Tshop/assets/js/pace.min.js')}}

  </head>
  
  <body>
  
    
<!-- Modal Login start -->
<div class="modal signUpContent fade"id="ModalLogin" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > Login  to Distribuidor </h3>
      </div>
      <div class="modal-body">
        <div class="form-group login-username">
          <div >
            <input name="log" id="login-user" class="form-control input"  size="20" placeholder="Enter Username" type="text">
          </div>
        </div>
        <div class="form-group login-password">
          <div >
            <input name="Password" id="login-password" class="form-control input"  size="20" placeholder="Password" type="password">
          </div>
        </div>
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme"  value="forever" checked="checked" type="checkbox">
                Remember Me </label>
            </div>
          </div>
        </div>
        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
          </div>
        </div>
        <!--userForm--> 
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> Not here before? <a data-toggle="modal"  data-dismiss="modal" href="#ModalSignup"> Sign Up. </a> <br>
          <a href="forgot-password.html" > Lost your password? </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.Modal Login --> 

<!-- Modal Signup start -->
<div class="modal signUpContent fade"id="ModalSignup" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > REGISTER </h3>
      </div>
      <div class="modal-body">
        <div class="control-group"> <a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH FACEBOOK </a> </div>
        <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>
        <div class="form-group reg-username">
          <div >
            <input name="login"  class="form-control input"  size="20" placeholder="Enter Username" type="text">
          </div>
        </div>
        <div class="form-group reg-email">
          <div >
            <input name="reg"  class="form-control input"  size="20" placeholder="Enter Email" type="text">
          </div>
        </div>
        <div class="form-group reg-password">
          <div >
            <input name="password"  class="form-control input"  size="20" placeholder="Password" type="password">
          </div>
        </div>
        <div class="form-group">
          <div >
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                Remember Me </label>
            </div>
          </div>
        </div>
        <div >
          <div >
            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
          </div>
        </div>
        <!--userForm--> 
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> Already member? <a data-toggle="modal"  data-dismiss="modal" href="#ModalLogin"> Sign in </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
          <div class="pull-left ">
            <ul class="userMenu ">
              <li> <a href="#"> <span class="hidden-xs">HELP</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> <a  href="callto:+8801680531352"> <span> <i class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs" style="margin-left:5px"> 88 01680 53 1352 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
              <li> <a href="account-1.html"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>
              <li> <a href="#"  data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
              <li class="hidden-xs"> <a href="#"  data-toggle="modal" data-target="#ModalSignup"> Create Account </a> </li>
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($<span class="subtotal">{{number_format(Cart::total(), 0, '', '.')}}</span>) </span> </button>
      <a class="navbar-brand " href="#"> <img src="{{asset('img/mantis/aje/logo.jpg')}}" alt="TSHOP" height="80px" width="auto"> </a> 
      
      <!-- this part for mobile -->
      <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
        <!-- /input-group --> 
        
      </div>
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table  >
            <tbody class="bCart">
            <!-- CARRITO VERSION MOBILE............................ -->
		              @if($products)
		              	@foreach($products as $pro)
		                	<tr class="miniCartProduct">
			                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="#"> <img src="{{asset($pro->image)}}" alt="img"> </a> </div></td>
			                    <td style="width:40%"><div class="miniCartDescription">
		                        <h4> <a href="product-details.html"> {{$pro->name}} </a> </h4>
		                        
		                        <div class="price"> <span> ${{number_format($pro->price, 0, '', '.')}} </span> </div>
		                      </div></td>
			                    <td  style="width:10%" class="miniCartQuantity"><a > X {{$pro->quantity}} </a></td>
			                    <td  style="width:15%" class="miniCartSubtotal"><span>  </span></td>
			                    <td  style="width:5%" class="delete"><a > x </a></td>
		                  	</tr>
		                 @endforeach 	
                	@else

                	@endif
            
            </tbody>
          </table>
        </div>
        <!--/.miniCartTable-->
        
        <div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right "> Subtotal: $<span class="subtotal">{{number_format(Cart::total(), 0, '', '.')}} </span></h3>
          <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
        <!--/.miniCartFooter--> 
        
      </div>
      <!--/.cartMenu--> 
    </div>
    <!--/.navbar-cart-->
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="{{URL::route('distribuidor',array('empresa'=>$empresa->nombre_publico))}}"> Home </a> </li>
        
        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        
     
      </ul>
      
      <!--- this part will be hidden for mobile version -->
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="dropdown  cartMenu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($<span class="subtotal">{{number_format(Cart::total(), 0, '', '.')}}</span>) </span> <b class="caret"> </b> </a>
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
              <table >
                <tbody class="bCart">
                	 @if($products)
		              	@foreach($products as $pro)
		                	<tr class="miniCartProduct">
			                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="#"> <img src="{{asset($pro->image)}}" alt="img"> </a> </div></td>
			                    <td style="width:40%"><div class="miniCartDescription">
		                        <h4> <a href="product-details.html"> {{$pro->name}} </a> </h4>
		                        
		                        <div class="price"> <span> ${{number_format($pro->price, 0, '', '.')}} </span> </div>
		                      </div></td>
			                    <td  style="width:10%" class="miniCartQuantity"><a > X {{$pro->quantity}} </a></td>
			                    <td  style="width:15%" class="miniCartSubtotal"><span>  </span></td>
			                    <td  style="width:5%" class="delete"><a > x </a></td>
		                  	</tr>
		                 @endforeach 	
                	@else

                	@endif
                  
                
                  
               
                 
                 
                </tbody>
              </table>
            </div>
            <!--/.miniCartTable-->
            
            <div class="miniCartFooter text-right">
              <h3 class="text-right "> Subtotal: $<span class="subtotal">{{number_format(Cart::total(), 0, '', '.')}}</span> </h3>
              <a class="btn btn-sm btn-danger" href="{{URL::route('storeCart')}}"> <i class="fa fa-shopping-cart"> </i> VER CARRO </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
            <!--/.miniCartFooter--> 
            
          </div>
          <!--/.dropdown-menu--> 
        </div>
        <!--/.cartMenu-->
        
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group --> 
          
        </div>
        <!--/.search-box --> 
      </div>
      <!--/.navbar-nav hidden-xs--> 
    </div>
    <!--/.nav-collapse --> 
    <div class="msg-ajax-cart">
        
      </div>
  </div>
  <!--/.container -->
  
  <div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
      <input type="search"  data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>
<!-- /.Fixed navbar  -->
    


<div class="container main-container headerOffset">
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        
          <div class="row">
        		<div class="col-lg-12 col-md-12 col-sm-24">
        						<div class="col-lg-12 col-sm-12 titulo-contenedor">
            		<span class="title">CATALOGO DE PRODUCTOS</span>
            	</div>


	           	@foreach($productos as $pro)
		              <div class="col-lg-4 col-sm-4 hero-feature text-center">
		                 <div class="thumbnail">
		                    <a href="#" class="link-p">
		                        <img src="{{asset($pro->imagen)}}" alt="">
		                    </a>
		                      <div class="caption prod-caption">
		                          <h4><a href="#">{{$pro->nombre}}</a></h4>
		                          <p>${{number_format($pro->precio, 0, '', '.')}}</p>
		                          <p>
		                            <div class="btn-group">
		                              <a href="{{URL::route('distribuidorProducto',array('empresa'=>$empresa->nombre_publico, 'id'=>$pro->cod))}}" class="btn btn-default"> ver mas </a>
		                              <a href="#" class="btn btn-primary addCart" id="{{$pro->cod}}"><i class="glyphicon  glyphicon-shopping-cart"></i> Comprar</a>
		                            </div>
		                          </p>
		                      </div>
		                  </div>
		              </div>
		        @endforeach  
        		</div>
        </div>
        
        
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->


<div class="gap"> </div>


<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3>
            Support 
          </h3>
          <ul>
            <li class="supportLi">
              <p>
                Lorem ipsum dolor sit amet, consectetur 
              </p>
              <h4>
                
                <a class="inline" href="callto:+8801680531352">
                  <strong>
                    <i class="fa fa-phone">
                    </i>
                    88 01680 531352
                  </strong>
                </a>
              </h4>
              <h4>
                <a class="inline" href="mailto:help@tshopweb.com">
                  <i class="fa fa-envelope-o">
                  </i>
                  help@tshopweb.com
                </a>
              </h4>
            </li>
          </ul>
        </div>
        
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Shop </h3>
          <ul>
            <li> <a href="{{URL::route('distribuidor',array('empresa'=>$empresa->nombre_publico))}}"> Home </a> </li>
            <li> <a href="category.html"> Category </a> </li>
            <li> <a href="sub-category.html"> Sub Category </a> </li>
            
          </ul>
        </div>
        
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>
            Information
          </h3>
          <ul>
            <li> <a href="product-details.html"> Product Details </a> </li>
                <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
                <li> <a href="cart.html"> Cart </a> </li>
                <li> <a href="about-us.html"> About us </a> </li>
            <li> <a href="about-us-2.html">
                About us 2 
              </a>
              
            </li>
            <li> <a href="contact-us.html">
                Contact us
              </a>
              
            </li>
            <li> <a href="contact-us-2.html">
                Contact us 2 
              </a>
              
            </li>
            <li> <a href="terms-conditions.html">
                Terms &amp; Conditions
              </a>
              
            </li>
            
          </ul>
        </div>
        
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3>
            My Account
          </h3>
          <ul>
            <li> <a href="account-1.html">
                Account Login
              </a>
              
            </li>
            <li> <a href="account.html">
                My Account
              </a>
              
            </li>
            <li> <a href="my-address.html">
                My Address
              </a>
              
            </li>
            <li> <a href="wishlist.html">
                Wisth list
              </a>
              
            </li>
            <li> <a href="order-list.html">
                Order list
              </a>
              
            </li>
            
          </ul>
        </div>
        
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3>
            Stay in touch
          </h3>
          <ul>
            <li>
              <div class="input-append newsLatterBox text-center">
                <input type="text" class="full text-center"  placeholder="Email ">
                <button class="btn  bg-gray" type="button">
                  Subscribe 
                  <i class="fa fa-long-arrow-right">
                    
                  </i>
                </button>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="http://facebook.com">
                <i class=" fa fa-facebook">
                  &nbsp;
                </i>
              </a>
            </li>
            <li> <a href="http://twitter.com">
                <i class="fa fa-twitter">
                  &nbsp;
                </i>
              </a>
            </li>
            <li> <a href="https://plus.google.com">
                <i class="fa fa-google-plus">
                  &nbsp;
                </i>
              </a>
            </li>
            <li> <a href="http://youtube.com">
                <i class="fa fa-pinterest">
                  &nbsp;
                </i>
              </a>
            </li>
            <li> <a href="http://youtube.com">
                <i class="fa fa-youtube">
                  &nbsp;
                </i>
              </a>
            </li>
          </ul>
        </div>
        
      </div><!--/.row-->
    </div><!--/.container-->
  </div><!--/.footer-->
  
  <div class="footer-bottom">
  
    <div class="container">
      <p class="pull-left">
        &copy; TSHOP 2014. All right reserved.
      </p>
      <div class="pull-right paymentMethodImg">
        
      
      </div>
      
      
    </div>
    
  </div><!--/.footer-bottom-->
</footer>

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

{{ HTML::script('Tshop/assets/js/jquery/1.8.3/jquery.js')}}

{{ HTML::script('Tshop/assets/bootstrap/js/bootstrap.min.js')}}

<!-- include  parallax plugin -->
{{ HTML::script('Tshop/assets/js/jquery.parallax-1.1.js')}}

<!-- optionally include helper plugins -->

{{ HTML::script('Tshop/assets/js/helper-plugins/jquery.mousewheel.min.js')}}

<!-- include mCustomScrollbar plugin //Custom Scrollbar  --> 

{{ HTML::script('Tshop/assets/js/jquery.mCustomScrollbar.js')}}
<!-- include carousel slider plugin  -->

{{ HTML::script('Tshop/assets/js/owl.carousel.min.js')}}

<!-- include smoothproducts // product zoom plugin  -->

{{ HTML::script('Tshop/assets/js/smoothproducts.min.js')}}

<!-- jQuery minimalect // custom select   -->

{{ HTML::script('Tshop/assets/js/jquery.minimalect.min.js')}}

<!-- include touchspin.js // touch friendly input spinner component   --> 
{{ HTML::script('Tshop/assets/js/bootstrap.touchspin.js')}}

<!-- include custom script for site  -->

{{ HTML::script('Tshop/assets/js/script.js')}}
{{ HTML::script('js/cart.js')}}

</body>
</html>