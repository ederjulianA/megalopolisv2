$(document).ready(function(){
	/*$('#mensaje-flash').fadeIn(2500);
	$('#mensaje-flash').fadeOut(3500);*/
	$('#sel-ciudades').change(function(){
		$('#sel-barrio').empty();
		barrios();
		$('.empresas-container').empty();
		lista_empresas();

	


	});
	$(document).on('change','#category',function(){


	
	//$('#category').change(function(){
		$('#subcat').empty();
		
		subcategorias();
	});

	preview_1();
	preview_2();
	preview_3();

	

});

$(document).on('click','#cantidad', function(){
	var cant_actual = $('#cantidad').val();
	var precio_unitario = $('#precio_unitario').val();
	var subtotal = (cant_actual * precio_unitario);
	$('#valor_total').val(subtotal);
	var np = subtotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	$('#subtotal').text("$"+np);
	$('#precio_total').text("$"+np);

});

function preview_1()
{
	$('#imagen').change(function(){
			var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview1 img').attr('src', e.target.result);
    	 }
         
         reader.readAsDataURL(this.files[0]);

	});
}


function preview_3()
{
	$('#imagen3').change(function(){
			var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview3 img').attr('src', e.target.result);
    	 }
         
         reader.readAsDataURL(this.files[0]);

	});
}



function preview_2()
{
	$('#imagen2').change(function(){
			var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview2 img').attr('src', e.target.result);
    	 }
         
         reader.readAsDataURL(this.files[0]);

	});
}
$(document).on("click","#btn-hacer-pregunta", function(e){
	var pregunta = $('#pregunta-user').val();
	var id_empresa = $('#empresa_id').val();
	var id_user = $('#user_id').val();


		$.ajax({

			url : "add/pregunta",
			dataType: "json",
			type : "post",
			data : { pregunta_f : pregunta, id_empresa_f : id_empresa, id_user_f : id_user},
			success : function(data){

				if(data){
					var nuevaPregunta = "";

					nuevaPregunta += '<div class="panel panel-default">';
						nuevaPregunta += '<div class="panel-heading">';
							nuevaPregunta += '<h4 class="panel-title">';
								nuevaPregunta += '<a class="  accordion-toggle collapsed " style="font-size:20px;" data-toggle="collapse" data-parent="#accordion" href="#'+data.id+'">'+data.pregunta+'??? <i class="fa fa-chevron-down btn btn-success"></i> </a>';
							nuevaPregunta += '</h4>';
						nuevaPregunta += '<div>';


						nuevaPregunta += '<div id="'+data.id+'" class="panel-collapse collapse" style="height: 0px;">';
								nuevaPregunta += '<div class="panel-body" style="font-style: oblique;">Te notificaremos cuando tu pregunta sea respondida</div>';

						nuevaPregunta += '</div>';
					nuevaPregunta += '</div>';

					$('.contenedor-preguntas').append(nuevaPregunta);
					$('#pregunta-user').val("");
					$('.mensaje-ajax').html('<span class="alert alert-danger">Has realizado tu pregunta con exito</span>');
					$('.mensaje-ajax').fadeIn(2500);
					$('.mensaje-ajax').fadeOut(2500);


					console.log(data);
					
					
				}
				
				
			}


		});
	
	

	e.preventDefault();
});


//funcion para remover un favorito de la lista delusuario
$(document).on("click", ".remFavList", function(e){
	var id = $(this).attr('href');
				$.ajax({

			url : "remo/lista/favs",
			dataType: "json",
			type : "post",
			data : { id_producto : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
					var num_favs = $('#num_favoritos').html();
					var num_favs_int = parseInt(num_favs);
					var total_favs = num_favs_int - 1;

					$('.mensaje-favoritos-ajax').html("<div class='alert alert-danger'>Producto eliminado de  tus favoritos</div>");
					$('.mensaje-favoritos-ajax').fadeIn( 1500 );
					$('#fav-'+id).fadeOut(1200);
					
					$('.mensaje-favoritos-ajax').fadeOut( 2200 );
					$('#num_favoritos').html(total_favs);

					
					
				}
				
				console.log(data);
			}


		});
	e.preventDefault();
});

$(document).on("click",".con-mapa", function(e){

	$('.empresas-container').addClass("hide-mapa");
	$('#btn-mapa').removeClass("con-mapa");
	$('#btn-mapa').addClass("sin-mapa");
	$('.contenedor-mapa').removeClass('hide-mapa');
	$('#btn-mapa').html("sin mapa");

	
	e.preventDefault();

});

$(document).on("click",".sin-mapa", function(e){

	$('.empresas-container').removeClass("hide-mapa");
	$('#btn-mapa').removeClass("sin-mapa");
	$('#btn-mapa').addClass("con-mapa");
	$('.contenedor-mapa').addClass('hide-mapa');
	$('#btn-mapa').html("ver mapa");

	
	e.preventDefault();

});



