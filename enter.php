
<?php 


session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario'] = $usuario;

// cenectar base de datos

$conex=mysqli_connect("localhost","root","","ventas");
//cosulta
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conex, $consulta);


$filas=mysqli_num_rows($resultado);


if ($filas>0) {
	
header("location:home.php");
}else{ 
header("Location: login.php?status=5");
 }


mysqli_free_result($resultado);














 ?>