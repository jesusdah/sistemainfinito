
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
<title>INFINITO 7 INVENTARIO </title>
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
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


	







	 

<!-- modal modificar inventario  -->
	 	<div class="modal fade " id="ventana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
  

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
 
      <div class="modal-body"> 

				      	<form action="total/modificar-total.php" method="post" enctype="multipart/form-data">
				<input class="txt form-control input-sm" type="text" hidden="" id="idt" name="id"value="idpr ">
				<input class="txt form-control input-sm" type="text" id="codigot" readonly="" name="codigo" placeholder="codigo">
				<input class="txt form-control input-sm" type="text" id="nombret" name="descripcion"placeholder="nombre">
				
          
				<textarea class="txt tarea form-control input-sm" type="text" id="caracterristicat" name="caracteristica"  placeholder="caracterristica"></textarea>

					<input class="mdl-textfield__input form-control input-sm" type="number" id="cantidadt" name="existencia" placeholder="cantidad">
				
				
			
				<input class="mdl-textfield__input form-control input-sm" type="number" id="preciot" name="precioVenta"  placeholder="precio de compra">
				<input class="mdl-textfield__input form-control input-sm" type="number" id="preciocentat" name="precioCompra"  placeholder="precio de compra">

				<select class=" txt form-control input-sm" id="categoriat"  name="categorias">
				<option value="A">Seleccionar categoria</option>
				<?php
				$conex = mysqli_connect("localhost","root","","ventas");
				$sql="SELECT id_categorias,
				categorias
				from categorias";
				$result=mysqli_query($conex,$sql);

				while ($categorias=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $categorias[1] ?>"><?php echo $categorias[1] ?></option>
				<?php endwhile; ?>
			</select>
				<select class=" txt form-control input-sm" id="promociont" name="promocion">
				<option value="A">Seleccionar preferencia</option>
				
			     <option value="promocion activa">promocionar</option>
			     <option value="N/P">N/Promocionar</option>
				
				 
			</select>

<input type="file" class="fotos" id="fotot"  name="foto">




<p align="center"><input type="submit" name="actualizar" id="actualizaradmin" class="btn registrar btn-primary" value="Registrar"></p>

        



</form>
  
      </div>
             
    </div>
  </div>
</div>


	 	


<!-- modal categorias  -->
	 	<div class="modal fade " id="categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm " role="document">
    <div class="modal-content">
      <div class="modal-header">
  
 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      

      <div class="modal-body"> 

				      	<form action="total/nuevacate.php" method="post">
				
				
				<input class="txt form-control input-sm" type="text"  name="categorias" placeholder="categorias">
				



<input type="submit" name="actualizar" id="actualizaradmin" class="btn registrar btn-primary" value="Registrar">
        



</form>
  
      </div>
             
    </div>
  </div>
</div>

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

				
					
					
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
	
			</div>
			 <div class="categorias"><img  src="images/icons/almacenar.png"   width="70" height="70" ></div>
			<div class="full-width header-well-text">
				
		<img src="images/Infinito.png">
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo productos
							</div>
							<div class="full-width panel-content">
								<form method="post" action="total/inventario_reg.php" enctype="multipart/form-data" >
									<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Registro del producto exitoso
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert alert-danger">
							<strong>Error: </strong> Fallo el registro
						</div>
					<?php
				}else if($_GET["status"] === "6"){
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> El Código ingesado ya  existe, verifique el Código e intetelo de nuevo
						</div>
					<?php
				}
			}
		?>
							<label class="labelp" >Código</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" >

		<label class="labelp">Nombre</label>
		<input required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control input-sm">
		<label class="labelp">Caracteristica</label>
		<textarea id="caracteristicaV" name="caracteristica"  rows="3" cols="48" class="form-control tarea input-sm"></textarea>

		<label class="labelp" >Precio de venta</label>
		<input class="mdl-textfield__input form-control input-sm" name="precioVenta" required type="number" id="precioVenta" >

		<label  class="labelp" >Precio de compra</label>
		<input class="mdl-textfield__input form-control input-sm" name="precioCompra" required type="number" id="precioCompra" >

		<label class="labelp" >Existencia</label>
		<input class="mdl-textfield__input form-control input-sm" name="existencia" required  type="number" id="existencia" >
			
				<label class="labelp">Categoria</label>
				<select class="form-control input-sm" id="categorias" name="categorias">
				<option value="A">Seleccionar categoria</option>
				<?php
				$conex = mysqli_connect("localhost","root","","ventas");
				$sql="SELECT id_categorias,
				categorias
				from categorias";
				$result=mysqli_query($conex,$sql);

				while ($categorias=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $categorias[1] ?>"><?php echo $categorias[1] ?></option>
				<?php endwhile; ?>
			</select>
			<label class="labelp">promociones</label>
				<select class="form-control input-sm" id="categorias" name="promocion">
				<option value="A">Seleccionar preferencia</option>
				
			     <option value="promocion activa">promocionar</option>
			     <option value="N/P">N/Promocionar</option>
				
			</select>
				
			
	
<br>
<label  class="labelp">Imagen del producto </label>
                         <input type="file" class="fotos " name="foto">



									  <span class="btn buscar btn-primary" href="#categoria"  data-toggle="modal"  id="btnAgregaVenta">Agregar categoria</span>
				<input type="submit" class="btn buscar btn-secondary" name="crearventas" value="Agregar">
									</form>

<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "11"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Registro de catergorias exitosa
						</div>
					<?php
				}if($_GET["status"] === "12"){
					?>
						<div class="alert alert-info">
							<strong>Error</strong> Fallo el registro
						</div>
					<?php
				}
			 }
		?>			


							</div>
						</div>


