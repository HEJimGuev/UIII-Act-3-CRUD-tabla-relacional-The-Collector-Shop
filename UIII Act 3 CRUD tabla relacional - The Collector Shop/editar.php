<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

			<label for="nombreprod">Nombre del producto</label>
			<input value="<?php echo $producto->nombreprod ?>" class="form-control" name="nombreprod" required type="text" id="nombreprod" placeholder="Nombre del producto">

			<label for="cantstock">Cantidad en el stock:</label>
			<input value="<?php echo $producto->cantstock ?>" class="form-control" name="cantstock" required type="text" id="cantstock" placeholder="Stock">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="proveedor">Proveedor:</label>
			<input value="<?php echo $producto->proveedor ?>" class="form-control" name="proveedor" required type="text" id="proveedor" placeholder="Escribe el proveedor">

			<label for="fecharec">Fecha recibido:</label>
			<input value="<?php echo $producto->fecharec ?>" class="form-control" name="fecharec" required type="date" id="fecharec" placeholder="Escribe la fecharec">

			<label for="descripcion">Descripción:</label>
			<input value="<?php echo $producto->descripcion ?>" class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Escribe la descripción">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
