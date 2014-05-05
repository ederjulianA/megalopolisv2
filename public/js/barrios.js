$(document).ready(function(){
	$('#sel-ciudades').change(function(){
		$('#sel-barrio').empty();
		barrios();
		$('.empresas-container').empty();
		lista_empresas();

	


	});

	

});

$('#contador').keyup(function(){
var cont = $('#contador').val();
var cambio = cont.replace(/ /g,'-');

$('#contador-res').html(cambio);
});

	$(".addFav").click( function(e){

		var id = $(this).attr('href');
		
		 e.preventDefault();
		
	});
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
						var empresas = "<div class='detail fadeInUp animated-element empresa'><a href='/empresa/"+data[i].nombre_publico+"' class='hoverBorder'><span class='hoverBorderWrapper'><img src="+data[i].sector.img+" width='170px' height='90px'><span class='hoverBorderInner'><span class='readMore'>"+data[i].sector.nom_sector+"</span></span>  </span></a> <div class='seperator'></div>  <p><h4><span class='label label-success'>"+data[i].razon_social+"</span></h4><small>"+data[i].desc_breve+"</small></p><p><a href='/empresa/"+data[i].nombre_publico+"' class='btn btn-info'>contacto</a>  </p></div>";
							
								
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
