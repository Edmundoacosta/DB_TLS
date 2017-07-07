<?php 
include_once 'config/database.php';
include_once 'objects/articulo.php';

$database = new Database();
$db = $database->getConnection();
 
$m = new Articulo($db);

$m->nombre=$_POST['nombre'];
$m->desripcion=$_POST['descripcion'];
$m->estado = "1";

$m->create(); 

?>