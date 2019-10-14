
<?php 


session_start();

$usuario = $_SESSION ;
if ($usuario == null || $usuario=''){
	
	 
		header("Location: login.php");
	

die();


} 

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INFINITO 7 ENVIOS </title>
		<link rel="icon" type="image/png" href="images/icons/logo.ico"/>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/modal-admi.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/modificacion.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main2.js" ></script>
	<script src="js/fucion.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/traduccion.js"></script>
	<script src="js/jquery-3.3.1.js"></script>
</head>
<body>

	<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM envios;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>




	
	<!-- Notifications area -->
	<
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					
					<li  class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>
					<li class=" text-center text-condensedLight noLink" ><small> <?php echo $_SESSION['usuario']; ?></small></li>
					<li class="noLink">
						
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- navLateral -->
		<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> control del inventario
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					
				</div>
				
			</figure>
			<div class="full-width tittles navLateral-body-tittle-menu">
				<img src="images/Infinito Png.png" alt="Avatar" class="img-responsive">
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Inicio
							</div>
						</a>
					</li>



					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Administrador
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="#" class="abrir" id="abrir">
									
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										administrar usuarios
									</div>
								</a>
							</li>
							
			

						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Categorias
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="local.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-balance"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										  Gastos
									</div>
								</a>
							</li>

					<li class="full-width">
						<a href="total.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								inventario 
							</div>
						</a>
					</li>
							<li class="full-width">
								<a href="ventas.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-card"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Ventas
									</div>
								</a>
							</li>
							

			<li class="full-width">
						<a href="envios.php" class="full-width">
							<div class="navLateral-body-cl">
							<i class="zmdi zmdi-truck"></i>	
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Envios
							</div>
						</a>
					</li>

							
						</ul>
					</li>

					
					<li class="full-width">
						
					</li>
					
					
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			
			 <div class="categorias"><img  src="images/icons/camion.png"   width="90" height="90" ></div>
			<div class="full-width header-well-text">
				
		<img src="images/Infinito.png">
		</section>
			<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			
			
			
				
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						
						
        <div class=" table-responsive row">
        	
                <div class="col-lg-12">
                    <div class="">  
                    	
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Registro del envio realizado exitosamente 
						</div>
					<?php
				}else if($_GET["status"] === "2"){
					?>
					<div class="alert alert-info">
							<strong>Error:</strong>Registro del envio fallido vuelva a intetarlo 
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert  alert-danger">
							<strong>Correcto: </strong>El envio fue eliminado
						</div>
					<?php
				}else{
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> Algo salió mal mientras se realizaba la venta
						</div>
					<?php
				}
			}
		?>














                             <table id="example"  class="table tablas table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" style="width:100%">

            
      
            <thead class="success">
                <tr>
                    
                    <th>Código</th>
                    <th >Nombre</th>
                    <th>Categorias</th>
                    <th>Estado de promocion</th>
                    <th>cantidad vendidaa</th>
                    <th>precio de venta</th>
                    <th>numero de guia</th>
                     <th>fecha</th>
                    <th>eliminar producto</th>
                   
                     
                    

                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto){ 




					?>
                <tr>
                    
                    <td ><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->nombre ?></td>
                  	<td><?php echo $producto->categorias?></td>
					<td><?php echo $producto->promocion?></td>
                    <td><?php echo $producto->cantidad ?></td>
					<td><?php echo $producto->precio?> BS</td>
					<td><?php echo $producto->numeroguia?> </td>
					<td><?php echo $producto->fecha?> </td>
                 	<td><a class="btn btn-danger" href="<?php echo "envios/eliminar-envios.php?id_eliminar=" . $producto->id?>"><i class="zmdi zmdi-delete"></a></td>
					
							
                  
                </tr>

                <?php } ?>

            </tbody>
        </table>         
                    </div>
                </div>
        </div>  
    </div>    
				<br>	<br>	<br>		
<div class="bg-modal" id="bg-modal">
	<div class="modal-contenido" id="flex">
		<div class="cerrar" id="cerrar" >+</div>
		<img src="images/icons/administrador.png" class="avatar">
<form action="admin/ingreso-admin.php" method="post">
	<input class="form-control texto input-sm" type="text" name="admin" placeholder="Admin">
	<input class="form-control texto input-sm" type="password" name="clave" placeholder="Clave">
<input type="submit" class="buscar btn-primary boton" name="guardar"value="Ingresar">



</form>



	</div>


</div>
<script src="js/moda.js"></script>

<script src="vendor/bootstrap.bundle.min.js.descarga"></script>
<script src="vendor/jquery-3.3.1.slim.min.js.descarga"></script>
	<script type="text/javascript" src="datatables/datatables.min.js"></script> 
				</div>
			</div>
		</div>
		

</body>

</html>