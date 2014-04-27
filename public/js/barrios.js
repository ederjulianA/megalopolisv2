$(document).ready(function(){
	$('#sel-ciudades').change(function(){
		$('#sel-barrio').empty();
		barrios();

	


	});

	

});

	$(".addFav").click( function(e){

		var id = $(this).attr('href');
		console.log(id); 
		 e.preventDefault();
		
	});

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
