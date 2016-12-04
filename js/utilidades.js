$(document).ready(inicio);

function inicio(){


	$(".boton_comprarjs").click(cargarcarrito); 
	/*$("#comprasjs").load("estadocarrito.php");*/	

}
function cargarcarrito(){


$("#comprasjs").load("estadocarrito.php?producto_id="+$(this).val());
$("#carritoimg").attr("src","img/carrito_lleno.jpg");
};


