<?php 


$conex = mysqli_connect("localhost","root","","ventas");



$categorias = $_POST["categorias"];




$regist = "INSERT INTO categorias (categorias) VALUES ('$categorias')";


$sentencia = mysqli_query($conex, $regist);
if (!$sentencia) {
	echo '<script>';
	 echo 'alert("producto no registrado");';
	 echo 'window.location.href="../total.php";'; 
	 echo '</script>';

}else {

echo '<script>';
	 echo 'alert("registro exitoso");';
	echo 'window.location.href="../total.php";'; 
	 echo '</script>';
}


mysqli_close($conex);

