


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Compra de Articulo</title>
	
<style type="text/css">
	body{
		background-color:#e5e9ec; 
		font-family: Arial, Helvetica, sans-serif;
		color: #999;
		font-size: 12px;
		margin: 0;
	}	
	
	a	{
		color: #555;
		text-decoration: none;
	}
	
	a:hover	{
		color: #84ccc5;
	}
	
	.skin-font	{
		color: #84ccc5;
	}
	
	.bg-white	{
		background-color: #ffffff;
	}
	
	.bg-grey	{
		background-color: #fafafa;
	}
	
	.text-white	{
		color: #fff;
	}
	
	.text-skin	{
		color: #84ccc5;
	}
	
	.hover-white:hover	{
		color: #fff;
	}
	
	.email-btn	{
		background-color: #fff;
		border: 1px solid #eee;
		border-radius:4px; 
		background-clip: padding-box;
		font-size:13px; 
		text-align:center;  
		color:#777; 
		font-weight: 300; 
	}
	
	.email-btn.skin-color	{
		background-color: #84ccc5;
	}
	
	.email-btn.skin-color:hover	{
		background-color: #3a3a3a;
	}
	
	.email-btn.skin-color .btn-inner	{
		color: #fff;
	}
	
	.btn-inner	{
		display: block;
		padding: 7px 10px;
	}
	
</style>

</head>
 
<body>

