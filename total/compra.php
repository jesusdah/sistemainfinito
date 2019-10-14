<?php 

	
include_once "../base_de_datos.php";

$id =$_POST["id"];
$existencia = $_POST["existencia"];

 

$sentencia = $base_de_datos->prepare("UPDATE productos SET existencia = ? WHERE id = ?;");
$resultado = $sentencia->execute([$existencia, $id]);

if (!$resultado) {

echo "modificacion fallida";

} else {
echo "modificacion existencia";
}




?>