<?php

include_once "../base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];
$categorias = $_POST["categorias"];
$caracteristica = $_POST["caracteristica"];
$promocion = $_POST["promocion"];
$imagen=$_FILES['foto'] ['name'];
$archivo=$_FILES['foto'] ['tmp_name'];

$ruta="foto";
$ruta=$ruta."/".$imagen;
move_uploaded_file($archivo,$ruta);
$conex = mysqli_connect("localhost","root","","ventas");
$verificar_codigo = mysqli_query($conex,"SELECT * FROM productos WHERE codigo = '$codigo'");

if (mysqli_num_rows($verificar_codigo) > 0){
	header("Location:../total.php?status=6");

	exit;
}


$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, descripcion, precioVenta, precioCompra, existencia,categorias,caracteristica,promocion,foto) VALUES (?, ?, ?, ?, ?,?,?,?,?);");
$resultado = $sentencia->execute([$codigo, $descripcion, $precioVenta, $precioCompra, $existencia ,$categorias, $caracteristica ,$promocion, $ruta]);










if($resultado === TRUE){
	header("Location:../total.php?status=1");
	exit;
}
header("Location:../total.php?status=5");


?>





