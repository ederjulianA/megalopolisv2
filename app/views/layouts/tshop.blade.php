<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->

<title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>
<!-- Bootstrap core CSS -->
{{ HTML::style('Tshop/assets/bootstrap/css/bootstrap.css', array('media' => 'screen'))}}
<!-- Custom styles for this template -->
{{ HTML::style('Tshop/assets/css/style.css', array('media' => 'screen'))}}

<!-- css3 styles needed by minimalect --> -->
{{ HTML::style('Tshop/assets/css/jquery.minimalect.min.css', array('media' => 'screen'))}}

<!-- styles needed by checkRadio -->
{{ HTML::style('Tshop/assets/css/ion.checkRadio.css', array('media' => 'screen'))}}
{{ HTML::style('Tshop/assets/css/ion.checkRadio.cloudy.css', array('media' => 'screen'))}}

<!-- css3 animation effect for this template -->
{{ HTML::style('Tshop/assets/css/animate.min.css', array('media' => 'screen'))}}


<!-- styles needed by carousel slider -->
{{ HTML::style('Tshop/assets/css/owl.carousel.css', array('media' => 'screen'))}}
{{ HTML::style('Tshop/assets/css/owl.theme.css', array('media' => 'screen'))}}

<!-- styles needed by mCustomScrollbar -->
{{ HTML::style('Tshop/assets/css/jquery.mCustomScrollbar.css', array('media' => 'screen'))}}
<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->



</head>

<body>

<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog" >
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > Login  Megalopolis </h3>
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
          <a href="forgot-password.html" > ¿Olvidaste tu contraseña? </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.Modal Login --> 

<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center" > REGISTRO </h3>
      </div>
      <div class="modal-body">
        <div class="control-group"> <a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP CON FACEBOOK </a> </div>
        <h5 style="padding:10px 0 10px 0;" class="text-center"> O </h5>
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
                Recuérdame </label>
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
        <p class="text-center"> ¿Ya eres miembro? <a data-toggle="modal"  data-dismiss="modal" href="#ModalLogin"> Sign in </a> </p>
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
              <a  href="callto:+8801680531352"> 
              <span> <i class="glyphicon glyphicon-phone-alt "></i></span> 
              <span class="hidden-xs" style="margin-left:5px"> 88 01680 53 1352 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
              <li> <a href="account-1.html"><span class="hidden-xs"> Mi cuenta</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li><li> <a href="#"  data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
              <li class="hidden-xs"> <a href="#"  data-toggle="modal" data-target="#ModalSignup"> Registrarme </a> </li>
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00) </span> </button>
      <a class="logoMega " href="index.html"> <img src="Tshop/images/logo.png" alt="TSHOP"> </a> 
      
      <!-- this part for mobile -->
      <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
        <!-- /input-group --> 
        
      </div>
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table  >
            <tbody>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/3.jpg" alt="img"> </a> </div></td>
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
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/5.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> TSHOP T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/3.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> TSHOP T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/3.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> TSHOP T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/4.jpg" alt="img"> </a> </div></td>
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
        </div>
        <!--/.miniCartTable-->
        
        <div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right subtotal"> Subtotal: $210 </h3>
          <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
        <!--/.miniCartFooter--> 
        
      </div>
      <!--/.cartMenu--> 
    </div>
    <!--/.navbar-cart-->
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="#"> Home </a> </li>
        <li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> La Megalopolis <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content ">
              <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                <li class="no-border">
                  <p class="promo-1"> <strong> NEW COLLECTION </strong> </p>
                </li>
                <li> <a href="category.html"> ALL NEW PRODUCTS </a> </li>
                <li> <a href="category.html"> NEW TOPS </a> </li>
                <li> <a href="category.html"> NEW SHOES </a> </li>
                <li> <a href="category.html"> NEW TSHIRT </a> </li>
                <li> <a href="category.html"> NEW TSHOP </a> </li>
              </ul>
              
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="Tshop/images/site/promo1.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="Tshop/images/site/promo2.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="Tshop/images/site/promo3.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li>
        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <li class="dropdown megamenu-80width "> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> SHOP <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              
              <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
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
                <li class="no-margin productPopItem "> <a href="product-details.html"> <img class="img-responsive" src="Tshop/images/site/g4.jpg" alt="img"> </a> <a class="text-center productInfo alpha90" href="product-details.html"> Eodem modo typi <br>
                  <span> $60 </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem relative"> <a href="product-details.html"> <img class="img-responsive" src="Tshop/images/site/g5.jpg" alt="img"> </a> <a class="text-center productInfo alpha90" href="product-details.html"> Eodem modo typi <br>
                  <span> $60 </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> PAGES <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              
              <h3 class="promo-1 no-margin hidden-xs"> 24+ HTML PAGES ONLY $8 || AVAILABLE ONLY AT WRAP BOOTSTRAP </h3>
              <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive on any Device, 10+ color Theme + Parallax Effect </h3>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> Features Pages </strong> </p>
                </li>
                <li > <a href="index.html"> Home Version 1 </a> </li>
                <li > <a href="index2.html"> Home Version 2 </a> </li>
                <li > <a href="index-header2.html"> Header Version 2 </a> </li>
                <li > <a href="index-header3.html"> Header Version 3 </a> </li>
                <li> <a href="category.html"> Category </a> </li>
                <li> <a href="sub-category.html"> Sub Category </a> </li>
                <li> <a href="product-details.html"> Product Details </a> </li>
                <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> &nbsp; </strong> </p>
                </li>
                <li> <a href="cart.html"> Cart </a> </li>
                <li> <a href="about-us.html"> About us </a> </li>
                <li> <a href="about-us-2.html"> About us 2 (no parallax) </a> </li>
                <li> <a href="contact-us.html"> Contact us </a> </li>
                <li> <a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a> </li>
                <li> <a href="terms-conditions.html"> Terms &amp; Conditions </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> Checkout </strong> </p>
                </li>
                <li> <a href="checkout-0.html"> Checkout Before </a> </li>
                <li> <a href="checkout-1.html"> checkout step 1 </a> </li>
                <li> <a href="checkout-2.html"> checkout step 2 </a> </li>
                <li> <a href="checkout-3.html"> checkout step 3 </a> </li>
                <li> <a href="checkout-4.html"> checkout step 4 </a> </li>
                <li> <a href="checkout-5.html"> checkout step 5 </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> User Account </strong> </p>
                </li>
                <li> <a href="account-1.html"> Account Login </a> </li>
                <li> <a href="account.html"> My Account </a> </li>
                <li> <a href="my-address.html"> My Address </a> </li>
                <li> <a href="user-information.html"> User information </a> </li>
                <li> <a href="wishlist.html"> Wisth list </a> </li>
                <li> <a href="order-list.html"> Order list </a> </li>
                <li> <a href="forgot-password.html"> Forgot Password </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> &nbsp; </strong> </p>
                </li>
                <li> <a href="error-page.html"> Error Page </a> </li>
                 <li> <a href="blank-page.html"> Blank Page </a> </li>
                 <li> <a href="form.html"> Basic Form Element  </a> </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      
      <!--- this part will be hidden for mobile version -->
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="dropdown  cartMenu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart ($210.00) </span> <b class="caret"> </b> </a>
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
              <table>
                <tbody>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/3.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> TSHOP Tshirt DO9 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $22 </span> </div>
                      </div></td>
                    <td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/2.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> TShir TSHOP 09 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $15 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $120 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/5.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> Tshir 2014 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $30 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $80 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/3.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> TSHOP T shirt DO20 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $15 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/product/4.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> T shirt Black </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $44 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $40 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="Tshop/images/site/winter.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> G Star T shirt </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $80 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--/.miniCartTable-->
            
            <div class="miniCartFooter text-right">
              <h3 class="text-right subtotal"> Subtotal: $210 </h3>
              <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
            <!--/.miniCartFooter--> 
            
          </div>
          <!--/.dropdown-menu--> 
        </div>
        <!--/.cartMenu-->
        
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group --> 
          
        </div>
        <!--/.search-box --> 
      </div>
      <!--/.navbar-nav hidden-xs--> 
    </div>
    <!--/.nav-collapse --> 
    
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
@yield('content')
<!--/.parallax-section-->

