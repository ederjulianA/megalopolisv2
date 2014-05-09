$(document).ready(function(){

	

});

$('#nombre_publico_seo').keyup(function(){
	var nombre = $('#nombre_publico_seo').val();
	var nombre_cambio = nombre.replace(/ /g,'-');

	if( nombre.length <= 3)
	{
		var tam = "<span class='label label-warning'>El nombre debe tener al menos 4 caracteres</span>";
	}else{
		tam = "<span class='label label-success'>ok</span>";
	}

	
	$('#nombre_publico_seo').val(nombre_cambio);

	$.ajax({
			url : "get/nombre-empresa",
			dataType: "json",
			type : "post",
			data : { nombre_empresa : nombre_cambio},
			success : function(data){

				if(data.estado == 0){
				

					$('#nombre-seo').html("Tu nombre publico sera: <strong>https://www.megalopolis.com/empresa/"+nombre_cambio+"</strong><br>"+tam);
					$('#btn-crear-empresa').css({display:"inline"});

				}else if (data.estado == 1){
					$('#nombre-seo').html("<div class='alert alert-danger'>"+data.mensaje+"</div>");
					$('#btn-crear-empresa').css({display:"none"});
				}
				


			}
		


		});	
	
	});


	/*	var nombre = $('#nombre_publico').val();
		var nombre_cambio = nombre.replace(/ /g,'-');

		$('#nombre-seo').html("https://www.megalopolis.com/empresa/"+nombre_cambio);
		$´('#nombre_publico_seo').val(nombre_cambio);*/