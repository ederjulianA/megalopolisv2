$(document).ready(function(){


	

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


	
