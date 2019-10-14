
<?php 


session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario'] = $usuario;

// cenectar base de datos

$conex = mysqli_connect("localhost","root","","base7");
//cosulta
$consulta="SELECT * FROM usuarios7 WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);


if ($filas>0) {
	
header("location:panelcontrol.php");
}else{ 
header("location:login.php");
 }


mysqli_free_result($resultado);
mysql_close($consulta);


session_destroy();




 ?>