@extends('layouts.mega')
@section('titulo')
	{{$empresa->razon_social}}
@stop

<style type="text/css">
	.img-empresa-2{
		height: 150px;
		text-align: center;
		margin: 0 auto;
		width: auto;
	}
</style>

@section('content-page')
	<meta name="description" content="@if($empresa->desc_larga == "")
												{{$empresa->desc_breve}}
										@else
											{{$empresa->desc_larga}}
										@endif .">
    <meta name="author" content="Megalopolis TEAM">

    <meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.tumegalopolis.com/public/empresa/{{$empresa->nombre_publico}}"/>
<meta property="og:image" content="http://www.tumegalopolis.com/public/img/logo_2x.png"/>
@stop

@section('content')
		<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
			  <div class="img_empress" id="img_w">
			    <div class="line_empress" id="l_empress">{{$empresa->razon_social}}</div>
		     {{ HTML::image($empresa->logo, $empresa->razon_social, array('class'=>'img-empresa-2'))}}</div>
		      <div class="descipcion_w" id="descripcion_w_1">
		      		@if($empresa->desc_larga == "")
												{{$empresa->desc_breve}}
										@else
											{{$empresa->desc_larga}}
										@endif
		. </div>
		      <div class="info_direc" id="direc">
		        <p>Dierccion: {{$empresa->direccion_principal}}</p>
		        <p>Telefono: {{$empresa->telefono}}</p>
		        <p>E-Mail: {{$empresa->user->email}}</p>
		      </div>
              
              
              
	      </div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row"><!--/category-tab--><!--/recommended_items-->
					
				</div>
			</div>
		</div>
      <div class="sedes_tag" id="sedes"><div class="img_empressedes" id="img_wa">
			    <div class="line_empress" id="l_empress">Sedes ({{$num_sedes}})</div>
			    @if($sedes->count())
										@foreach($sedes as $sede)
										<div class="sedes_col" id="sedes_col"><a class="" style="color:#fff; font-weight:bold; text-decoration:none;" href="{{URL::route('catalogo-sede', array('nombre_publico'=>$sede->nombre_publico))}}" id="">{{$sede->nombre_publico}}</a></div>
											
									

										@endforeach


									@else
									No se han definido sedes para {{$empresa->razon_social}}

									@endif
      
      
      </div>
        
        <div class="preguntas_frecuentes_bann" id="p_f_b">Preguntas Frecuentes</div>
        @foreach($preguntas as $pregunta)
        	<div class="preguntas" id="p_f_casillas">{{$pregunta->pregunta}} ???</div>
        @endforeach
        
       
        
        
      
        
      </div>
	</section>
@stop