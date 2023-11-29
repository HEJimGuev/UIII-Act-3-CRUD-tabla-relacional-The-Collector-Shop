<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">

			<label for="nombreprod">Nombre del producto</label>
			<input class="form-control" name="nombreprod" required type="text" id="nombreprod" placeholder="Nombre del producto">

			<label for="cantstock">Cantidad en el stock:</label>
			<input class="form-control" name="cantstock" required type="text" id="cantstock" placeholder="Stock">

			<label for="precio">Precio:</label>
			<input class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="proveedor">Proveedor:</label>
			<input class="form-control" name="proveedor" required type="text" id="proveedor" placeholder="Escribe el proveedor">

			<label for="fecharec">Fecha recibido:</label>
			<input class="form-control" name="fecharec" required type="date" id="fecharec" placeholder="Escribe la fecharec">

			<label for="descripcion">Descripción:</label>
			<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Escribe la descripción">

			<label for="categoria">Categoria:</label>
			<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>