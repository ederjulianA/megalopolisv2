@extends('layouts.tshop')
@section('titulo')
	{{$empresa->razon_social}}
@stop



@section('content-page')
	<meta name="description" content="@if($empresa->desc_larga == "")
												{{$empresa->desc_breve}}
										@else
											{{$empresa->desc_larga}}
										@endif .">
    <meta name="author" content="Megalopolis TEAM">

    <meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/empresa/{{$empresa->nombre_publico}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/{{$empresa->logo}}"/>
@stop

@section('content')
			<div class="container main-container headerOffset">
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <h1 class="title-big text-center section-title-style2">
            <span >
              {{$empresa->razon_social}}
            </span>
          </h1>
          
          <p class="lead text-center">
            @if($empresa->desc_larga == "")
												{{$empresa->desc_breve}}
										@else
											{{$empresa->desc_larga}}
										@endif . 
          </p>
          
          
          <hr class="hr hr30">
          <div class="row animated">
          		 <h3 class="title-big text-center section-title-style2">
            <span >
              Mis sedes
            </span>
          </h3>

          		@foreach($sedes as $sede)
          				<div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
          				<a href="{{URL::route('catalogo-sede', array('nombre_publico'=>$sede->nombre_publico))}}">{{HTML::image('Tshop/images/site/sede.jpg', 'SEDE', array('class'=>'img-responsive'))}}</a>
            
              <h3 class="block-title-3">
                <a href="{{URL::route('catalogo-sede', array('nombre_publico'=>$sede->nombre_publico))}}">{{$sede->nombre_publico}} </a>
              </h3>
              <p>
                Algo sobre esta sede.
              </p>
              
              
              
            </div>
          		@endforeach
            
            
        
            
            
            
          </div><!--/.row-->
          
          <hr>
        </div>
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->
@stop