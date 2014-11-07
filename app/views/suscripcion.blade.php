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
    <span> Pagar suscripción <strong>$50.000</strong> </span>
 </h1>
	    	<p>Estas a un paso de activar tu empresa en Tumegalopolis, por favor completa tu pedido haciendo el pago mediante una de las opciones que disponemos actualmente.</p>

	    	<div class="panel panel-default">
			  <div class="panel-heading">Pagar Con PayU</div>
			  <div class="panel-body">
			  <p>Payu es la pasarela de pago mas grande en latino américa, en Colombia cerca del 80% de las transacciones online se hacen a través de <strong>payU</strong> </p>
		<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
  <input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_mediano.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
  <input name="merchantId" type="hidden" value="518436"/>
  <input name="accountId" type="hidden" value="519941"/>
  <input name="description" type="hidden" value="Suscripción a Tumegalopolis"/>
  <input name="referenceCode" type="hidden" value="001"/>
  <input name="amount" type="hidden" value="50000"/>
  <input name="tax" type="hidden" value="0"/>
  <input name="taxReturnBase" type="hidden" value="0"/>
<input name="shipmentValue" value="0" type="hidden"/>
  <input name="currency" type="hidden" value="COP"/>
  <input name="lng" type="hidden" value="es"/>
  <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
  <input name="buttonType" value="SIMPLE" type="hidden"/>
  <input name="signature" value="6a710c126c010b648349b5ab94212ccfc3a02d644d7ce333073159473f289a28" type="hidden"/>
</form>
				<!--<form method="post" action="https://stg.gateway.payulatam.com/ppp-web-gateway" accept-charset="UTF-8">
					<input name="merchantId" type="hidden" value="500238"/>
					<input name="ApiKey" type="hidden" value="6u39nqhq8ftd0hlvnjfs66eh8c"/>
					<input name="referenceCode" type="hidden" value="0001"/>
					<input name="accountId" type="hidden" value="500538"/>
					<input name="description" type="hidden" value="Test PAYU"/>
					<input name="amount" type="hidden" value="10000"/>
					<input name="tax" type="hidden" value="TestPayU"/>
					<input name="taxReturnBase" type="hidden" value="0"/>
					<input name="currency" type="hidden" value="COP"/>
					<input name="signature" type="hidden" value="be2f083cb3391c84fdf5fd6176801278"/>
					<input name="test" type="hidden" value="1"/>
					<input name="buyerEmail" type="hidden" value="test@test.com"/>
					<input type="submit" value="pagar">

				</form>-->

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