
<?php 
if (isset($_GET['id']))
		$id=$_GET['id'];
	//Conexion a base de datos
		$conex = mysqli_connect("localhost","root","","ventas");
	//sentencia sql
		 $sql= "delete from usuarios where id = '$id'";
	//Ejecutar sentencia SQL	 
		 $resultado=mysqli_query($conex,$sql);
		 


		 if (!$resultado) {

	header("Location: ../admin.php?status=3");
	
} else {

header("Location: ../admin.php?status=1");
}




 ?>