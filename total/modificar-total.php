<?php 

	
include_once "../base_de_datos.php";

$id =$_POST["id"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];
$categorias = $_REQUEST["categorias"];
$caracteristica = $_POST["caracteristica"];
$promocion = $_POST["promocion"];


$imagen=$_FILES['foto'] ['name'];
$archivo=$_FILES['foto'] ['tmp_name'];

$ruta="foto";
$ruta=$ruta."/".$imagen;

move_uploaded_file($archivo,$ruta);


 

$sentencia = $base_de_datos->prepare("UPDATE productos SET codigo = ?, descripcion = ?, precioCompra = ?, precioVenta = ?, existencia = ?  ,categorias = ?, caracteristica = ?, promocion = ? ,foto = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $descripcion, $precioCompra, $precioVenta, $existencia ,$categorias,$caracteristica,$promocion, $ruta, $id]);

if (!$resultado) {

header("Location:../total.php?status=8");

} else {

header("Location:../total.php?status=7");
}




?>