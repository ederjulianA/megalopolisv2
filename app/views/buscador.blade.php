@extends('layouts.tshop')
@section('titulo')
Buscar: {{$keyword}}
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

<style type="text/css">
    .resultado-ajaz-cat{
      background-color: #45E976 ;
      color: #fff;
      font-size: 30px;
      font-weight: bold;
      margin: 0 auto;
      text-align: center;
      padding: 10px;
      width: 300px;
    }

</style>

    


<div class="container main-container headerOffset"> 

  
  <!-- Main component call to action -->
  
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="{{URL::route('index')}}">Home</a> </li>
        <li class="active"><a href="#"></a> {{$keyword}} </li>
        
       
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
            <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Categoria
            </a> 
            </h4>
          </div>
          
          <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked tree">

                @foreach($categorias as $cat)
                     <li class="active dropdown-tree open-tree" > <a  class="dropdown-tree-a " href="{{URL::route('categorias-producto', array('id'=>$cat->id))}}"> <span class="badge pull-right">N</span> {{$cat->nombre}} </a>
                @endforeach
               
                  <!--<ul class="category-level-2 dropdown-menu-tree">
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
                <li > <a href="#"> <span class="badge pull-right">42</span> Offers Zone </a> </li>-->
              </ul>
            </div>
          </div>
        </div> <!--/Category menu end--> 




      
        
        <!--<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="collapseWill" data-toggle="collapse"  href="#collapsePrice"> Precio <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span class="pull-right clearFilter  label-danger"> Clear </span> </h4>
          </div>
          <div id="collapsePrice" class="panel-collapse collapse in">
            <div class="panel-body priceFilterBody"> 
              
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
              <p>Rango de precio </p>
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
        </div>--> <!--/price panel end--> 
        
        <!--<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseBrand" class="collapseWill"> Marcas <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
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
                <label> &nbsp; </label> 
              </div>
              
            </div>
          </div>
        </div>--> <!--/brand panel end-->
        
        <!--<div class="panel panel-default">
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
        </div>--><!--/color panel end-->
        <!--<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseThree" class="collapseWill"> Descuentos <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
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
        </div>--><!--/discount  panel end-->
      </div>
    </div>
    
    
    <!--right column-->
    <div class="col-lg-9 col-md-9 col-sm-12">
    
      <div class="w100 clearfix category-top">

        <h2> Buscar :  {{$keyword}}</h2>
      

        

      </div><!--/.category-top-->
      
      <!--<div class="row subCategoryList clearfix">
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
      </div>--><!--/.subCategoryList-->
      
      <div class="w100 productFilter clearfix">
        <p class="pull-left"> Mostrando <strong>{{$numPro}}</strong> productos </p>
        <div class="pull-right ">
          <div class="change-order pull-right">
            <select class="form-control" name="orderby">
              <option selected="selected" >Ordenar por Defecto</option>
              <option value="popularity">Ordenar por precio(+)</option>
           
            </select>
          </div>
          <div class="change-view pull-right"> 
          <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> 
          <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
        </div>
      </div> <!--/.productFilter-->
   <div class="row  categoryProduct xsResponse clearfix productos-container">

      @foreach($productos as  $producto)
               <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
          <div class="product">
            <div class="image"> <a href="{{URL::route('productos',array('id'=>$producto->id, 'sede'=>$producto->sede_id,'slug'=>$producto->slug))}}">{{HTML::image($producto->imagen, $producto->producto_nombre, array('class'=>'img-responsive'))}} </a>
              <div class="promotion"> <span class="new-product"> NUEVO</span> </div>
            </div>
            <div class="description">
              <h4><a href="{{URL::route('productos',array('id'=>$producto->id, 'sede'=>$producto->sede_id,'slug'=>$producto->slug))}}">{{$producto->producto_nombre}} </a></h4>
              <p>Preguntar Disponibilidad </p>
             <!-- <span class="size">XL / XXL / S </span> --></div>
            <div class="price"> 
                    <span>${{number_format($producto->precio_detal, 0, '', '.')}}</span>
                    
                  </div>
                  <div class="action-control">
<a class="btn btn-primary" href="{{URL::route('productos',array('id'=>$producto->id, 'sede'=>$producto->sede_id,'slug'=>$producto->slug))}}"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Comprar </span> 
                    </a>
        </div>
          </div>
        </div><!--/.item-->
      @endforeach
    
      
     
       
     
     
       
       
       
      
    
   


       
    </div> <!--/.categoryProduct || product content end-->
      
      <div class="w100 categoryFooter">
        <div class="pagination pull-left no-margin-top">
          <ul class="pagination no-margin-top">
            <li><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            
          </ul>
        </div>
        <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
          <p>Resultados</p>
        </div>
      </div> <!--/.categoryFooter-->
    </div><!--/right column end-->
  </div><!-- /.row  --> 
</div>
<!-- /main container -->

<div class="gap"> </div>

@stop