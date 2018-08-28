base_url = "http://localhost:81/Semana3/AppTienda/";
$(function(){

	$("#nuevo").click(function(){
		location.href= base_url + "system/vista/categoria_nuevo.php";
	})



	$(".editar").click(function(){
		codigo = $(this).parent().attr("id");
		alert(codigo);
	});
});