<!-- Wrapper -->
<table width="100%" id="wrapper" border="0" cellspacing="0" cellpadding="0" bgcolor="#e5e9ec">  
	<tbody>
	
		<!-- section1 -->
		<tr>
			<td>	
				<table bgcolor="#84CCC5" align="center" width="600" style="height:5px;">
					<tbody><tr><td></td></tr></tbody>
				</table>
			</td>	
		</tr>
		<!-- end section1 -->
		
		<!-- section2 -->
		<tr>
			<td>	
				<table bgcolor="#ffffff" align="center" width="600" style="border-bottom: 1px solid #eee;">
					<tbody>
						<tr>
							<td>
								<table bgcolor="#ffffff" width="300" style="padding:10px 0;">
									<tbody>
										<tr>
											<td width="105" align="left" valign="top" style="font:Bold 11px Arial, Helvetica, sans-serif; padding-left:5px;">
												<a href="#"> </a>
											</td>
											<td align="left" valign="top" style="font:Bold 11px Arial, Helvetica, sans-serif;">
												<a href="#">Ver nuestra App </a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>	
		</tr>
		<!-- end section2 -->
		
		<!-- section3 -->
		<tr>
			<td>	
				<table bgcolor="#ffffff" align="center" width="600" style="border-bottom: 1px solid #eee; padding:15px 0;">
					<tbody>
						<tr>
							<td>
								<table bgcolor="#ffffff" align="left" width="200">
									<tbody>
										<tr>
											<td width="300" align="left" valign="top">
												<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
													<tbody>
														<tr>
															<td width="8%" align="left" valign="top">
															{{HTML::image('img/email_template/logo2.png','megalopolis', array('width'=>'150px'))}}
																

															</td>
															<td width="92%" align="left" valign="middle" style="font:20px Arial, Helvetica, sans-serif; color:#84CCC5; padding-left:6px;">
																<a href="#" style=" color:#84CCC5;">Megalopolis Colombia </a>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										  </tr>
									</tbody>
								</table>
								
							</td>
						</tr>
					</tbody>
				</table>
			</td>	
		</tr>
		<!-- end section3 -->
		
		
		
		<!-- section5 -->
		<tr align="center">
			<td>	
				<table bgcolor="#fafafa" align="center" width="600" style="padding:15px 0; border-bottom: 1px solid #eee;">
					<tbody>
						<tr align="center">
							<td style="font:22px Arial, Helvetica, sans-serif;" class="skin-font"> Hola {{$comprador}} </td>
						</tr>
						<tr align="center" style="padding-top: 10px;">
							<td style="font:12px Arial, Helvetica, sans-serif; padding:10px 50px 10px;">
								Felicidades has comprado {{$producto}}, por favor comunícate con tu vendedor para acordar los detalles finales de tu compra. A continuación los detalles de tu compra.  .<br>
								<h3>Detalles de la compra</h3>
								<br>
								 Cantidad: {{$cantidad}} || Valor Unitario: ${{number_format($valor_unitario, 0, '', '.')}}<br>
								Valor total : ${{number_format($valor_total, 0, '', '.')}}<br>
								Vendedor : {{$empresa}}

								 <br><br>
								
								<h3>Puedes Revisar el estado de esta compra en tu perfil </h3>
								{{ $link }}

							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
		
		<!-- end section5 -->
		
		<!-- section6 -->
		
		<!-- end section6 -->
		
		<!-- section7 -->
	
		<!-- end section7-->
		
		<!-- footer -->
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
					<tbody>
						<tr>
							<td bgcolor="#84CCC5" align="center">
								<table cellspacing="0" cellpadding="0" border="0">
									<tbody>
										<tr>
											<td class="content" width="560">
												<table cellspacing="0" cellpadding="0" border="0">
													<tbody>
														<tr>
															<td class="content_row" height="15" width="560">
															</td>
														</tr>
														<tr>
															<td class="text-white" align="center" width="560">
																<a href="#" class="text-white hover-white">Ver Nuestro Sitio</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
																<a href="#" class="text-white hover-white">---</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
																<a href="#" class="text-white hover-white">Suscribirse</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
																<a href="#" class="text-white hover-white">Detener suscripcion</a>
															</td>
														</tr>
														<tr>
															<td class="content_row" width="560" height="20">
															</td>
														</tr>
														<tr>
															<td class="content_row" width="560">
																<table align="center" cellspacing="0" cellpadding="0" border="0">
																	<tbody>
																		<tr>
																			<td class="social_holder" align="center">
																				<table class="mobile_centered_table" cellspacing="0" cellpadding="0" border="0">
																					<tbody>
																						<tr>
																							<td class="social_button" width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/facebook.png') }}" width="18" style="display: block; max-width: 25px;" border="0" alt="facebook" />
																								 </a>
																							</td>
																							<td width="10">
																							</td>
																							<td class="social_button"  width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/twitter.png') }}" width="18" style="display: block; max-width: 25px;" border="0" alt="twitter" />
																								 </a>
																							</td>
																							<td width="10">
																							</td>
																							<td class="social_button" width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/google%2b.png') }}" width="18" style="display: block;  max-width: 25px;" border="0" alt="google+" />

																								 </a>
																							</td>
																							<td width="10">
																							</td>
																							<td width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/rss.png') }}" width="18" style="display: block; max-width: 25px;" border="0" alt="rss" />
																								 </a>
																							</td>
																							<td width="10">
																							</td>
																							<td class="social_button" width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/linkedin.png') }}" width="18" style="display: block; max-width: 25px;" border="0" alt="linkedin" />
																								 </a>
																							</td>
																							<td width="10">
																							</td>
																							<td class="social_button" width="13">
																								 <a href="#" class="nodecoration" style="text-decoration: none;">
																									  <img src="{{asset('img/email_template/dribbble.png') }}" width="18" style="display: block; max-width: 25px;" border="0" alt="dribbble" />
																								 </a>
																							</td>
																					   </tr>
																				  </tbody></table>
																			 </td>
																		</tr>
																   </tbody></table>
															  </td>
														 </tr>
														 <tr>
															  <td class="content_row" height="10" style="width: 560px;">
															  </td>
														 </tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<!-- end footer -->
	</tbody>
</table>
<!-- wrapper -->



</body>

<!-- Mirrored from websdevp.com/Endless1.4/email_template_blue.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 28 Mar 2014 02:27:43 GMT -->
</html>