</div></div></div>
					</div>

				
			<div class="table container">
        <div class="row">	

                <div class="col-lg-12">
                <a class="btn btn-info" href="pdf/pdfinventario.php"><i class="zmdi zmdi-file"></i></a>	
                	<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "7"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Modificacion exitosa 
						</div>
					<?php
				}else if($_GET["status"] === "8"){
					?>
					<div class="alert alert-danger">
							<strong>Error: </strong> Modificacion fallida
						</div>
					<?php
				}else if($_GET["status"] === "9"){
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> El producto no se pudo eliminar 
						</div>
					<?php
				}else if($_GET["status"] === "10"){
					?>
					<div class="alert alert-danger">
							<strong>¡Correcto!</strong> producto eliminado
						</div>
					<?php
			    }
			 }
		?>			
		<div class="table-responsive">
		<table id="example" class="table tablas table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" style="width:100%">
      
            <thead class="success">
                <tr>
                    
                    <th>Código</th>
                    <th >Nombre</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Existencia</th>
                    <th> <center>Caracteristica</center> </th>
                  
                    <th>Categorias</th>
                   <th>Promocion</th>
                   <th>Fotos</th>
                    <th>Eliminar producto</th>
                    <th>Modificar</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto){

$dtos=$producto->id."||".
      $producto->codigo."||".
       $producto->descripcion."||".
       $producto->caracteristica."||".
       $producto->existencia."||". 
       $producto->precioVenta."||".
     $producto->precioCompra."||".
     
     
     $producto->categorias."||".  
      
 $producto->promocion ."||".
      $producto->foto ; 
    


                 ?>
                <tr>
                    
                    <td><?php echo $producto->codigo ?></td>
                    <td><?php echo $producto->descripcion ?>
                    	
                    </td>
                    <td><?php echo $producto->precioCompra ?></td>
                    <td><?php echo $producto->precioVenta ?></td>
                    <td><?php echo $producto->existencia ?></td>
                    <td>
                  	<textarea readonly=""  placeholder="<?php echo $producto->caracteristica ?>" rows="5" cols="40" class=" tarea tareatab input-sm "></textarea>
                    </td>
                    <td><?php echo $producto->categorias ?></td>
                 	<td><?php echo $producto->promocion ?></td>
                    <td><?php echo "<img src='total/".$producto->foto."'width='150' height='150'>"?></td>
                    <td><p align="center"><a class="btn btn-danger" href="<?php echo "total/eliminar_total.php?id=" . $producto->id?> " ><i class="zmdi zmdi-delete"></i></p></a></td>
                    
					<td><p align="center"><a  href="#ventana " class="btn btn-secondary" data-toggle="modal"  onclick="agregartota('<?php echo $dtos ?>')"><i class="zmdi zmdi-edit"></i></p></a></td>
                   
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
				
	</div>	
			
					</div>	</div>	</div>	




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
        
 
</body>
</html>