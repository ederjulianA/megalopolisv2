@extends('layouts.tshop')

@section('content')
			<div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="#"> Home </a> </li>
        <li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> New Products <b class="caret"> </b> </a>
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
                <li> <a href="category.html"> NEW DENIM </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li>
                    <a class="newProductMenuBlock" href="product-details.html"> 
                    <img class="img-responsive" src="images/site/promo1.jpg" alt="product"> 
                    <span class="ProductMenuCaption"> 
                    <i class="fa fa-caret-right"> </i> JEANS </span> </a>
                </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li>
                	<a class="newProductMenuBlock" href="product-details.html"> 
                    <img class="img-responsive" src="images/site/promo2.jpg" alt="product"> 
                    <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span> 
                    </a>
                 </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li>
                    <a class="newProductMenuBlock" href="product-details.html"> 
                        <img class="img-responsive" src="images/site/promo3.jpg" alt="product">
                         <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                      </a>
                 </li>
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
                <li> <a href="#"> Denim </a> </li>
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
                <li> <a href="#"> DENIM </a> </li>
                <li> <a href="#"> TANJIM </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem "> 
                
                    <a href="product-details.html"> 
                    <img class="img-responsive" src="images/site/g4.jpg" alt="img"> 
                    </a> 
                    
                    <a class="text-center productInfo alpha90" href="product-details.html"> Eodem modo typi <br>


                      <span> $60 </span> </a> 
                 </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <li class="no-margin productPopItem relative">
                 <a href="product-details.html"> 
                 <img class="img-responsive" src="images/site/g5.jpg" alt="img"> 
                 </a> 
                <a class="text-center productInfo alpha90" href="product-details.html"> Eodem modo typi <br>
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
                <li > <a href="index2.html"> Home Version 2 </a> </li> <li > <a href="index-header2.html"> Header Version 2 </a> </li>
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
      
        <div class="dropdown  cartMenu "> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
       		<i class="fa fa-shopping-cart"> </i>
            <span class="cartRespons"> Cart ($210.00) </span> 
            <b class="caret"> </b> 
        </a>
        
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
          
            <div class="w100 miniCartTable scroll-pane">
              <table>
                <tbody>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> Denim Tshirt DO9 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $22 </span> </div>
                      </div></td>
                    <td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/product/2.jpg" alt="img"> </a> </div></td>
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
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/product/5.jpg" alt="img"> </a> </div></td>
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
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a> </div></td>
                    <td  style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="product-details.html"> Denim T shirt DO20 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> $15 </span> </div>
                      </div></td>
                    <td   style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $55 </span></td>
                    <td  style="width:5%" class="delete"><a > x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/product/4.jpg" alt="img"> </a> </div></td>
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
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="images/site/winter.jpg" alt="img"> </a> </div></td>
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
            </div> <!--/.miniCartTable-->
            
            
            <div class="miniCartFooter text-right">
              <h3 class="text-right subtotal"> Subtotal: $210 </h3>
              <a class="btn btn-sm btn-danger"> 
              <i class="fa fa-shopping-cart"> </i> VIEW CART </a> 
              <a class="btn btn-sm btn-primary"> CHECKOUT </a> 
            </div> <!--/.miniCartFooter-->
            
            
          </div><!--/.dropdown-menu-->
        </div><!--/.cartMenu-->
        
        
        
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group --> 
          
        </div><!--/.search-box -->
      </div><!--/.navbar-nav hidden-xs-->
    </div><!--/.nav-collapse --> 
    
  </div> <!--/.container -->
  
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
  
  <!-- Main component call to action -->
  
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li class="active">MEN COLLECTION  </li>
      </ul>
    </div>
  </div>  <!-- /.row  --> 
  
  <div class="row">
  
   <!--left column-->
  
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="panel-group" id="accordionNo">
       <!--Category--> 
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> 
            <a data-toggle="collapse"  href="#collapseCategory" class="collapseWill"> 
            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category 
            </a> 
            </h4>
          </div>
          
          <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked tree">
                <li class="active dropdown-tree open-tree" > <a  class="dropdown-tree-a" > <span class="badge pull-right">42</span> WOMEN COLLECTION </a>
                  <ul class="category-level-2 dropdown-menu-tree">
                    <li class="dropdown-tree"> <a class="dropdown-tree-a"  href="sub-category.html"> Tshirt</a>
                    </li>
                    <li><a > Shoes</a> </li>
                    <li><a > Shirt</a> </li>
                    <li><a >T shirt</a> </li>
                    <li><a href="sub-category.html"> Shirt</a> </li>
                    <li><a href="sub-category.html">Fragrances</a> </li>
                    <li><a href="sub-category.html">Scarf</a> </li>
                    <li><a href="sub-category.html">Sandal</a> </li>
                    <li><a href="sub-category.html">Underwear</a> </li>
                    <li><a href="sub-category.html">Winter Collection</a> </li>
                    <li><a href="sub-category.html">Men Accessories</a> </li>
                  </ul>
                </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> MEN COLLECTION </a> </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a> </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> Home & Kitchen </a> </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a> </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> More Stores </a> </li>
                <li > <a href="#"> <span class="badge pull-right">42</span> Offers Zone </a> </li>
              </ul>
            </div>
          </div>
        </div> <!--/Category menu end--> 
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="collapseWill" data-toggle="collapse"  href="#collapsePrice"> Price <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span class="pull-right clearFilter  label-danger"> Clear </span> </h4>
          </div>
          <div id="collapsePrice" class="panel-collapse collapse in">
            <div class="panel-body priceFilterBody"> 
              <!-- -->
              <label>
                <input type="radio" name="agree" value="0"  />
                100$ - 500$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="1" />
                500$ - 1000$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="2" />
                1000$ - 1500$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="3" />
                1500$ - 2000$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="4" />
                2000$ - 2500$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="5" />
                2500$ - 3000$</label>
              <br>
              <label>
                <input type="radio" name="agree" value="6" disabled checked />
                Don't know</label>
              <hr>
              <p>Enter a Price range </p>
              <form class="form-inline " role="form">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail2" placeholder="2000 $">
                </div>
                <div class="form-group sp"> - </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword2" placeholder="3000 $">
                </div>
                <button type="submit" class="btn btn-default pull-right">check</button>
              </form>
            </div>
          </div>
        </div> <!--/price panel end--> 
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseBrand" class="collapseWill"> Brand <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
          </div>
          <div id="collapseBrand" class="panel-collapse collapse in">
            <div class="panel-body smoothscroll maxheight300">
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="0"  />
                  Armani </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="1" />
                  Gucci </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="2" />
                  Louis Vuitton </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Chanel </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Roberto Cavalli </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Valentino </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Ralph Lauren </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Miu Miu </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  McQueen </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  adidas </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Nike </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Jimmy Choo </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Bottega Veneta </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Donna Karan </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Oscar de la Renta </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Tods </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Burberry </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Michael Kors </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Mulberry </label>
              </div>
              <div class="block-element">
                <label> &nbsp; </label> <!-- keep it blank // -->
              </div>
              
            </div>
          </div>
        </div> <!--/brand panel end-->
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseColor" class="collapseWill"> Color <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
          </div>
          <div id="collapseColor" class="panel-collapse collapse in">
            <div class="panel-body smoothscroll maxheight300 color-filter">
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="0"  />
                  <small style="background-color:#333333"></small> Black <span >(123)</span> </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="1" />
                  <small style="background-color:#1664c4"></small> Blue (434) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="2" />
                  <small style="background-color:#c00707"></small> Red (338) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#6fcc14"></small> Green (253) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#943f00"></small> Brown (240) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#ff1cae"></small> Pink (212) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#f5f5dc"></small> Beige (176) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#adadad"></small> Grey (154) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#5d00dc"></small> Purple (132) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#f1f40e"></small> Yellow (104) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#ffc600"></small> Orange (77) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#9b1d00"></small> Maroon (76) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#0a43a3"></small> Navy Blue (68) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#ede4b2"></small> Tan (67) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#ecf1ef"></small> Silver (49) </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  <small style="background-color:#f3f1e7"></small> Off White (44) </label>
              </div>
              <div class="block-element">
                <label> &nbsp; </label>
              </div>
            </div>
          </div>
        </div><!--/color panel end-->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseThree" class="collapseWill"> Discount <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse in">
            <div class="panel-body">
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Non-Discounted items </label>
              </div>
              <div class="block-element">
                <label>
                  <input type="checkbox" name="tour" value="3" />
                  Discounted items </label>
              </div>
            </div>
          </div>
        </div><!--/discount  panel end-->
      </div>
    </div>
    
    
    <!--right column-->
    <div class="col-lg-9 col-md-9 col-sm-12">
    
      <div class="w100 clearfix category-top">
        <h2> MEN COLLECTION </h2>
        <div class="categoryImage"> <img src="Tshop/images/site/category.jpg" width = "850px" height="300px" class="img-responsive" alt="img"> </div>
      </div><!--/.category-top-->
      
      <div class="row subCategoryList clearfix">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/product/3.jpg" class="img-rounded " alt="img"> </a> <a  class="subCategoryTitle"><span> T shirt </span></a></div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/site/casual.jpg" class="img-rounded " alt="img"> </a> <a  class="subCategoryTitle"><span> Shirt </span></a></div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/site/shoe.jpg" class="img-rounded " alt="img"> </a> <a  class="subCategoryTitle"><span> shoes </span></a></div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/site/jewelry.jpg" class="img-rounded " alt="img"> </a> <a  class="subCategoryTitle"><span>  Accessories </span></a></div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/site/winter.jpg" class="img-rounded  " alt="img"> </a> <a  class="subCategoryTitle"><span> Winter Collection </span></a></div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center">
          <div class="thumbnail equalheight"> <a class="subCategoryThumb" href="sub-category.html"><img src="Tshop/images/site/Male-Fragrances.jpg" class="img-rounded " alt="img"> </a> <a  class="subCategoryTitle"><span>  Fragrances </span></a></div>
        </div>
      </div><!--/.subCategoryList-->
      
      <div class="w100 productFilter clearfix">
        <p class="pull-left"> Showing <strong>12</strong> products </p>
        <div class="pull-right ">
          <div class="change-order pull-right">
            <select class="form-control" name="orderby">
              <option selected="selected" >Default sorting</option>
              <option value="popularity">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="date">Sort by newness</option>
              <option value="price">Sort by price: low to high</option>
              <option value="price-desc">Sort by price: high to low</option>
            </select>
          </div>
          <div class="change-view pull-right"> 
          <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> 
          <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
        </div>
      </div> <!--/.productFilter-->
      <div class="row  categoryProduct xsResponse clearfix">
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
              <div class="product">
                <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/30.jpg" alt="img" class="img-responsive"></a>
                  <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
                </div>
                <div class="description">
                  <h4><a href="product-details.html">aliquam erat volutpat</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                  <span class="size">XL / XXL / S </span> </div>
                <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
              </div>
            </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
              <div class="product">
                <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/31.jpg" alt="img" class="img-responsive"></a>
                  <div class="promotion"> <span class="discount">15% OFF</span> </div>
                </div>
                <div class="description">
                  <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                  <span class="size">XL / XXL / S </span> </div>
                <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
              </div>
            </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/34.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	<span class="old-price">$75</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/35.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">humanitatis per</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/33.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">Eodem modo typi</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/10.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">sequitur mutationem </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/37.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">consuetudium lectorum.</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	<span class="old-price">$75</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/16.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">parum claram</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	<span class="old-price">$75</span>
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/19.jpg" alt="img" class="img-responsive"></a> </div>
            <div class="description">
              <h4><a href="product-details.html">duis dolore </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/15.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> <span class="discount">15% OFF</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">aliquam erat volutpat</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/14.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="discount">15% OFF</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="product-details.html"><img src="Tshop/images/product/17.jpg" alt="img" class="img-responsive"></a>
              <div class="promotion"> <span class="new-product"> NEW</span> </div>
            </div>
            <div class="description">
              <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <span class="size">XL / XXL / S </span> </div>
            <div class="price"> 
                  	<span>$25</span>
                  	
                  </div>
                  <div class="action-control">
<a class="btn btn-primary"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                    </a>
				</div>
          </div>
        </div><!--/.item-->
    </div> <!--/.categoryProduct || product content end-->
      
      <div class="w100 categoryFooter">
        <div class="pagination pull-left no-margin-top">
          <ul class="pagination no-margin-top">
            <li><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
        <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
          <p>Showing 1–450 of 12 results</p>
        </div>
      </div> <!--/.categoryFooter-->
    </div><!--/right column end-->
  </div><!-- /.row  --> 
</div>
<!-- /main container -->

<div class="gap"> </div>

@stop