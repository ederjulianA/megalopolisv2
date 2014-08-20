$(document).on('click','.btn-categoria', function(e){
	var id_cat = $(this).attr('href');
	var nombre_cat = $("#cat_nombre-"+id_cat).val();

	var form = "";
	 form += '<div class="form-ajax-js" id="form-ajax-js-'+id_cat+'">';
	 form += '<form method="post" action="../../editar-cat-post">';
	 form += '<input type="text" name="cat_nombre" value="'+nombre_cat+'"><input type="hidden" name="id_cat" value="'+id_cat+'"><br>';
	 form +='<button type="submit" class="btn btn-success" >Actualizar</button> <a id="cerrar-form-editar" href="'+id_cat+'" class="btn btn-danger">Cancelar</a>';
	 form += '</form>';
	 form += '</div>';

	 $("#form-ajax-"+id_cat).html(form);

	//alert(id_cat+"-"+nombre_cat);

	e.preventDefault();
});

$(document).on('click','#cerrar-form-editar', function(e){
	var id_cat = $(this).attr('href');
	$('#form-ajax-js-'+id_cat).fadeOut(1200);

e.preventDefault();
});

$(document).on('click','#cerrar-msg-alert',function(){
	$('.message-alert').fadeOut(1000);
});


/* FUNCIONES  PARA EDITAR LAS SUBCATEGORIAS###################################################################################################################*/



$(document).on('click','.btn-subcategoria', function(e){
	var id_subcat = $(this).attr('href');
	var nombre_subcat = $("#sub_nombre-"+id_subcat).val();

	var form = "";
	 form += '<div class="form-ajax-js" id="form-ajax-js-sub-'+id_subcat+'">';
	 form += '<form method="post" action="../../editar-subcat-post">';
	 form += '<input type="text" name="subcat_nombre" value="'+nombre_subcat+'"><input type="hidden" name="id_subcat" value="'+id_subcat+'"><br>';
	 form +='<button type="submit" class="btn btn-success" >Actualizar</button> <a id="cerrar-form-editar-sub" href="'+id_subcat+'" class="btn btn-danger">Cancelar</a>';
	 form += '</form>';
	 form += '</div>';

	 $("#form-ajax-sub-"+id_subcat).html(form);

	//alert(id_cat+"-"+nombre_cat);

	e.preventDefault();
});


$(document).on('click','#cerrar-form-editar-sub', function(e){
	var id_subcat = $(this).attr('href');
	$('#form-ajax-js-sub-'+id_subcat).fadeOut(800);

e.preventDefault();
});



/*FUNCION PARA BUSCAR UN USUARIO POR EMAIL*/

$(document).on('click','#btn-email-filtro', function(e){
	var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

	var email = $('#email-filtro').val();

	$.ajax({

			url : "emailFiltro",
			dataType: "json",
			type : "post",
			cache : false,
			data : { email : email},
			success : function(data){

				if(data.estado == 0){
					$('.respuesta-ajax-email').html('<p class="alert alert-danger">No se encontraron Registros</p>');
				}else{
					$('.respuesta-ajax-email').html('<p>Usuario : <strong>'+data.email+'<strong> <a href="/admin/usuarios/editar_'+data.id+'" class="btn btn-info">Editar</a></p>');
				}
				
				
				
				
						
					

					
					
				
				
				console.log(data);
			}


		});
	

	


	e.preventDefault();
});