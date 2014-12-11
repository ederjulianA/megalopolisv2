$(document).ready(function(){
	
	preview_1();
	preview_2();
	preview_3();

});


$(document).on('change','#category',function(){


	
	//$('#category').change(function(){
		$('#subcat').empty();
		loadsubcat();
		subcategorias();
	});


function loadsubcat()
{
		var cat_nom = $('#category option:selected').text();
	
		$.ajax({
		url : "loadsubcat",
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


function subcategorias()
{

	var cat_nom = $('#category option:selected').text();
	
		$.ajax({
		url : "subcat",
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



//FUNCION SEO SLUG PARA NUEVO PRODUCTO"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""

$(document).on('keyup','#product_name', function(){
		var product_name = ""; // create your variables


		if($("#product_name").val()!=""){
		product_name = $("#product_name").val().toLowerCase().replace(/ +/g,'_').replace(/[ñ]/g,'n').replace(/['àáâãäåÁ']/g,'a').replace(/['èéêëÉ']/g,'e').replace(/['ìíîïÍ']/g,'i').replace(/['òóôõöÓ']/g,'o').replace(/['ùúûüÚ']/g,'u').replace(/[^a-z0-9-_]/g,'').trim();
		}
		$('#seo').val(product_name); 
		$('#seourl').text(product_name); 

});

$(document).on('change','#product_name', function(){
		var product_name = ""; // create your variables
		var seo ="";


		if($("#product_name").val()!=""){
		product_name = $("#product_name").val().toLowerCase().replace(/ +/g,'_').replace(/[ñ]/g,'n').replace(/['àáâãäåÁ']/g,'a').replace(/['èéêëÉ']/g,'e').replace(/['ìíîïÍ']/g,'i').replace(/['òóôõöÓ']/g,'o').replace(/['ùúûüÚ']/g,'u').replace(/[^a-z0-9-_]/g,'').trim();
		}

		if($("#seo").val()!=""){
		seo = $("#product_name").val().toLowerCase().replace(/ +/g,'_').replace(/[ñ]/g,'n').replace(/['àáâãäåÁ']/g,'a').replace(/['èéêëÉ']/g,'e').replace(/['ìíîïÍ']/g,'i').replace(/['òóôõöÓ']/g,'o').replace(/['ùúûüÚ']/g,'u').replace(/[^a-z0-9-_]/g,'').trim();
		}
		$('#seo').val(product_name); 
		$('#seourl').text(product_name); 

});



$(document).on('keyup','#seo', function(){
		var seo = ""; // create your variables


		if($("#seo").val()!=""){
		seo = $("#seo").val().toLowerCase().replace(/ +/g,'_').replace(/[ñ]/g,'n').replace(/['àáâãäåÁ']/g,'a').replace(/['èéêëÉ']/g,'e').replace(/['ìíîïÍ']/g,'i').replace(/['òóôõöÓ']/g,'o').replace(/['ùúûüÚ']/g,'u').replace(/[^a-z0-9-_]/g,'').trim();
		}
		$('#seo').val(seo); 
		$('#seourl').text(seo); 

});


//PREVIEW DE LAS IMAGENES 

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