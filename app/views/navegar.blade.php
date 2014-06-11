@extends('layouts.users')

@section('titulo')
Empresas en megalopolis
@stop

@section('content')
<!-- estilos del mapa -->
    {{ HTML::style('css/estilos-mapas.css', array('media' => 'screen'))}}

	<div id="landing-content">
		<div class="padding-md">
			
				<div class="row">
				<!-- estilos del mapa -->
    
					
							<div class="col-md-2" style="text-align:center;">
								<select name="ciudad" id="sel-ciudades" class="select-ciudad">
									<option value="0">- CIUDAD -</option>
									@foreach($ciudades as $ciudad)
										<option value="{{$ciudad->id}}"> {{$ciudad->ciudad}}</option>
									@endforeach
									
								</select>

								<!--<select name="barrio" id="sel-barrio" class="select-barrio">
									<option value="0">- barrio -</option>
									
									
								</select>-->

								<div class="menu-categorias">
									<h2>Sectores</h2>

									<ul class="menu-sectores">
										<li class="active-menu"><a href="{{URL::route('navegar')}}" >Todos</a></li>
										@foreach( $categorias as $categoria)
										<!--<li><a href="/navegar/categoria/{{$categoria->id}}">{{$categoria->nom_sector}}  </a></li>-->
										<li><a class="cat-lista " href="{{$categoria->id}}">{{$categoria->nom_sector}}  </a></li>
										@endforeach
									</ul>
									
								</div>
								<a class="btn btn-info con-mapa" id="btn-mapa">ver Mapa</a>
							</div>

						<div class="col-md-8" style="text-align:center;">

								<div class="navegar-centro">
										<form method="get" action="{{URL::route('buscador')}}" >

											<input type="text" name="buscador" id="buscador" placeholder="Buscas algo en especifico ?" required><input type="submit" value="Buscar" class="btn btn-danger">
											{{Form::token()}}
										</form>
									
								</div>
									<div class="loader-container"></div>
								<div class="empresas-container">
									

										
									

									@foreach($empresas as $empresa)
											<!--<div class="empresa fadeInDown animation-delay2" >
													<div class="thumbnail" style="height:300px;">
														<img src="{{asset('img/prod1.jpg') }}">
														
														<div class="caption">
															<h4>{{$empresa->razon_social}}</h4>
															<p>{{$empresa->desc_breve}}</p>
															<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
											
														</div>
										
													</div>
												
											</div>-->

												
													
														<div class="detail fadeInUp animated-element empresa">
														<a href="{{URL::route('empresa-info', array('nombre_publico'=>$empresa->nombre_publico))}}" class="hoverBorder">
															<span class="hoverBorderWrapper">
																{{HTML::image($empresa->logo, $empresa->razon_social, array('width'=>'auto','height'=> '90px'))}}
																<span class="hoverBorderInner"></span>
																<span class="readMore">{{$empresa->sector->nom_sector}}</span>
															</span>	
														</a>
														<div class="seperator"></div>
														<p>
															<h4><span class="label label-success">{{$empresa->razon_social}} </span></h4>
															<small>{{ substr($empresa->desc_breve,0,50) }} ...</small> 
														</p>
														<p>
															<a href="{{URL::route('empresa-info', array('nombre_publico'=>$empresa->nombre_publico))}}" class="btn btn-info">contacto</a>
															@if(Auth::check())
															

															<!--<a href="{{$empresa->id}}" class="addFav  btn btn-warning">fav <i class="fa  fa-heart"></i> </a>-->
															@endif
														</p>
											</div><!--detail-->
												
											
					

											

									@endforeach
									
									
								</div>

								<div class="row">
								<div class="contenedormapa-principal">

								<div class="contenedor-mapa hide-mapa">
									<?php
												class MySQL{  
												     private $conexion;  
												      private $total_consultas;  
												     public function MySQL()
												     {  
												      if(!isset($this->conexion))
												      {  
												     // $this->conexion = (mysql_connect("localhost","tumegalo_eder","eder4EVER")) or die(mysql_error());
												     $this->conexion = (mysql_connect("localhost","root","")) or die(mysql_error());  
												      mysql_select_db("megalopolis",$this->conexion) or die(mysql_error());  
												     // mysql_select_db("tumegalo_datos",$this->conexion) or die(mysql_error());  
												      }  
												      }  
												     public function consulta($consulta){  
												      $this->total_consultas++;  
												      $resultado = mysql_query($consulta,$this->conexion);  
												      if(!$resultado){  
												      echo 'MySQL Error: ' . mysql_error();  
												      exit;  
												      }  
												      return $resultado;   
												      }  
												     public function fetch_array($consulta){   
												      return mysql_fetch_array($consulta);  
												      }  
												     public function num_rows($consulta){   
												      return mysql_num_rows($consulta);  
												      }  
												     public function getTotalConsultas(){  
												      return $this->total_consultas;  
												      }  
												  }




												    class vistacuadro
{
	var $elleft;
	var $eltop;
	var $nombremap;
	var $nombrempr;
	var $id;
	var $i;
	var $imagen1;
	var $imagen2;
	var $imagen3;
	var $imagen4;
	var $imagen5;	
	var $imagen6;		
	var $imagen7;	
	var $imagen8;		
	var $imagen9;			
	var $eslocal;
	var $imgsector;
	var $enlace;
	function cuadropeq(){
			$area='';
			$casa='';
			if($this->eslocal==1){
				$area='<a href="#"><map id="mapeo2" name="'.$this->nombremap.'" >	
				<area id="m'.$this->id.'" class="areamap"  shape="poly" coords="0,16,32,0,63,17,63,34,32,49,0,33,0,16" href="/public/empresa/'.$this->nombrempr.'" style="z-index:'.($this->i+3).';" alt="comentario">	
				</map></a>';
		
				$casa='<h3 class="textolocal" style="position:absolute;z-index:'.($this->i+10).';"><img src="'.$this->imgsector.'" style="z-index:'.($this->i+10).';left:0px;top:17px;height:30px;width:30px;position:absolute;">'.$this->nombrempr.'</h3>';
			}else{
			$this->i=0;}
			$resul='<div style="position :absolute;height:auto;left:'.$this->elleft.'px;top:'.$this->eltop.'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->  
				
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.($this->i+1).';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen1.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.($this->i+1).';"></div>
			</div>'.$area.'</div>';
					$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
				
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen2.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft).'px;top:'.($this->eltop+64).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen3.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';			
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+32).'px;top:'.($this->eltop+16).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen4.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+32).'px;top:'.($this->eltop+48).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen5.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+64).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen6.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-32).'px;top:'.($this->eltop+16).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.($this->i+1).';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen7.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.($this->i+1).';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-32).'px;top:'.($this->eltop+48).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen8.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-64).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				'.$casa.'
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen9.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			
		return $resul;
	}
}


		echo '<div id="divciudad" style="top:10%;overflow:scroll;position:relative;width:768px;height:100%;left:0px;" >';

	$db = new MySQL(); 	 
	$consul="SELECT  * FROM cuadricula where estado = 1";
	$consulta = $db->consulta($consul); 
	$cuadritoimg=array();	
	$cuadritoimg2=array();	
	$cuadritoimg3=array();	
	$cuadritoimg4=array();	
	$cuadritoimg5=array();	
	$cuadritoimg6=array();	
	$cuadritoimg7=array();	
	$cuadritoimg8=array();	
	$cuadritoimg9=array();	
	$imgsector=array();	
	$cuadritonom=array();	
		$enlace=array();	
	$vuelta1=0;
	if($db->num_rows($consulta)>0)		
	{while($resultados = $db->fetch_array($consulta)){	
			$cuadritoimg[$vuelta1]=$resultados[2];	
			$cuadritoimg2[$vuelta1]=$resultados[3];
			$cuadritoimg3[$vuelta1]=$resultados[4];
			$cuadritoimg4[$vuelta1]=$resultados[5];
			$cuadritoimg5[$vuelta1]=$resultados[6];
			$cuadritoimg6[$vuelta1]=$resultados[7];
			$cuadritoimg7[$vuelta1]=$resultados[8];
			$cuadritoimg8[$vuelta1]=$resultados[9];
			$cuadritoimg9[$vuelta1]=$resultados[10];
			$cuadritonom[$vuelta1]=$resultados[11];
			$enlace[$vuelta1]=$resultados[12];
			$imgsector[$vuelta1]=$resultados[13];			
			$vuelta1=$vuelta1+1;	
	}}

