@extends('layouts.stores')

@section('content')

<div class="row">

          <!-- Slider -->
          <div class="col-lg-9 col-md-12">
                IMAGEN DE LA EMPRESA
                  <!--<div class="slider">
                      <ul class="bxslider">
                          <li>
                              <a href="index.html">
                                  <img src="img/slide1.jpg" alt=""/>
                              </a>
                          </li>
                          <li>
                              <a href="index.html">
                                  <img src="images/banner_slider-2.jpg" alt=""/>
                              </a>
                          </li>
                          <li>
                              <a href="index.html">
                                  <img src="images/banner_slider-1.jpg" alt=""/>
                              </a>
                          </li>
                      </ul>
                  </div>-->
            </div>
            <!-- End Slider -->

      <!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    <h2>NOMBRE DE LA EMPRESA</h2>
                    <p>INFO DE LA EMPRESA Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
            </div>
            <!-- End Product Selection -->
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">

            <!-- Categories -->
            <div class="col-lg-12 col-md-12 col-sm-6">
              <div class="no-padding">
                  <span class="title">CATEGORIES</span>
                </div>
          <div class="list-group list-categ">
            <a href="catalogue.html" class="list-group-item">Cras justo odio</a>
            <a href="catalogue.html" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="catalogue.html" class="list-group-item">Morbi leo risus</a>
            <a href="catalogue.html" class="list-group-item">Porta ac consectetur ac</a>
            <a href="catalogue.html" class="list-group-item">Vestibulum at eros</a>
            <a href="catalogue.html" class="list-group-item">Cras justo odio</a>
            <a href="catalogue.html" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="catalogue.html" class="list-group-item">Vestibulum at eros</a>
            <a href="catalogue.html" class="list-group-item">Cras justo odio</a>
            <a href="catalogue.html" class="list-group-item">Dapibus ac facilisis in</a>
          </div>
        </div>
        <!-- End Categories -->

        <!-- Best Seller -->
        <div class="col-lg-12 col-md-12 col-sm-6">
          <div class="no-padding">
                  <span class="title">BEST SELLER</span>
                </div>
          <div class="hero-feature">
                    <div class="thumbnail text-center">
                      <a href="detail.html" class="link-p">
                          <img src="images/product-8.jpg" alt="">
                      </a>
                        <div class="caption prod-caption">
                            <h4><a href="detail.html">Penn State College T-Shirt</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                            <p>
                              <div class="btn-group">
                                <a href="#" class="btn btn-default">$ 528.96</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                              </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hero-feature hidden-sm">
                    <div class="thumbnail text-center">
                      <a href="detail.html" class="link-p">
                          <img src="images/product-9.jpg" alt="">
                      </a>
                        <div class="caption prod-caption">
                            <h4><a href="detail.html">Ohio State College T-Shirt</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                            <p>
                              <div class="btn-group">
                                <a href="#" class="btn btn-default">$ 924.25</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                              </div>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- End Best Seller -->

          </div>

          <div class="clearfix visible-sm"></div>

      <!-- Featured -->
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">FEATURED PRODUCTS</span>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-2.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Age Of Wisdom Tan Graphic Tee</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 122.51</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-3.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Classic Laundry Green Graphic T-Shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 628.96</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-4.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Disc Jockey Print T-Shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 394.64</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-5.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Live Nation 3 Days of Peace and Music Carbon</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 428.96</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-6.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Live Nation ACDC Gray T-Shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 428.96</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-7.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Live Nation Aerosmith Ivory T-Shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 632.15</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Featured -->

          <div class="clearfix visible-sm"></div>

      <!-- Adidas Category -->
          <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-12 col-sm-12">
                <span class="title">ADIDAS</span>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-10.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 22.22</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-11.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Adidas Men Flame Black T-shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 15.47</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-4 hero-feature text-center">
                  <div class="thumbnail">
                    <a href="detail.html" class="link-p">
                        <img src="images/product-12.jpg" alt="">
                    </a>
                      <div class="caption prod-caption">
                          <h4><a href="detail.html">Adidas Men Red Printed T-shirt</a></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                          <p>
                            <div class="btn-group">
                              <a href="#" class="btn btn-default">$ 20.63</a>
                              <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                          </p>
                      </div>
                  </div>
              </div>
      </div>
      <!-- End Adidas Category -->

        </div>
  <!--<div class="contenedor">
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
    
  </div>-->
@stop
