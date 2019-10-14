<?php 

include_once "../base_de_datos.php";


$categorias = $_POST["categorias"];




$regist = "INSERT INTO categorias (categorias) VALUES ('$categorias')";

$sentencia = $base_de_datos->prepare("INSERT INTO categorias(categorias) VALUES (?);");
$resultado = $sentencia->execute([$categorias]);

if ($resultado) {
	
	header("Location:../total.php?status=11");
	 

}else {


	header("Location:../total.php?status=12");
	
 }



