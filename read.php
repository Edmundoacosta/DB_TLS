<?php
	include_once 'config/database.php';
	include_once 'objects/articulo.php';

	$database = new Database();
	$db = $database->getConnection();

	$p = new Articulo($db);

	$stmt = $p->readAll();
	$num = $stmt->rowCount();

	
	if($num>0) {
		echo "<table class='table table-bordered table-hover'>";
			echo "<tr>";
				echo "<th>N°</th>";
				echo "<th>Nombre</th>";
				echo "<th>id</th>";
				echo "<th>Precio de compra</th>";
				echo "<th>Precio de venta</th>";
				echo "<th>Relacion Marca</th>";
				echo "<th>Categoria</th>";
				echo "<th>cliente_idCliente</th>";
			echo "</tr>";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			extract($row);

			echo "<tr>";
				echo "<td>{$idarticulo}</td>";
				echo "<td>".utf8_encode($nombre)."</td>";
				echo "<td>{$id}</td>";
				echo "<td>{$precio_compra}</td>";
				echo "<td>{$precio_venta}</td>";
				echo "<td>{$marcas_idmarcas}</td>";
				echo "<td>{$categoria_idcategoria}</td>";
				echo "<td>{$cliente_idCliente}</td>";

			echo "</tr>";
		}

		echo "</table";


	} else {
		echo "<div class='alert alert-info'>No se encontraron registro.</div>";
	}

?> 