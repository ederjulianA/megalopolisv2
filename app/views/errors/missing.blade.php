@extends('layouts.tshop')

@section('titulo')
Error 404 | Pagina no encontrada
@stop

@section('content')
		 <div class="container main-container headerOffset">
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        
        <p class="lead text-center"> ... OUPS, al parecer lo que buscas no esta aquí .... </p>
        <h1 class="h1error">  <span class="err404"> 404</span> ERROR </h1>
        <h1 class="h1error">  <span class="err404"> <i class="fa fa-frown-o"></i></span> </h1>
        
        
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->
@stop