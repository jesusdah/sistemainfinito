<?php 




$conex = mysqli_connect("localhost","root","","base7");
$id = mysqli_real_escape_string($conex, $_POST["id"]);
$codigo =$_POST["codigo"];
$nombre = $_POST["nombre"];
$caracterristica = $_POST["caracterristica"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];




$regist = "INSERT INTO promos (codigo,nombre,caracterristica,cantidad,precio) VALUES ('$codigo','$nombre','$caracterristica','$cantidad','$precio')";




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





 ?>