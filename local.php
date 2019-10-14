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
	<title>INFINITO 7 GASTO DE LA EMPRESA</title>
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
$sentencia = $base_de_datos->query("SELECT * FROM gastos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>



<!-- modal modificar gastos -->


	<div class="modal fade " id="ventana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
  

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

		
       

      <div class="modal-body"> 

				      	<form action="local/modifica-prod.php" method="post">
				<input class="form-control input-sm txt" type="text" hidden="" id="idpr" name="id"value="idpr ">
				<input class="form-control input-sm txt" readonly="" type="text" id="codigo" name="codigo"value="codigo " placeholder="codigo">
				<input class="form-control input-sm txt" type="text" id="nombre" name="nombre" value="nombre" placeholder="nombre">
				<input class="form-control input-sm txt" type="text" id="estado" name="estado" value="estado" placeholder="estado">
				
				<input class="form-control input-sm Txt" type="text" id="cantidad" name="cantidad" value="cantidad" placeholder="cantidad">
				
				<textarea class="form-control tarea input-sm txt" type="text" id="caracterristica" name="caracteristica" value="caracterristica" placeholder="caracterristica"></textarea>
				<input class="form-control input-sm txt" type="text" id="precio" name="precio" value="precio" placeholder="precio" >
<p align="center"><input type="submit" name="actualizar" id="actualizaradmin" class="btn registrar btn-secondary" value="Actualizar"></p>



</form>
  
      </div>
             
    </div>
  </div>
</div>




	<!-- Notifications area -->
	
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

	 <div class="categorias"><img  src="images/icons/investigacion.png"   width="70" height="70" ></div>
			<div class="full-width header-well-text">
				
		<img src="images/Infinito.png">
				
				
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<br>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo productos
							</div>
							<div class="full-width panel-content">
								
									<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Producto registrado correctamente
						</div>
					<?php
				}else if($_GET["status"] === "4"){
					?>
					<div class="alert alert-warning">
							<strong>Error:</strong> Algo salió mal mientras se realizaba el registro
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert alert-danger">
							<strong>Error: </strong>Codigo existente, Ingresar otro codigo o verifivar codigo en el listado
						</div>
					<?php
				}
			}
		?>		
						
								<form method="post" action="local/registro_local.php" >
									<label class="labelp">Codigo</label>
			<input  type="text" required="" class="form-control input-sm" id="codigoV" name="codigo">	
				<label class="labelp" >Nombre</label>
			<input  type="text" required="" class="form-control input-sm" id="nombreV" name="nombre">					
			<label class="labelp">Cantidad o capacidad </label>
			<input type="text" required="" class="form-control input-sm" id="cantidadV" name="cantidad">
			
			<label class="labelp">Caracterristica</label>
			<textarea  id="caracteristicaV" required="" name="caracteristica" rows="3" cols="48" class="form-control tarea input-sm"></textarea>
			<label class="labelp">Estado del producto</label>
		
			<input type="text" required="" class="form-control input-sm" id="cantidadV" name="estado"><br>
			<label class="labelp">Precio</label>
		
			<input  type="number" required="" class="mdl-textfield__input form-control input-sm" id="precioV" name="precio">
											
											
											<button class=" btn buscar btn-primary" name="guardar">Registrar</button>


																</form>

								</div>
							
</div>

								


</div>
							
		
					
							<div class="table container">
									
        <div class="row">
                <div class="col-lg-12">		
               <a class="btn btn-info" href="pdf/pdfgastos.php"><i class="zmdi zmdi-file"></i></a>	
<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "7"){
					?>
					<div class="alert alert-primary">
							<strong>Correcto:</strong> producto eliminado exitosamente
						</div>
					<?php
				}else if($_GET["status"] === "8"){
					?>
					<div class="alert alert-success">
							<strong>Correcto:</strong> producto modificado exitosamente
						</div>
					<?php
				}else if($_GET["status"] === "9"){
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> El producto no se pudo modificar
						</div>
					<?php
				}
				
			}
		?>
			<div class="table-responsive">
		<table id="example"  class="table tablas table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" style="width:100%">
      
            <thead class="success">
                <tr>
                    
                    <th>Código</th>
                    <th >Nombre</th>
                    <th> <center>Caracteristica</center></th>
                    <th>Estado</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalGasto = 0;
                foreach($productos as $producto){ 


$datos=$producto->id."||".
	  $producto->codigo."||".
	    $producto->nombre."||".
     $producto->estado."||".
     $producto->caracteristica."||". 
     $producto->cantidad."||".  
   $producto->precio;
$totalGasto = $totalGasto + $producto->precio;

					?>
                <tr>
                    
                    <td ><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->nombre ?></td>
                  <td>
                  <textarea readonly="" id="caracteristicaV" placeholder="<?php echo $producto->caracteristica ?>" values ="" name="caracteristica" rows="3" cols="48" class="form-control tarea input-sm"></textarea>	
                  </td>
					<td><?php echo $producto->estado?></td>
                    
               	<td><?php echo $producto->cantidad ?></td>
					<td><?php echo number_format( $producto->precio,2,',','.'); ?> BS</td>
                 	
                    
                  <td><a class="btn btn-danger" href="<?php echo "local/eliminar-local.php?id_eliminar=" . $producto->id?>"><i class="zmdi zmdi-delete" ></a></td>
					
							<td><a href="#ventana" class="btn btn-secondary"  data-toggle="modal"  onclick="agregarlocal('<?php echo $datos ?>')"><p align="center"><img class="icon" class="btn btn-secondary" src="images/icons/modificar.png" ></p></a>  </td>
                  
                </tr>

                <?php } ?>

            </tbody>


           <tr><td colspan="6" > <h2 class="tittles">Total:</h2><h3><?php echo number_format($totalGasto,2,',','.'); ?> </h3></td></tr>
        </table>
		</div>	
	</div>
	</div>	
			
				</div>
			</div>
		</div>
						</div>
					</div>
				</div>
			</div>

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


		<section class="full-width" style="margin: 30px 0;">
		
	</section>
	
	
</body>

</html>