<?php 
class Favs {

	public static function mostrarFav($user_id, $producto_id )
	{
		$fav = Favoritos::where('user_id','=', $user_id)->where('producto_id','=',$producto_id)->get();

		if($fav->count())
		{
			$boton = "<a href='".$producto_id."' class='remFav link-wishlist wishlist'  id='item-".$producto_id."'><i class='fa fa-heart'></i> Quitar Favorito </a>";
		}else{
			$boton = '<a href="'.$producto_id.'" id="item-'.$producto_id.'"  class="addFav link-wishlist wishlist"><i class="fa fa-heart"></i> Agregar Favoritos</a>';
		}

		return $boton;
	}

	public static function mostrarSus($user_id, $empresa_id)
	{
		$sus = Suscripcion::where('user','=',$user_id)->where('empresa','=',$empresa_id)->get();
		if($sus->count()){
			$estado ='<a class=" Suscrito remSus" href="'.$empresa_id.'" id="empresa-'.$empresa_id.'"><span>Suscrito</span></a>';
		}else{
			$estado ='<a class=" Suscribir addSus" href="'.$empresa_id.'" id="empresa-'.$empresa_id.'"><span>Suscribir</span></a>';
		}

		return $estado;
	}

	public static function estadoPromo($valor)
	{
		if($valor == 0){
			$estado = "<label class='label label-danger'>Promo No Activa</label>";
		}else if($valor == 1)
		{
			$estado = "<label class='label label-success'>Promo  Activa</label>";
		}

		return $estado;
	}

	public static function value($key)
	{
		if($key != null){
			$value = $key;
		}else{
			$value = "";
		}

		return $value;
	}

}