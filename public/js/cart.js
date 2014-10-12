$(document).on('click','.addCart', function(e){
	var id_producto = $(this).attr('id');

	var totalItems = $('#v_cart_t_i').val();
	var c_carro_user = $('#valor-total-carro-frm').val();
	

	var Nuevo_totalItems 

		$.ajax({

			url : "addcartAjax",
			dataType: "json",
			type : "post",
			data : { id_producto : id_producto},
			success : function(data){
				if(data.estado.estado == 1)
				{
					alert('hola');
				}
				console.log(data);
			}

				


		});

	
	e.preventDefault();
});
$(document).on('click','#btn-carrito',function(e){
	var id = $('#product_id').val();
	$.ajax({

			url : "../../addcartAjax",
			dataType: "json",
			type : "post",
			data : { id_producto : id},
			success : function(data){
				if(data.estado.estado == 1)
				{
					alert('hola');
				}
				console.log(data);
			}

				


		});
	e.preventDefault();
});

$(document).on('change','#qty-id', function(e){
	var cantidad = $('#qty-id').val();

	$('#qty-id').val(cantidad);

	alert(cantidad);
});