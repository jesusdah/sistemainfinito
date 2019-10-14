
<?php 


session_start();
$usuario=$_POST['admin'];
$clave=$_POST['clave'];
$_SESSION['admin'] = $usuario;

// cenectar base de datos

$conex=mysqli_connect("localhost","root","","ventas");
//cosulta
$consulta="SELECT * FROM administrador7 WHERE admin='$usuario' and clave='$clave'";

$resultado=mysqli_query($conex, $consulta);


$filas=mysqli_num_rows($resultado);


if ($filas>0) {
	
header("location:../admin.php");
}else{ 
echo '<script>';
	 echo 'alert("acceso denegado");';
	 echo 'window.location.href="../home.php";'; 
	 echo '</script>';
 }


mysqli_free_result($resultado);





 ?>