<?php 
class Favs {

	public static function mostrarFav($user_id, $producto_id )
	{
		$fav = Favoritos::where('user_id','=', $user_id)->where('producto_id','=',$producto_id)->get();

		if($fav->count())
		{
			$boton = "<a href='#' class='btn btn-danger'>Quitar Fav</a>";
		}else{
			$boton = '<a href="'.$producto_id.'" id="item-'.$producto_id.'"  class="addFav btn btn-info My-Align"><i class="fa fa-heart"></i></a>';
		}

		return $boton;
	}
}