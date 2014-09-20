@extends('layouts.tshop')

@section('titulo')
	Activa tu cuenta pagando una suscripción
@stop

@section('content')
<style type="text/css">
	.contenedor-pagos-mega{
		max-width: 100%;
		width: 90%;

		margin: 5% auto;
	}
	.info-pago-efecty{
		width: 50%;
		margin: 0 auto;
		padding: 10px;
	}
</style>
	<div class="row innerPage">
	    <div class="col-lg-12 col-md-12 col-sm-12">

	    <div class="contenedor-pagos-mega">
	    	<h1 class="title-big text-center section-title-style2">
    <span> Pagar suscripción  </span>
 </h1>
	    	<p>Estas a un paso de activar tu empresa en Tumegalopolis, por favor completa tu pedido haciendo el pago mediante una de las opciones que disponemos actualmente.</p>

	    	<div class="panel panel-default">
			  <div class="panel-heading">Pagar Con paypal</div>
			  <div class="panel-body">
			  <p>Paypal es la plataforma de pagos online  más grande y segura de toda internet, en megalopolis te damos la facilidad que hagas tu pago a través de la plataforma de paypal</p>
			   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4MHFU6RS7LBLQ">
<table>
<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
	<option value="Mes">Mes : $20.00 USD - monthly</option>
	<option value="7 dias">7 dias : $5.00 USD - weekly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">Pagar Con Efecty</div>
			  <div class="panel-body">
			  <p>Puedes hacer el pago a través de efecty por medio de la red de  oficinas de servientrega disponibles en todo el país (Si haces la consignación antes de las 5pm, tu cuenta será activada el mismo día)</p>
			  <p class="info-pago-efecty">
			  	Consignación a nombre de nuestro representante legal en la ciudad de bucaramanga. <br>
			  	<strong>Ivan Jose Rojas</strong> <br>CC 1,134,432,234
			  </p>
			    
			  </div>
			</div>

	      	 
	    </div>
	      
	      
	      	
	      
	     </div>
	 </div>     
@stop