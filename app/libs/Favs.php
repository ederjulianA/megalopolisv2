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

	public static function disponibles($cantidad)
	{
		if($cantidad > 0)
		{
			$btn = '<h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i>Disponible</h3>';
		}
		else{
			$btn = '<h3  class="incaps"><i class="fa fa-minus-circle color-out"></i> No hay unidades Disponibles</h3>';
		}
		return $btn;
		
        
	}

	

	public static function notiPreguntas($id_user)
	{
		$pre = Pregunta::where('user_id','=',$id_user)->where('estado','=',1)->get();
		$numPre = count($pre);
		if($numPre > 0)
		{
			$btn = '<a href="#"> <span class="badge">'.$numPre.'</span></a>';
		}else{
			$btn = '';
		}
		return $btn;
	}

	public static function totalNoti($id_user)
	{
		$pre = Pregunta::where('user_id','=',$id_user)->where('estado','=',1)->get();
		$numPre = count($pre);
		if($numPre > 0)
		{
			$btn = '<span class="badge pull-right" id="numNoti">'.$numPre.'</span>';
		}else{
			$btn = '<span class="badge pull-right">0</span>';
		}
		return $btn;
	}

	public static function pagos($pago,$empresa)
	{
		$pagos = Pagosempresa::where('id_empresa','=',$empresa)->where('id_pago','=',$pago)->first();
		if($pagos)
		{
			$btnPago = '<a href="'.$pago.'" class="btn-pago agregado" id="pago-'.$pago.'">Remover pago</a>';
		}else{
			$btnPago = '<a href="'.$pago.'" class="btn-pago noagregado" id="pago-'.$pago.'">Agregar pago</a>';
		}

		return $btnPago;
		//63369423 sandra pico
	}


	public static function imgMake($img)
	{
		$nimg = public_path() .'/'.$img;
		$image = Image::make($nimg)->resize(300, 200);
            return Response::make($image, 200, array('content-type' => 'image/jpg'));
	}

	public static function estadoPedido($estado)
	{
		if($estado == 0)
		{
			$btnState = '<span class="label label-warning">En espera</span>';
		}

		if($estado == 1)
		{
			$btnState = '<span class="label label-info">En entrega</span>';
		}

		if($estado == 2)
		{
			$btnState = '<span class="label label-success">Entregado</span>';
		}

		return $btnState;


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


	public static function tipoUser($tipo)
	{
		if($tipo == 1)
		{
			$btn = '<a class="btn btn-success">Usuario</a>';
		}

		else if($tipo == 2)
		{
			$btn = '<a class="btn btn-primary">Empresa</a>';
		}

		return $btn;
	}

	public static function ActiveUser($active)
	{
		if($active == 1)
		{
			$btn = '<a class="btn btn-success">Activo</a>';
		}

		else if($active == 0)
		{
			$btn = '<a class="btn btn-danger">No activo</a>';
		}

		return $btn;

	}

}