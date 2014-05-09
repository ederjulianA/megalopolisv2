$(document).ready(function(){
	$('#sel-ciudades').change(function(){
		$('#sel-barrio').empty();
		barrios();
		$('.empresas-container').empty();
		lista_empresas();

	


	});

	

});

$(document).on("click", ".remFavList", function(e){
	var id = $(this).attr('href');
				$.ajax({

			url : "remo/lista/favs",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					$('.mensaje-favoritos-ajax').html("<div class='alert alert-danger'>Producto eliminado de  tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 1500 );
					$('#fav-'+id).fadeOut(1200);
					
					$('.mensaje-favoritos-ajax').fadeOut( 2200 );

					
					
				}
				
				console.log(data);
			}


		});
	e.preventDefault();
});



$(document).on("click",".addFav", function(e){
	var id = $(this).attr('href');

		$.ajax({

			url : "favoritos-ajax",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					$('.mensaje-favoritos-ajax').html("<div class='alert alert-success'>Producto Agregado a tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 1500 );
					$('#item-'+id).removeClass("btn-info addFav");
					$('#item-'+id).addClass("btn-danger  remFav");
					$('#item-'+id).html('<i class="fa fa-heart"></i> Quitar');
					$('.mensaje-favoritos-ajax').fadeOut( 2200 );
					

					
					
				}
				
				console.log(data);
			}


		});


		
		
		 e.preventDefault();

});




$(document).on("click", ".remFav", function(e){
	var id = $(this).attr('href');
		$.ajax({

			url : "quitar-favoritos-ajax",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					$('.mensaje-favoritos-ajax').html("<div class='alert alert-danger'>Producto eliminado de  tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 1500 );
					$('#item-'+id).removeClass("btn-danger remFav");
					$('#item-'+id).addClass("addFav btn-info My-Align");
					$('#item-'+id).html('<i class="fa fa-heart"></i> Agregar');
					$('.mensaje-favoritos-ajax').fadeOut( 2200 );

					
					
				}
				
				console.log(data);
			}


		});

		e.preventDefault();

});
/*$('#contador').keyup(function(){
var cont = $('#contador').val();
$.ajax({

			url : "add/fav",
			dataType: "json",
			type : "post",
			data : { id_produc : $(this).attr('href')},
			success : function(data){

				
			}


		});
var cambio = cont.replace(/ /g,'-');

$('#contador-res').html(cambio);
});*/


	
	


	/*$(".addFav").on( 'click', function(e){

		var id = $(this).attr('href');

		$.ajax({

			url : "favoritos-ajax",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					$('.mensaje-favoritos-ajax').html("<div class='alert alert-success'>Producto Agregado a tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 2500 );
					$('#item-'+id).removeClass("btn-info addFav");
					$('#item-'+id).addClass("btn-danger  remFav");
					$('.mensaje-favoritos-ajax').fadeOut( 3000 );
					

					
					
				}
				
				console.log(data);
			}


		});


		
		
		 e.preventDefault();
		
	});*/

	/*$(".remFav").on("click", function(e){
		var id = $(this).attr('href');
		$.ajax({

			url : "quitar-favoritos-ajax",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					$('.mensaje-favoritos-ajax').html("<div class='alert alert-danger'>Producto eliminado de  tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 2500 );
					$('#item-'+id).removeClass("btn-danger remFav");
					$('#item-'+id).addClass("addFav btn-info My-Align");
					$('#item-'+id).html('<i class="fa fa-heart"></i>');
					$('.mensaje-favoritos-ajax').fadeOut( 3000 );

					
					
				}
				
				console.log(data);
			}


		});

		e.preventDefault();
	});*/
	//FUNCION PARA TRAER LA LISTA DE EMPRESAS DE ACUERDO AL SECTOR QUE FILTRE EL USUARIO###########################################

	$("a.cat-lista").click( function(e){
			var cat = $(this).attr('href');
			$('.empresas-container').empty();
			$('#sel-ciudades').val(0);
			$('#sel-barrio').empty();
			$("a.cat-lista").toggleClass("selected");
			

			$.ajax({
			url : "get/cat",
			dataType: "json",
			type : "post",
			data : { id_cat : $(this).attr('href')},
			success : function(data){

				if(data != null){
					for(var i in data){
						var empresas = "<div class='detail fadeInUp animated-element empresa'><a href='/empresa/"+data[i].nombre_publico+"' class='hoverBorder'><span class='hoverBorderWrapper'><img src="+data[i].sector.img+" width='170px' height='90px'><span class='hoverBorderInner'><span class='readMore'>"+data[i].sector.nom_sector+"</span></span>  </span></a> <div class='seperator'></div>  <p><h4><span class='label label-success'>"+data[i].razon_social+"</span></h4><small>"+data[i].desc_breve+"</small></p><p><a href='/empresa/"+data[i].nombre_publico+"' class='btn btn-info'>contacto</a><a href='"+data[i].id+"' class='addFav  btn btn-warning'>fav <i class='fa  fa-heart'></i> </a></p></div>";
							
								
							$('.empresas-container').append(empresas);

						
					}

					

				}
				console.log(data);


			}
		


		});		
		
		e.preventDefault();
	});
//FUNCION QUE RETORNA LA LISTA DE EMPRESAS SEGUN LA CIUDAD QUE EL USUARIO SELECCIONES 

function lista_empresas()
{
		$.ajax({
		url : "get/empresas-ciudad",
		dataType: "json",
		type : "post",
		data : {ciudad_id: $('#sel-ciudades').val()},
		success : function(data){

			if(data != null){
				for(var i in data){
					var empresas = "<div class='detail fadeInUp animated-element empresa'><a href='/empresa/"+data[i].nombre_publico+"' class='hoverBorder'><span class='hoverBorderWrapper'><img src="+data[i].sector.img+" width='170px' height='90px'><span class='hoverBorderInner'><span class='readMore'>"+data[i].sector.nom_sector+"</span></span>  </span></a> <div class='seperator'></div>  <p><h4><span class='label label-success'>"+data[i].razon_social+"</span></h4><small>"+data[i].desc_breve+"</small></p><p><a href='/empresa/"+data[i].nombre_publico+"' class='btn btn-info'>contacto</a>  </p></div>";
						
							
						$('.empresas-container').append(empresas);

					
				}


				

			}


			console.log(data);


		}
		


		});
}

function barrios()
{


	$.ajax({
		url : "get/barrios",
		dataType: "json",
		type : "post",
		data : {ciudad_id: $('#sel-ciudades').val()},
		success : function(data){
			if(data){
				for( var i in data)
				{
					var opt = "<option value='"+data[i].id+"'>"+data[i].barrio+"</option>";
					$('#sel-barrio').append(opt);

				}
				//$('#buscador').val(data[1].barrio);


				console.log(data[1].id+ data[1].barrio);
			}
			if(data){
				console.log(data);
			}
		}


	});
	 
	/*$.post("/get/barrios",

			{
				ciudad_id : $('#sel-ciudades').val()
			},
			function( data )
			{
				
				alert(data.barrios);
				
				

			},'json'
		);*/
}


function categorias_list()
{
	var cat = $(this).attr('href');

	/*$.ajax({
		url : "get/cat",
		dataType: "json",
		type : "post",
		data : { id_cat : $(this).attr('href')},
		success : function(data){
			console.log(data);


		}
		


	});*/
console.log(cat);
	
}
