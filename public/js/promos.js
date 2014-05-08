$(document).ready(function(){
	cambiar_nombre();
	validar_pass();

	

});

function validar_pass()
{
	
	

	$('#pass_nueva_repite').keyup(function(){
			var pass_nueva = $('#pass_nueva').val();
			var pass_repite = $('#pass_nueva_repite').val();

			if( pass_repite != pass_nueva){
				$('.mensajes-ajax-pass').html("<span class='label label-warning'>Las contraseñas No coinciden</span>");
			}else{
				$('.mensajes-ajax-pass').html("<span class='label label-success'>ok</span>");
			}
	});
}

function cambiar_nombre()
{
	$('#btn-cambiar-img').click( function(e){
		$.ajax({
			url : "cambiar-nombre-ajax",
		dataType: "json",
		type : "post",
		data : { nuevo_nom : $('#username').val()},
		success : function(data){

			if(data.estado == 1){
				$('.mensajes-ajax').html('<span class="label label-danger"> Por favor escribe un nombre distinto al actual</span>');
			}else{


			$('#username').html(data.username);
			$('.mensajes-ajax').html('<span class="label label-success"> Has cambiado Tu Nombre a <strong>'+data.username+'</strong></span>');
			$('#titulo-user').html("Hola "+data.username);
			console.log(data);

			}
		}


		});

		e.preventDefault();
	});
}

	$("a.lista-promos").click( function(e){
		//var sede_id = $(this).attr('href');
		$('.contenedor-promos-ajax').empty();

		
		
		

		$.ajax({
		url : "get/promo",
		dataType: "json",
		type : "post",
		data : { id_sede : $(this).attr('href')},
		success : function(data){

			if(data){
					for( var i in data){

						var promociones = '<div class="item-promo-lista"><img src="'+data[i].img+'" class="img-promo-lista"><h3>'+data[i].titulo+'</h3><p>'+data[i].descripcion_corta+'</p><p class="sede-item"><span class="label label-warning">'+data[i].sede.nombre_publico+'</span></p></div>'
						$('.contenedor-promos-ajax').append(promociones);

					}
					
				

			}
			console.log(data);
			


		}
		


	});		
		
		e.preventDefault();
	});


	
