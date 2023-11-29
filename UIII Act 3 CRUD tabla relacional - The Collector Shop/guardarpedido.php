<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["idcliente"]) || 
!isset($_POST["nombrec"]) || 
!isset($_POST["fechap"]) || 
!isset($_POST["idprod"]) || 
!isset($_POST["direccion"]) ||
!isset($_POST["tipopago"]) ||
!isset($_POST["telefono"]) ||
!isset($_POST["total"]))

#Si todo va bien, se ejecuta esta parte del código...

$contraseña = "";
$usuario = "root";
$idcliente_base_de_datos = "bd_thecs";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $idcliente_base_de_datos, $usuario, "");
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
$idcliente = $_POST["idcliente"];
$nombrec = $_POST["nombrec"];
$fechap = $_POST["fechap"];
$idprod = $_POST["idprod"];
$direccion = $_POST["direccion"];
$tipopago = $_POST["tipopago"];
$telefono = $_POST["telefono"];
$total = $_POST["total"];

$sentencia = $base_de_datos->prepare("INSERT INTO `pedidos`(`idcliente`, `nombrec`, `fechap`, `idprod`, `direccion`, `tipopago`, `telefono`, `total`)   VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([ $idcliente, $nombrec, $fechap, $idprod, $direccion, $tipopago, $telefono, $total]);

if($resultado === TRUE){
	header("Location: ./pedidos.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>