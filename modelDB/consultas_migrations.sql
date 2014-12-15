SELECT empresas.id, almacen.precio_detal, almacen.cantidad,producto.imagen,producto.img1,producto.img2,producto.img3, producto.nombre, producto.slug,producto.categoria,producto.subcat_id, producto.descripcion, producto.estado, producto.created_at, producto.updated_at
FROM `almacen` 
JOIN producto
ON almacen.producto = producto.id
JOIN categorias

ON producto.categoria = categorias.id

JOIN sedes

ON almacen.sede = sedes.id

JOIN empresas

ON sedes.empresa_id = empresas.id 


WHERE almacen.sede =21

/*29 cod sport center
	sedes 20, 21
	services.msc
	stetikline sede 24
*/