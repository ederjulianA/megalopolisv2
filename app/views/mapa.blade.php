@extends('layouts.users')

<?php
	class MySQL{  
     private $conexion;  
      private $total_consultas;  
     public function MySQL()
     {  
      if(!isset($this->conexion))
      {  
      $this->conexion = (mysql_connect("localhost","root","")) or die(mysql_error());  
      mysql_select_db("megalopolis",$this->conexion) or die(mysql_error());  
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
				<area id="m'.$this->id.'" class="areamap"  shape="poly" coords="0,16,32,0,63,17,63,34,32,49,0,33,0,16" href="/empresa/mercagan" style="z-index:'.($this->i+3).';" alt="comentario">	
				</map></a>';
		//				function redireccionar(){
		//  window.locationf="http://www.cristalab.com";
		//} 
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
?>

@section('titulo')
	Mapa
@stop

@section('content')
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- estilos del mapa -->
    {{ HTML::style('css/estilos-mapas.css', array('media' => 'screen'))}}
  
<script type="text/javascript">
   
  $(document).ready(function(){			 
		 lefttot=$('#lefttot').val();		
		 $('#divciudad').scrollLeft(((lefttot-768)/2));		
	});
	$(".areamap").live("mouseover",function(){
		idarea=$(this).attr("id");		
		varempr=idarea.substring(1);		
		$("#i"+varempr).css("opacity","0.7");
	});		
	$(".areamap").live("mouseout",function(){
		idarea=$(this).attr("id");			
		varempr=idarea.substring(1);
		$("#i"+varempr).css("opacity","1");
	});				 
	$(".areamap").live("click",function(){
		idarea=$(this).attr("id");			
		varempr=idarea.substring(1);
		$("#i"+varempr).css("opacity","1");
	});		
</script>
	<div class="container">
		<div class="row">
			<h1>mapa</h1>
		</div>

	<div class="contenedor-mapa">
		<?php 
			echo '<div id="divciudad" style="top:10%;overflow:scroll;position:relative;width:768px;height:100%;left:0px;" >';

	$db = new MySQL(); 	 
	$consul="SELECT  * FROM cuadricula where id<50";
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
@stop