<?php 

require_once '../libreria/conexion.php';

$bd= new Conexion();

$rs=$bd->select("select * from categoria");
$fila="";
foreach ($rs as  $value) {
	$fila.="<tr id='".$value["id_cat"]."'>";
	$fila.="<td>".$value['id_cat']."</td>";
	$fila.="<td>".$value['descripcion']."</td>";
	$fila.="<td class='editar'><a href='#'>Editar</a></td>";
	$fila.="<td class='eliminar'><a href='#'>Eliminar</a></td>";
	
	$fila.="</tr>";

}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		thead{
 			background: #000;
 			color: #FFF;
 			size: 20px;
 			font-weight: bold;
 		}
 	</style>
 	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
 	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
 	<script type="text/javascript" src="../../js/categoria.js"></script>
 </head>
 <body>

 	<h1>Crud Categorias</h1>
 	<ul>
 		<li id="nuevo"><a href="categoria_nuevo.php">Nuevo</a></li>

 	</ul>
  <table  class="table col-sm-6">
  	<thead class="thead-dark">
  		<td >Codigo</td>
  		<td>Descripicon</td>
  			<td   colspan="3" align="center">Acciones</td>
  	</thead>
 	
<?php echo $fila; ?>

 </table>

 </body>
 </html>