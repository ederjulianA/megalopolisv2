$(document).ready(function(){


 
});

$(document).on('click','#btn-notificacion-envio', function(e){
	var id = $(this).attr('href');
	$('#imgloaderAjax').html("<div class='loader-ajax'><img src='../../img/mega-imgs/723.gif' /></div>");

				$.ajax({
						url : "noti-envio-ajax",
						dataType: "json",
						type : "post",
						cache : false,
						data : {compra_id: id},
						success : function(data){

							if(data){
								

								$('#venta-item-'+id).fadeOut(2000);
								$('#modalEnvio-'+id).modal('hide');
								$('#mensaje-ajax').addClass("mensaje-ajax");
								$('#mensaje-ajax').html("<p>Notificación  de producto enivado Exitosamente.</p><br><a href='#' class='btn-cerrar-ajax' id='btn-cerrar-ajax'>Cerrar</a>");
								

							}


							


						}
						


						});


	
	//$('#modalEnvio-'+id).modal('hide');
	e.preventDefault();
});

$(document).on('click','#btn-cerrar-ajax', function(e){
	$('#mensaje-ajax').fadeOut(2000);
	e.preventDefault();
})