$rutaimagperfil="img/icono/";
$registros = $db->num_rows($consulta);

if ($registros<>0){
$vuelta=0;
$sumatoria=0;
$temporal=0;
while ($sumatoria<$registros){
	$sumatoria=$sumatoria+$temporal;
	$temporal=$temporal+8;
	$vuelta=$vuelta + 1;
}

$columnas=($vuelta*2)-1;
$filas=($columnas*2)-1;
//$leftinicial=round(($columnas/2)-1)* 64;
$leftinicial=(round(($columnas/2)-1)* 192)+64;
echo '<input id="lefttot" type="text" value="'.($columnas*192).'" style="visibility:hidden;">'; 
$topinicial=0;
$insertados=0;
$locales=0;
for ($i=$filas; $i >= 1; $i--) {
	//$eltop=$topinicial+(16*$i);
	$eltop=$topinicial+(48*$i);
	if ($i<=round($filas/2)){
		//$leftinicialfila=$leftinicial+(($i-1)*32);		
		$leftinicialfila=$leftinicial+(($i-1)*96);		
		for ($j = 1; $j <= $i; $j++) {			
			$nombre="cuadro".$i."N".$j;
			$nombremap="mapcuadro".$i."N".$j;
			//$elleft=$leftinicialfila-(($j-1)*64);		
			$elleft=$leftinicialfila-(($j-1)*192);		
			$vista=new vistacuadro;			
			$vista->elleft=$elleft;
			$vista->eltop=$eltop;
			$vista->nombremap=$nombremap;
			$vista->id="t".$elleft."l".$eltop.'id-';
			$vista->i=$i;
			$vista->imagen1=$rutaimagperfil."fon1.png";
			$vista->imagen2=$rutaimagperfil."fon1.png";
			$vista->imagen3=$rutaimagperfil."fon1.png";
			$vista->imagen4=$rutaimagperfil."fon1.png";
			$vista->imagen5=$rutaimagperfil."fon1.png";
			$vista->imagen6=$rutaimagperfil."fon1.png";
			$vista->imagen7=$rutaimagperfil."fon1.png";
			$vista->imagen8=$rutaimagperfil."fon1.png";
			$vista->imagen9=$rutaimagperfil."fon1.png";
			$vista->imgsector=$rutaimagperfil."fon1.png";			
			$vista->nombrempr="";			
			$vista->eslocal=0;
			$insertados=$insertados+1;
			if ( $locales<($registros)){
				$insertados=0;			
				
				$vista->imagen1=$rutaimagperfil.$cuadritoimg[$locales];
				$vista->imagen2=$rutaimagperfil.$cuadritoimg2[$locales];
				$vista->imagen3=$rutaimagperfil.$cuadritoimg3[$locales];
				$vista->imagen4=$rutaimagperfil.$cuadritoimg4[$locales];
				$vista->imagen5=$rutaimagperfil.$cuadritoimg5[$locales];
				$vista->imagen6=$rutaimagperfil.$cuadritoimg6[$locales];
				$vista->imagen7=$rutaimagperfil.$cuadritoimg7[$locales];
				$vista->imagen8=$rutaimagperfil.$cuadritoimg8[$locales];
				$vista->imagen9=$rutaimagperfil.$cuadritoimg9[$locales];
				$vista->imgsector=$rutaimagperfil.$imgsector[$locales];
				$vista->nombrempr=$cuadritonom[$locales];
				$vista->enlace=$enlace[$locales];
				$vista->eslocal=1;				
				$locales=$locales+1;

			}
			echo $vista->cuadropeq();	
		}
	}else{
		//leftinicialfila=$leftinicial+((($filas-$i))*32);		
		$leftinicialfila=$leftinicial+((($filas-$i))*96);		
		for ($j = 1; $j <= ($filas-$i+1); $j++) {
			$nombre="cuadro".$i."N".$j;
			$nombremap="mapcuadro".$i."N".$j;
			//$elleft=$leftinicialfila-(($j-1)*64);
			$elleft=$leftinicialfila-(($j-1)*192);
			$vista=new vistacuadro;			
			$vista->elleft=$elleft;
			$vista->eltop=$eltop;
			$vista->nombremap=$nombremap;
			$vista->id="t".$elleft."l".$eltop.'id-';
			$vista->i=$i;			
			$vista->imagen1=$rutaimagperfil."fon1.png";
			$vista->imagen2=$rutaimagperfil."fon1.png";
			$vista->imagen3=$rutaimagperfil."fon1.png";
			$vista->imagen4=$rutaimagperfil."fon1.png";
			$vista->imagen5=$rutaimagperfil."fon1.png";
			$vista->imagen6=$rutaimagperfil."fon1.png";
			$vista->imagen7=$rutaimagperfil."fon1.png";
			$vista->imagen8=$rutaimagperfil."fon1.png";
			$vista->imagen9=$rutaimagperfil."fon1.png";
			$vista->imgsector=$rutaimagperfil."fon1.png";	
			$vista->nombrempr="";			
			$vista->eslocal=0;
			$insertados=$insertados+1;
			if ($locales<($registros)){		
				$insertados=0;			
				$vista->imagen1=$rutaimagperfil.$cuadritoimg[$locales];
				$vista->imagen2=$rutaimagperfil.$cuadritoimg2[$locales];
				$vista->imagen3=$rutaimagperfil.$cuadritoimg3[$locales];
				$vista->imagen4=$rutaimagperfil.$cuadritoimg4[$locales];
				$vista->imagen5=$rutaimagperfil.$cuadritoimg5[$locales];
				$vista->imagen6=$rutaimagperfil.$cuadritoimg6[$locales];
				$vista->imagen7=$rutaimagperfil.$cuadritoimg7[$locales];
				$vista->imagen8=$rutaimagperfil.$cuadritoimg8[$locales];
				$vista->imagen9=$rutaimagperfil.$cuadritoimg9[$locales];
				$vista->imgsector=$rutaimagperfil.$imgsector[$locales];
				$vista->nombrempr=$cuadritonom[$locales];
				$vista->eslocal=1;				
				$locales=$locales+1;	
			}
			echo $vista->cuadropeq();	
		}
	}
}
echo '</div>';
}






									?>
									</div>

									</div>
									
								</div>
								
							</div>

							<div class="col-md-2" style="text-align:center;">
								<div class="promos-navegar">
								@if($promocion->count())
									<h2>Promos</h2>
									<a href="{{URL::route('promos', array('id'=>$promocion->id))}}">{{HTML::image($promocion->img, $promocion->titulo, array('width'=>'100%', 'height'=>'300px'))}}</a>
										<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
														<span class="porcentaje-producto">- {{$promocion->porcentaje}}%</span>
												</div>
										</div>
												<p><a href="{{URL::route('promos', array('id'=>$promocion->id))}}" class="link-promo"> {{$promocion->titulo}} </a></p>
												<p class="precio-promo-navegar">$ {{$promocion->con_descuento}}</p>
								@endif			
									
								</div>
								
							</div>
				</div>
		</div>

	</div>

		
		
				
	
@stop