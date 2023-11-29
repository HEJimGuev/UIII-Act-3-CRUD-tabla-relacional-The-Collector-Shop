<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM pedidos WHERE id = ?;");
$sentencia->execute([$id]);
$pedido = $sentencia->fetch(PDO::FETCH_OBJ);
if($pedido === FALSE){
	echo "¡No existe algún pedido con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar pedido con el ID <?php echo $pedido->id; ?></h1>
		<form method="post" action="editadosPedido.php">
			<input type="hidden" name="id" value="<?php echo $pedido->id; ?>">

			<label for="idcliente">ID del cliente</label>
			<input value="<?php echo $pedido->idcliente; ?>" class="form-control" name="idcliente" required type="text" id="idcliente" placeholder="ID del cliente">

	    	<label for="nombrec">Nombre del cliente</label>
			<input value="<?php echo $pedido->nombrec; ?>" class="form-control" name="nombrec" required type="text" id="nombrec" placeholder="Nombre del cliente">

			<label for="fechap">Fecha de pedido:</label>
			<input value="<?php echo $pedido->fechap; ?>" class="form-control" name="fechap" required type="date" id="fechap" placeholder="fechap">

			<label for="idprod">ID del producto:</label>
			<input value="<?php echo $pedido->idprod; ?>" class="form-control" name="idprod" required type="text" id="idprod" placeholder="idprod">

			<label for="direccion">Dirección:</label>
			<input value="<?php echo $pedido->direccion; ?>" class="form-control" name="direccion" required type="text" id="direccion" placeholder="Escribe la dirección">

			<label for="tipopago">Tipo de pago:</label>
			<select class="form-control" name="tipopago" id="tipopago">
				<option value="<?php echo $pedido->tipopago; ?>"><?php echo $pedido->tipopago; ?></option>
				<option value="Efectivo">Efectivo</option>
				<option value="Tarjeta de crédito">Tarjeta de crédito</option>
				<option value="Tarjeta de debito">Tarjeta de debito</option>
				<option value="Deposito">Deposito</option>
			</select>

			<label for="telefono">Telefono:</label>
			<input value="<?php echo $pedido->telefono; ?>" class="form-control" name="telefono" required type="text" id="telefono" placeholder="Escribe el telefono">

			<label for="total">Total:</label>
			<input value="<?php echo $pedido->total; ?>" class="form-control" name="total" required type="text" id="total" placeholder="Escribe el total">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>