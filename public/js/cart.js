$(document).on('click','.addCart', function(e){
	var id_producto = $(this).attr('id');

	

	var totalItems = $('#v_cart_t_i').val();
	var c_carro_user = $('#valor-total-carro-frm').val();
	

	 

		$.ajax({

			url : "../addcartAjax3",
			dataType: "json",
			type : "post",
			data : { id_producto : id_producto},
			success : function(data){
				if(data.estado.estado == 1)
				{
					var cart = '';
					
					var totalCart = data.estado.total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
					var precioPro = data.producto.precio.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

						cart += '<tr class="miniCartProduct">';
			                    cart += '<td style="width:20%" class="miniCartProductThumb"><div> <a href="#"> <img src="../../'+data.producto.imagen+'" alt="img"> </a> </div></td>';
			                    cart += '<td style="width:40%"><div class="miniCartDescription">';
		                        cart += '<h4> <a href="#"> '+data.producto.nombre+' </a> </h4>';
		                        
		                        cart += '<div class="price"> <span> $'+precioPro+' </span> </div>';
		                      cart += '</div></td>';
			                    cart += '<td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>';
			                    cart += '<td  style="width:15%" class="miniCartSubtotal"><span> </span></td>';
			                    cart += '<td  style="width:5%" class="delete"><a > x </a></td>';
		                  	cart += '</tr>';
				
					/*cart += '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">';
                              cart += '<span class="pull-left"><i class="glyphicon glyphicon-shopping-cart icon-cart"></i></span>';
                              cart += '<span class="pull-left">Compras pendientes: <span id="total-items-cart"> '+data.estado.pendientes+'</span></span>';
                              cart += '<span class="pull-right"><i class="fa fa-caret-down"></i></span>';
                              cart += '<input type="hidden" id="v_cart_t_i" value="'+data.estado.total+'">';
                          cart += '</button>';

                          cart += '<ul class="dropdown-menu cart-content" role="menu">';
                          		cart  += '<li class="divider"></li>';
                          	
                                cart  += '<li><a href="../../store/cart" class="btn btn-info"> PAGAR Total: $<span id="valor-total-carro">'+totalCart+'</span></a></li>';
                                cart  += '<input type="hidden" id="valor-total-carro-frm" value="'+data.estado.total+'">';
                          cart  += '</ul>';*/

                          
                          $('.subtotal').text(totalCart);
                          $('.bCart').append(cart);
                          $('.msg-ajax-cart').html('<div class="contenedor-msg-ajax">Producto agregado al carrito</div>');
                          $('.contenedor-msg-ajax').fadeOut(3000);

					console.log(data);
				}
				
			}

				


		});

	
	e.preventDefault();
});
$(document).on('click','#btn-carrito',function(e){
	var id = $('#product_id').val();
	var cantidad = $('#qty-id').val();


	$.ajax({

			url : "../../addcartAjax2",
			dataType: "json",
			type : "post",
			data : { id_producto : id, cantidad : cantidad},
			success : function(data){
				if(data.estado.estado == 1)
				{
					var cart = '';
					var totalCart = data.estado.total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
					cart += '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">';
                              cart += '<span class="pull-left"><i class="glyphicon glyphicon-shopping-cart icon-cart"></i></span>';
                              cart += '<span class="pull-left">Compras pendientes: <span id="total-items-cart"> '+data.estado.pendientes+'</span></span>';
                              cart += '<span class="pull-right"><i class="fa fa-caret-down"></i></span>';
                              cart += '<input type="hidden" id="v_cart_t_i" value="'+data.estado.total+'">';
                          cart += '</button>';

                          cart += '<ul class="dropdown-menu cart-content" role="menu">';
                          		cart  += '<li class="divider"></li>';
                                cart  += '<li><a href="../../store/cart" class="btn btn-info"> PAGAR Total: $<span id="valor-total-carro">'+totalCart+'</span></a></li>';
                                cart  += '<input type="hidden" id="valor-total-carro-frm" value="'+data.estado.total+'">';
                          cart  += '</ul>';
                           $('.subtotal').text(totalCart);
                          $('#contenedor_compras').html(cart);
                          $('.msg-ajax-cart').html('<div class="contenedor-msg-ajax">Producto agregado al carrito</div>');
                          $('.contenedor-msg-ajax').fadeOut(4000);

					console.log(data);
				}
				
			}

				


		});
	e.preventDefault();
});

$(document).on('change','#qty-id', function(e){
	var cantidad = $('#qty-id').val();
	alert(cantidad);

	
		var precio = $('#precio_unitario').val();
		var subtotal = (cantidad * precio);
		var total = subtotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		$('#qty-id').val(cantidad);

		$('#precio_publico').text(total);
	
	
});