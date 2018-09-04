<?php
require_once "../libreria/conexion.php";
$bd= new Conexion();

$accion = $_REQUEST["accion"];

if($accion == ""){
$codigo="";
$nombre="";

$modo="insertar";

if(isset($_REQUEST["modo"])){

	$modo=$_REQUEST["modo"];
		$id=$_REQUEST["txtCodigo"];
		$nombre=$_REQUEST["txtNombre"];

	if($modo=="insertar"){
	
		$sql="insert into categoria(descripcion)values('".$nombre."')";
		
		$bd->insert($sql);

		header("Location:categoria_index.php");
	}
	else if ($modo="actualizar") {
         $sql= "update categoria set descripcion='".$nombre."' where id_cat='".$id."'";
         
         $bd->select($sql);

		header("Location:categoria_index.php");
	}
}

}

elseif ($_REQUEST["accion"]=="editar") {//Editar
	$codigo=$_REQUEST["txtCodigo"];
	$sql="select * from categoria where id_cat='".$codigo."'";
	$rs=$bd->select($sql);
	$nombre=$rs[0]["descripcion"];

	$modo = "actualizar";
	

}





 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>categoria nuevo</title>
 	<style type="text/css">
 		#Alerta{
 			display: none;
 		}
 	</style>
 	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../../alertifyjs/css/alertify.css">
 	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
 	<script type="text/javascript" src="../../js/categoria.js"></script>
 	<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
 	<script type="text/javascript" src="../../alertifyjs/alertify.js"></script>

 </head>
 <body>

 	<div id="Alerta" class="alert alert-success" data-dismiss="alert" role="alert">
  A simple success alert—check it out!
</div>

 <form id="frmPrincipal">
 	<div class="form-group" >
 		<label>Id</label>
 		<input class="form-control col-sm-4" type="text" name="txtCodigo" id="txtCodigo" value="<?php echo $codigo?>">
 		<label>Nombre Categoria</label>
 		<input  class="form-control col-sm-4" type="text" name="txtNombre" id="txtNombre" value="<?php echo $nombre?>">
 	</div>
 	<button id="btnAgregar" class="btn btn-success">Agregar</button>
 	<button type="button" id="btnSalir" class="btn btn-danger">Salir</button>

<!-Modo insertar ,actualizar->

 	<input type="text" name="modo" id="modo" value="<?php echo $modo ?>">

 	<!-Modo nuevo->
 	<input type="hidden" name="accion" id="accion">

 </form>
 </body>
 </html>