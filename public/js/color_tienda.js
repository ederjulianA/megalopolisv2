$(document).on('click','.color_select', function(e){

	var color =  $(this).attr('data');
	var empresa = $('#id_empresa').val();
	$('.mensaje-ajax-color').html('<div class="alert alert-info">Actualizando tema...</div>');

	//alert(color+'-'+empresa);


		$.ajax({

			url : "../changeColorAjax",
			dataType: "json",
			type : "post",
			data : { id_empresa : empresa, color:color},
			success : function(data){
				if(data.estado == 1)
				{
					
					$('.mensaje-ajax-color').html('<div class="msj-ajax-content"> '+data.mensaje+'</div>');
					$('.msj-ajax-content').fadeOut(4200);
					console.log(data);
				}
				
			}

				


		});
	e.preventDefault();
});