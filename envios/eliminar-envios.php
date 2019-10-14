
<?php 
if (isset($_GET['id_eliminar']))
		$id_eliminar=$_GET['id_eliminar'];
	//Conexion a base de datos
		$conex = mysqli_connect("localhost","root","","ventas");
	//sentencia sql
		 $sql= "delete from envios where id = '$id_eliminar'";
	//Ejecutar sentencia SQL	 
		 $resultado=mysqli_query($conex,$sql);
		 


		 if (!$resultado) {

	header("Location: ../envios.php?status=6");
	
} else {

header("Location: ../envios.php?status=5");
}




 ?>