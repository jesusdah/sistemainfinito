<?php 



session_start();



$usuario = $_SESSION ;
if ($usuario == null || $usuario=''){
	echo '<script>';
	 echo 'alert("acceso denegado ");';
	 echo 'window.location.href="login.php";'; 
	 echo '</script>';


	 die();
	  }
session_destroy();
header("location:login.php");











 ?>