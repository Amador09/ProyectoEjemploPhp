base_url = "http://localhost:81/ProyectoEjemploPhp/";
$(function(){

	$("#nuevo").click(function(){

		location.href= base_url + "system/vista/categoria_nuevo.php?accion=";
	})



	$(".editar").click(function(){
		codigo = $(this).parent().attr("id");
	 location.href=base_url+"system/vista/categoria_nuevo.php?accion=editar&txtCodigo="+codigo;

   
	});


$(".eliminar").click(function(){
		codigo = $(this).parent().attr("id");
if(confirm("Estas seguro de eliminar")){

	 location.href=base_url+"system/vista/categoria_eliminar.php?codigo="+codigo;
  alertify.success('Success message');
}

	});


	$("#btnAgregar").click(function(){
		//$("#modo").val("insertar");
		$("#frmPrincipal").submit();
	

	});

	$("#btnSalir").click(function(){
		location.href=base_url+"system/vista/categoria_index.php";
	});
});