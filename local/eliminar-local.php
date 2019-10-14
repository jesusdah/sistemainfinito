<?php 
if (isset($_GET['id_eliminar']))
		$id_eliminar=$_GET['id_eliminar'];
	//Conexion a base de datos
		$conex = mysqli_connect("localhost","root","","ventas");
	//sentencia sql
		 $sql2= "delete from gastos where id = '$id_eliminar'";
	//Ejecutar sentencia SQL	 
		 $resul=mysqli_query($conex,$sql2);
		 


		 if (!$resul) {

	header("Location: ../local.php");
	
} else {

	header("Location: ../local.php?status=7");
}




 ?>