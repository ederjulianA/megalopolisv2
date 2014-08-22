$(document).on('click','#btn-nuevo-shipping', function(e){
	var nombre = $('#nombre').val();
	var apellido = $('#apellido').val();
	var barrio = $('#Barrio').val();
	var ciudad = $('#ciudad').val();
	var direccion = $('#direccion').val();
	var telefono = $('#telefono').val();
	var notas = $('#notas').val();
	var id_user = $('#id_comprador').val();

	if(!nombre || !apellido || !barrio || !ciudad || !direccion || !telefono || !notas)
	{
		alert("POR FAVOR INGRESE LOS DATOS SOLICITADOS. :)");
	}else{


		$.ajax({

			url : "info-shipping-ajax",
			dataType: "json",
			type : "post",
			cache: false,
			data : { id_user : id_user, nombre : nombre, apellido : apellido, barrio: barrio, ciudad:ciudad, direccion:direccion,telefono:telefono,nombre:nombre },
			success : function(data){

				if(data){
					
					

					
					
				}
				
				console.log(data);
			}


		});
	}
	e.preventDefault();
});