<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM  pedidos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Pedidos</h1>
		<div>
			<a class="btn btn-success" href="./formpedidos.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>ID cliente</th>
					<th>Nombre cliente</th>
					<th>Fecha pedido</th>
					<th>ID producto</th>
					<th>Dirección</th>
					<th>Tipo de pago</th>
					<th>Telefono</th>
					<th>Total</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->idcliente ?></td>
					<td><?php echo $producto->nombrec ?></td>
					<td><?php echo $producto->fechap ?></td>
					<td><?php echo $producto->idprod ?></td>
					<td><?php echo $producto->direccion ?></td>
					<td><?php echo $producto->tipopago ?></td>
					<td><?php echo $producto->telefono ?></td>
					<td><?php echo $producto->total ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarPedidos.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminarPedidos.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>