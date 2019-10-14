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
	<title>INFINITO 7 VENTAS </title>
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
	<script src="vendor/fecha/js/jscal2.js"></script>
<script src="vendor/fecha/js/lang/es.js"></script>

<link rel="stylesheet" type="text/css" href="vendor/fecha/css/jscal2.css" />
<link rel="stylesheet" type="text/css" href="vendor/fecha/css/border-radius.css" />
<link rel="stylesheet" type="text/css" href="vendor/fecha/css/steel/steel.css" />
	
</head>
<body>



<?php  


if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;
?>




<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT ventas.total, ventas.fecha, ventas.id, GROUP_CONCAT(	productos.codigo, '..',  productos.descripcion, '..', productos.promocion , '..', productos.categorias , '..', productos.precioVenta , '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>






<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<?php
include_once "base_de_datos.php";
$sentenciav = $base_de_datos->query("SELECT * FROM ventasfinal;");
$productosv = $sentenciav->fetchAll(PDO::FETCH_OBJ);

?>

<!-- envios -->

<div class="modal fade " id="Envios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
  

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body"> 

				      	<form action="envios/registro-envios.php" method="post">

	
				<input class="txt form-control input-sm " type="text" hidden="" id="ide" name="id"value="idpr ">
				
				<input readonly="" class="txt form-control input-sm" type="text" id="codigoe" name="codigo"  placeholder="codigo del producto">
				<input readonly="" class="txt form-control input-sm" type="text" id="nombree" name="nombre" placeholder="nombre">

			

				<input readonly="" class="txt form-control input-sm" type="text "id="promocione" name="promocion" placeholder="promocion activa">
				<input readonly="" class="txt form-control input-sm" type="text "id="categoriae" name="categorias"value="nombre del producto" placeholder="categorias">
	
				<input readonly="" class="txt form-control input-sm" type="text" id="precioe" name="precio" placeholder=" precion neto">

				<input readonly="" class="txt form-control input-sm" type="text" id="cantidade" name="cantidad" placeholder="cantidad">
<input  class="txt form-control input-sm" type="text"  name="numeroguia" placeholder="Numero de guia">
					<input  class=" fecha input-sm" name="fecha" type="text" id="fecha" placeholder="fecha del envio" size="20" readonly  />
<input  name="btnfecha" class="fechabtn btn-secondary" id="btnfecha" type="button" value="..." />

<script type="text/javascript" >
    var calendario = Calendar.setup({
        onSelect: function(calendario) { calendario.hide() },
        showTime: true });
        calendario.manageFields("btnfecha", "fecha", "%d/%m/%Y");
</script>
				
		
			




</div>


<p align="center"><input type="submit" name="actualizar" id="actualizaradmin" class="btn registrar btn-primary" value="Registrar"></p>

        
 


</form>
 
      </div>
             
    </div>
  </div>
</div>



<!-- ventas -->
<div class="modal fade " id="ventas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
  

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body"> 

				      	<form action="ventas/ventasconcretadas.php" method="post">

	
				
				
				<input readonly="" class="txt form-control input-sm" type="text" id="facturav" name="factura"  placeholder="numero de factura">
				<input readonly="" class="txt form-control input-sm" type="text" id="fechav" name="fecha" placeholder="fecha de la venta">

				<input readonly="" class="txt form-control input-sm" type="text "id="codigov" name="codigo" placeholder="codigo del prducto">
				<input readonly="" class="txt form-control input-sm" type="text "id="nombrev" name="nombre" placeholder="nombre del producto">
	
				<input readonly="" class="txt form-control input-sm" type="text" id="estatudv" name="estatud" placeholder=" estatud">

				<input readonly="" class="txt form-control input-sm" type="text" id="categoriav" name="categoria" placeholder="categorias">
				<input readonly="" class="txt form-control input-sm" type="text" id="precioVentav" name="precioVenta" placeholder="precioVenta">


				<input readonly="" class="txt form-control input-sm" type="text" id="cantidadv" name="cantidad" placeholder="cantidad vendida ">
		
		<input  class="txt form-control input-sm" type="text" id="totalv" name="total" placeholder="total ">
		
			




</div>


<p align="center"><input type="submit" name="actualizar" id="actualizaradmin" class="btn registrar btn-primary" value="Registrar"></p>

        
 


</form>
 
      </div>
             
    </div>
  </div>
</div>


	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="full-width  text-center tittles " id="exampleModalCenterTitle">Productos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		
		<br>
		<table   id="tabla" class="table table-bordered table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
			<thead>
				<tr>
					
					<th>Código</th>
					<th>Producto</th>
					
					<th>Precio de venta</th>
					<th>Existencia</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->descripcion ?></td>
					
					<td><?php echo $producto->precioVenta ?></td>
					<td><?php echo $producto->existencia ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
       
      </div>
    </div>
  </div>
</div>
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
			
			</div>
			 <div class="categorias"><img  src="images/icons/ventas.png"   width="90" height="90" ></div>
			<div class="full-width header-well-text">
				
		<img src="images/Infinito.png">
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewAdmin" class="mdl-tabs__tab is-active">agregar venta</a>
				<a href="#tabListAdmin" class="mdl-tabs__tab">listado de ventas</a>
			</div>
			
			
<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Procesar ventas 
							</div>
							<div class="full-width panel-content">

	
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert alert-success">
							<strong>¡Correcto!</strong> Venta realizada correctamente
						</div>
					<?php
				}else if($_GET["status"] === "2"){
					?>
					<div class="alert alert-info">
							<strong>Venta cancelada</strong>
						</div>
					<?php
				}else if($_GET["status"] === "3"){
					?>
					<div class="alert alert-info">
							<strong>Ok</strong> Producto quitado de la lista
						</div>
					<?php
				}else if($_GET["status"] === "4"){
					?>
					<div class="alert alert-warning">
							<strong>Error:</strong> El producto que buscas no existe
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert alert-danger">
							<strong>Error: </strong>El producto está agotado
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
		<br>
		<form method="post" action="carrito/agregarAlCarrito.php">
			<label for="codigo">Código de barras:</label>
			<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
		</form>
		<br><br>
<div class="table-responsive">
		<table class="table table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width ">
			<thead>
				<tr>
					<th>ID</th>
					<th>Código</th>
					<th>Descripción</th>
					<th>Precio de venta</th>
					<th>Cantidad</th>
					<th>promoicion</th>
					<th>Total</th>
					<th>Quitar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($_SESSION["carrito"] as $indice => $producto){ 
						$granTotal += $producto->total;
					?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->precioVenta ?></td>
					<td><?php echo $producto->cantidad ?></td>
					<td><?php echo $producto->promocion ?></td>
					<td><?php echo $producto->total ?></td>
					<td><a class="btn btn-danger" href="<?php echo "carrito/quitarDelCarrito.php?indice=" . $indice?>"><i class="zmdi zmdi-delete"></i></a></td>
					
					
				</tr>
				<?php } ?>
			</tbody>
			
		</table>
</div>
		<table class="table  table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
			
<tr><th><h3>Total </h3></th></tr>
			<tr>
				<td><h2><?php echo number_format ($granTotal ,2,',','.')  ?> BS</h2></td>
				
			</tr>
		</table>
		<form action="ventas/terminarVenta.php" method="POST">
			<input name="total" type="hidden" value="<?php echo $granTotal;?>">
			<button type="submit" class="btn btnventas btn-primary">vender</button>
			<a href="ventas/cancelarVenta.php" class="btn btnventas btn-secondary">Cancelar venta</a>
			<button type="button" class=" btnbuscar " data-toggle="modal" data-target="#exampleModalCenter">
 Buscar codigo
</button>

		</form>
					
		
	</div>
									
						</div>
					</div>
				</div>
			</div>
		<div class="mdl-tabs__panel" id="tabListAdmin">
				<div class="table container">
        <div class="row">
		
		<div class="table-responsive">
    
<table id="example"  class="table tablas table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" style="width:100%">
			<thead><th colspan="9"><center><h5 class="tittles">Ventas por concretar </h5></center></th>
				<tr>
					<th>Número</th>
					<th>Fecha</th>
					<th><center>Productos vendidos</center></th>
					<th>Total</th>
					<th>Eliminar</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($ventas as $venta){ 


					?>
				<tr>
					<td><?php echo $venta->id ?></td>
					<td><?php echo $venta->fecha ?></td>
					<td>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Estatud</th>
									<th>Categorias</th>
									<th>PrecioVenta</th>
									<th>Cantidad</th>
									<th>Concretar la ventas</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach(explode("__", $venta->productos) as $productosConcatenados){ 
								$producto = explode("..", $productosConcatenados);
$ventas= $venta->id."||".
    
	 $venta->fecha."||".
	 $producto[0]."||".
     $producto[1]."||".
     $producto[2]."||".
     $producto[3]."||".
     $producto[4]."||".
     $producto[5]."||".
      $venta->total;
								?>
								
								<tr>
									<td><?php echo $producto[0] ?></td>
									<td><?php echo $producto[1] ?></td>
									<td><?php echo $producto[2] ?></td>
                                     <td><?php echo $producto[3] ?></td>
                                     <td><?php echo $producto[4] ?></td>
                                      <td><?php echo $producto[5] ?></td>
										<td><a class="btn btn-primary"  href="#ventas"  data-toggle="modal" onclick="agregaventas('<?php echo $ventas ?>')"><i class="zmdi zmdi-card"></i></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</td>
					<td><?php echo $venta->total ?></td>
					<td><a class="btn btn-danger" href="<?php echo "ventas/eliminarVenta.php?id=" . $venta->id?>"><i class="zmdi zmdi-delete"></i></a></td>


					
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
					
		</div>



</div>

</div>
		<div class="table container">
        
		
		<div class="table-responsive">

	<table id="tablaventasf" class="table tablas table-bordered mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" style="width:100%">
      
            <thead class="success">
            	<th colspan="10"><center><h5 class="tittles">Ventas concretadas  </h5></center></th>
                <tr>
                    
                    <th>Numero de factura</th>
                    <th > Fecha</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Estatud</th>
                    <th> <center>Categorias</center> </th>
                    <th>PrecioVenta</th>
                   <th>Cantidad</th>
                   <th>Total</th>
                   <th>Envios</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($productosv as $productov){

$envios=$productov->factura ."||".
     	
     	$productov->codigo."||".
     	$productov->nombre."||".
    	$productov->estatud."||".
    	 $productov->categoria."||".
     	$productov->precioVenta."||".
      	$productov->cantidad;
     


                 ?>
                <tr>
                    
                    <td><?php echo $productov->factura ?></td>
                    <td><?php echo $productov->fecha ?>
                    	
                    </td>
                    <td><?php echo $productov->codigo ?></td>
                    <td><?php echo $productov->nombre ?></td>
                    <td><?php echo $productov->estatud ?></td>
                    <td><?php echo $productov->categoria ?> </td>
                    <td><?php echo $productov->precioVenta ?></td>
                 	<td><?php echo $productov->cantidad ?></td>
                    <td><?php echo $productov->total ?></td>
                    <td><a class="btn btn-info" href="#Envios"  data-toggle="modal" onclick="envios('<?php echo $envios ?>')" ><i class="zmdi zmdi-truck"></i></a></td>
                  
                </tr>
                <?php } ?>
            </tbody>
        </table>
		
		</div>

	
</div>
</div>
</div>
</div>


				
		
	




<!-- modal admin -->



<div class="bg-modal " id="bg-modal">
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
	</section>
</body>
</html>