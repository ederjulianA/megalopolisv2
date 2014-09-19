
<!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <li class="dropdown megamenu-fullwidth "> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> CATEGORIAS <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              @foreach($categorias as $cat)
                <ul class="col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft">
                  <li><a href="{{URL::route('categorias-producto', array('id'=>$cat->id))}}">
                    <p> <strong> {{$cat->nombre}} </strong> </p></a>
                  </li>
                  @foreach($cat->subcategoria as $subcat)
                  <li> <a href="{{URL::route('subcategorias-producto', array('id'=>$cat->id,'id_sub'=>$subcat->id))}}"> {{$subcat->nombre_sub}} </a> </li>
                  @endforeach
                  
                </ul>
               @endforeach 
              <!--<ul class="col-lg-2  col-sm-2 col-md-2  unstyled">
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
              </ul>-->
              <!--<ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
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
              </ul>-->
            </li>
          </ul>
        </li>