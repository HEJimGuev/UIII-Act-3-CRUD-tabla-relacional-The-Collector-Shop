<?php
#Salir si alguno de los datos no está presente
if( !isset($_POST["nombreprod"]) || 
	!isset($_POST["cantstock"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["proveedor"]) || 
	!isset($_POST["fecharec"]) || 
	!isset($_POST["descripcion"]) ||
	!isset($_POST["categoria"]))

#Si todo va bien, se ejecuta esta parte del código...

$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "bd_thecs";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, "");
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
$nombreprod = $_POST["nombreprod"];
$cantstock = $_POST["cantstock"];
$precio = $_POST["precio"];
$proveedor = $_POST["proveedor"];
$fecharec = $_POST["fecharec"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];

$sentencia = $base_de_datos->prepare("INSERT INTO `productos`( `nombreprod`, `cantstock`, `precio`, `proveedor`, `fecharec`, `descripcion`, `categoria`)   VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombreprod, $cantstock, $precio, $proveedor, $fecharec, $descripcion,$cantstock]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>