<?php 
require_once "../libreria/conexion.php";
$bd= new Conexion();

$codigo = $_REQUEST["codigo"];
$sql = "delete from categoria where id_cat='".$codigo."'";
$bd->select($sql);
	header("Location:categoria_index.php");


 ?>