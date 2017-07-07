<?php 

include_once 'config/database.php';
include_once 'objects/articulo.php';

$database = new Database();
$db = $database->getConnection();
 
$m = new Articulo($db);

$m->id = $_POST['id'];
$m->nombre=$_POST['nombre'];
$m->precio_compra=$_POST['precio_compra'];
$m->precio_venta=$_POST['precio_venta'];

$m->update();

?>