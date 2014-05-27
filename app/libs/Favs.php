<?php 
class Favs {

	public static function mostrarFav($user_id, $producto_id )
	{
		$fav = Favoritos::where('user_id','=', $user_id)->where('producto_id','=',$producto_id)->get();

		if($fav->count())
		{
			$boton = "<a href='".$producto_id."' class='remFav btn btn-danger'  id='item-".$producto_id."'><i class='fa fa-heart'></i> Quitar </a>";
		}else{
			$boton = '<a href="'.$producto_id.'" id="item-'.$producto_id.'"  class="addFav btn btn-info My-Align"><i class="fa fa-heart"></i> Agregar</a>';
		}

		return $boton;
	}

	public static function mostrarSus($user_id, $empresa_id)
	{
		$sus = Suscripcion::where('user','=',$user_id)->where('empresa','=',$empresa_id)->get();
		if($sus->count()){
			$estado ='<a class="btn btn-info quick-btn remSus" href="'.$empresa_id.'" id="empresa-'.$empresa_id.'"><i class="fa fa-check"></i><span>Suscrito</span></a>';
		}else{
			$estado ='<a class="btn btn-default quick-btn addSus" href="'.$empresa_id.'" id="empresa-'.$empresa_id.'"><i class="fa fa-check"></i><span>Suscribir</span></a>';
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