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

	$(document).on("click","a.lista-products", function(e){

		alert("Buscando Productos");
		$(".productos-container").empty();

/*$.ajax({
		url : "get-products",
		dataType: "json",
		type : "post",
		data : { id_cat : $(this).attr('href'),  nom_sede : $('#nombre_sede_h').val()},
		success : function(data){

			if(data){

					if (data.estado == 0) {
						$(".productos-container").html("<div>"+data.mensaje+"</div>");

					}else{
							for( var i in data){
						var produc = '<div class="producto fadeInUp animation-delay4" style = "vertical-align: top;"> <div class="thumbnail"><h1 class = "My-Circle" title = "Unidades disponibles">'+data[i].cantidad+'</h1>  <img src = ../'+data[i].imagen+' class="img-producto-lista" /><div class="caption"> <h1 class = "My-Title" style="height:80px;">'+data[i].producto_nombre+'</h1> <hr><h2 class = "My-Category-Title" >'+data[i].categoria_nombre+'</h2><p><a href="/public/producto/'+data[i].id+'-'+data[i].sede_id+'" class="label label-danger">Detalle</a> </p>  </div> </div></div>';
						$(".productos-container").append(produc);
						

					}

					}

					
					
				

			}
			console.log(data);
			


		}
		


	});	*/

			

		e.preventDefault();
	});

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


	