<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3> Support </h3>
          <ul>
            <li class="supportLi">
              <p> Lorem ipsum dolor sit amet, consectetur </p>
              <h4> <a class="inline" href="callto:+8801680531352"> <strong> <i class="fa fa-phone"> </i> 88 01680 531352 </strong> </a> </h4>
              <h4> <a class="inline" href="mailto:help@tshopweb.com"> <i class="fa fa-envelope-o"> </i> help@tshopweb.com </a> </h4>
            </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Shop </h3>
          <ul>
            <li> <a href="index.html"> Home </a> </li>
            <li> <a href="category.html"> Category </a> </li>
            <li> <a href="sub-category.html"> Sub Category </a> </li>
            <li> <a href="product-details.html"> Product Details </a> </li>
            <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Information </h3>
          <ul>
            <li> <a href="cart.html"> Cart </a> </li>
            <li> <a href="about-us.html"> About us </a> </li>
            <li> <a href="about-us-2.html"> About us 2 </a> </li>
            <li> <a href="contact-us.html"> Contact us </a> </li>
            <li> <a href="contact-us-2.html"> Contact us 2 </a> </li>
            <li> <a href="terms-conditions.html"> Terms &amp; Conditions </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> My Account </h3>
          <ul>
            <li> <a href="account-1.html"> Account Login </a> </li>
            <li> <a href="account.html"> My Account </a> </li>
            <li> <a href="my-address.html"> My Address </a> </li>
            <li> <a href="wishlist.html"> Wisth list </a> </li>
            <li> <a href="order-list.html"> Order list </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Stay in touch </h3>
          <ul>
            <li>
              <div class="input-append newsLatterBox text-center">
                <input type="text" class="full text-center"  placeholder="Email ">
                <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i> </button>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a> </li>
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
      <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>
      <div class="pull-right paymentMethodImg"> <img height="30" class="pull-right" src="images/site/payment/master_card.png" alt="img" > <img height="30" class="pull-right" src="images/site/payment/paypal.png" alt="img" > <img height="30" class="pull-right" src="images/site/payment/american_express_card.png" alt="img" > <img  height="30" class="pull-right" src="images/site/payment/discover_network_card.png" alt="img" > <img  height="30" class="pull-right" src="images/site/payment/google_wallet.png" alt="img" > </div>
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
<!-- jQuery minimalect // custom select   --> 
{{ HTML::script('Tshop/assets/js/jquery.minimalect.min.js')}}
<!-- include touchspin.js // touch friendly input spinner component   --> 
{{ HTML::script('Tshop/assets/js/bootstrap.touchspin.js')}}
<!-- include custom script for only homepage  --> 
<!-- include custom script for site  --> 
{{ HTML::script('Tshop/assets/js/script.js')}}
{{ HTML::script('Tshop/assets/js/pace.min.js')}}

<script>

</script>
</body>
</html>
