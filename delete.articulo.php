<?php
	include_once 'config/database.php';
	include_once 'objects/articulo.php';

	$database = new Database();
	$db = $database->getConnection();

	$articulo = new Articulo($db);

	$articulo->idarticulo=$_POST['id'];
	$articulo->estado="0";
	$articulo->delete();
 ?>