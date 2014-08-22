$(document).on('click','#btn-nuevo-shipping', function(e){
	var nombre = $('#nombre').val();
	var apellido = $('#apellido').val();
	var barrio = $('#Barrio').val();
	var ciudad = $('#ciudad').val();
	var direccion = $('#direccion').val();
	var telefono = $('#celular').val();
	var notas = $('#notas').val();
	var id_user = $('#id_comprador').val();

	if(!nombre || !apellido || !barrio || !ciudad || !direccion || !telefono )
	{
		$('#ajax-info-shipping-form').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Mensaje</strong>Por favor ingrese los datos marcados con un (*) </div>');
		alert("POR FAVOR INGRESE LOS DATOS SOLICITADOS. :)");
	}else{


		$.ajax({

			url : "info-shipping-ajax",
			dataType: "json",
			type : "post",
			cache: false,
			data : { id_user : id_user, nombre : nombre, apellido : apellido, barrio: barrio, ciudad:ciudad, direccion:direccion, telefono:telefono, notas:notas },
			success : function(data){

				if(data.estado == 1){
					location.reload();
					
					

					
					
				}
				
				console.log(data);
			}


		});
	}
	e.preventDefault();
});