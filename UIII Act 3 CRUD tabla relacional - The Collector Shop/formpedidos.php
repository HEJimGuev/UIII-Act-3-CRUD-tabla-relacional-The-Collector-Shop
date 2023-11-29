<?php include_once "encabezado.php" ;
include_once "base_de_datos.php";
?>

<div class="col-xs-12">
	<h1>Nuevo Pedido</h1>
	<form method="post" action="guardarpedido.php">

			<label for="idcliente">ID del cliente</label>
			<input class="form-control" name="idcliente" required type="text" id="idcliente" placeholder="ID del cliente">

	    	<label for="nombrec">Nombre del cliente</label>
			<input class="form-control" name="nombrec" required type="text" id="nombrec" placeholder="Nombre del cliente">

			<label for="fechap">Fecha de pedido:</label>
			<input class="form-control" name="fechap" required type="date" id="fechap" placeholder="fechap">

			<label for="idprod">ID del producto:</label>
			<input class="form-control" name="idprod" required type="text" id="idprod" placeholder="idprod">

			<label for="direccion">Dirección:</label>
			<input class="form-control" name="direccion" required type="text" id="direccion" placeholder="Escribe la dirección">

			<label for="tipopago">Tipo de pago:</label>
			<select name="tipopago" id="tipopago">
				<option value="">Tipo de pago</option>
				<option value="Efectivo">Efectivo</option>
				<option value="Tarjeta de crédito">Tarjeta de crédito</option>
				<option value="Tarjeta de debito">Tarjeta de debito</option>
				<option value="Deposito">Deposito</option>
			</select>

			<label for="telefono">Telefono:</label>
			<input class="form-control" name="telefono" required type="text" id="telefono" placeholder="Escribe el telefono">

			<label for="total">Total:</label>
			<input class="form-control" name="total" required type="text" id="total" placeholder="Escribe el total">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>