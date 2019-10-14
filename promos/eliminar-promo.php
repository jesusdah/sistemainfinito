<?php 
if (isset($_GET['id_eliminar']))
		$id_eliminar=$_GET['id_eliminar'];
	//Conexion a base de datos
		$conex = mysqli_connect("localhost","root","","base7");
	//sentencia sql
		 $sql2= "delete from promos where id = '$id_eliminar'";
	//Ejecutar sentencia SQL	 
		 $resul=mysqli_query($conex,$sql2);
		 


		 if (!$resul) {

	echo "eliminacion fallida";
	
} else {

	echo '<script>';
	 echo 'alert("promocion eliminacion con exito");';
	 echo 'window.location.href="../promociones.php";'; 
	 echo '</script>';
}




 ?>