//funcion para suscribirse a una empresa
$(document).on("click",".remSus", function(e){

	var id = $(this).attr('href');
			$.ajax({

			url : "cancelar-suscripcion-ajax",
			dataType: "json",
			type : "post",
			data : { id_empresa : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
				
				
				$('#empresa-'+id).removeClass("Suscrito remSus"); 
				$('#empresa-'+id).addClass("Suscribir addSus");	
				$('#empresa-'+id).html("<span>Suscribir</span>");
				
						
					

					
					
				}
				
				console.log(data);
			}


		});

	e.preventDefault();
});




//funcion para suscribirse a una empresa
$(document).on("click",".addSus", function(e){

	var id = $(this).attr('href');
			$.ajax({

			url : "suscripcion-ajax",
			dataType: "json",
			type : "post",
			data : { id_empresa : $(this).attr('href')},
			success : function(data){

				if(data.estado == 1){
				
				
				$('#empresa-'+id).removeClass("Suscribir addSus");
				$('#empresa-'+id).addClass("Suscrito remSus");	
				$('#empresa-'+id).html("<span>Suscrito</span>");
				
						
					

					
					
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
					$('#item-'+id).html('<i class="fa fa-heart"></i> Quitar Favorito');
					$('.mensaje-favoritos-ajax').fadeOut( 2200 );
					

					
					
				}
				
				console.log(data);
			}


		});


		
		
		 e.preventDefault();

});



//funcion para remover un favorito de la lista
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
					$('#item-'+id).html('<i class="fa fa-heart"></i> Agregar Favorito');
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


	$('.menu-sectores li ').on('click', function(){
    $(this).addClass('active-menu').siblings().removeClass('active-menu');
});
	//FUNCION PARA TRAER LA LISTA DE EMPRESAS DE ACUERDO AL SECTOR QUE FILTRE EL USUARIO###########################################
	//<img src="+data[i].sector.img+" width='170px' height='90px'>
	//$("a.cat-lista").click( function(e){
		$(document).on("click","a.cat-lista", function(e){
			var cat = $(this).attr('href');
			$('.empresas-container').empty();

			$('#sel-ciudades').val(0);
			$('#sel-barrio').empty();
			
			

			$.ajax({
			url : "get/cat",
			dataType: "json",
			type : "post",
			data : { id_cat : $(this).attr('href')},
			success : function(data){

				if(data != null){
					$('.loader-container').html("<div class='loader-ajax'><img src='img/mega-imgs/723.gif' /></div>");
					for(var i in data){
						var empresas = "<div class='detail fadeInUp animated-element empresa'><a href='/empresa/"+data[i].nombre_publico+"' class='hoverBorder'><span class='hoverBorderWrapper'><img src="+data[i].logo+" width='auto' height='90px'><span class='hoverBorderInner'><span class='readMore'>"+data[i].sector.nom_sector+"</span></span>  </span></a> <div class='seperator'></div>  <p><h4><span class='label label-success'>"+data[i].razon_social+"</span></h4><small>"+data[i].desc_breve+"</small></p><p><a href='/empresa/"+data[i].nombre_publico+"' class='btn btn-info'>contacto</a></p></div>";
							
								
							$('.empresas-container').append(empresas);

						
					}

					$('.loader-container').html("");

					

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
					var empresas = "<div class='detail fadeInUp animated-element empresa'><a href='/empresa/"+data[i].nombre_publico+"' class='hoverBorder'><span class='hoverBorderWrapper'><img src="+data[i].logo+" width='auto' height='90px'><span class='hoverBorderInner'><span class='readMore'>"+data[i].sector.nom_sector+"</span></span>  </span></a> <div class='seperator'></div>  <p><h4><span class='label label-success'>"+data[i].razon_social+"</span></h4><small>"+data[i].desc_breve+"</small></p><p><a href='/empresa/"+data[i].nombre_publico+"' class='btn btn-info'>contacto</a>  </p></div>";
						
							
						$('.empresas-container').append(empresas);

					
				}


				

			}


			console.log(data);


		}
		


		});
}

function subcategorias()
{

	var cat_nom = $('#category option:selected').text();
	
		$.ajax({
		url : "subcats",
		dataType: "json",
		type : "post",
		data : {cat_id: $('#category').val()},
		success : function(data){
			if(data){
				for( var i in data)
				{
					var opt = "<option value='"+data[i].id+"'>"+data[i].nombre_sub+"</option>";
					$('#subcat').append(opt);

				}
				
				$('.mensaje-ajax-categorias').html("<span class='label label-success'>Escoge la Subcategoria de tu producto</span> ");

				
			}
			if(data.estado == 0){
				$('#subcat').html("<option value='0'>No hay categorias </option>");
				$('.mensaje-ajax-categorias').html("<span class='label label-danger'>No se han definido categorias, Disculpa las molestias</span> ");
			}
			
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
