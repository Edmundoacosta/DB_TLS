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
				echo "<th style='text-align:center;'>Accion</th>";
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
				echo "<td style='text-align:center;'>";
					echo "<div class='marca-id display-none'>{$id}</div>";

					echo "<div class='btn btn-info edit-btn margin-right-1em update-btn'>";
						echo "<span class='glyphicon glyphicon-edit'></span> Edit";
					echo "</div>";

					echo "<div class='btn btn-danger delete-btn'>";
						echo "<span class='glyphicon glyphicon-remove'></span> Delete";
					echo "</div>";
				echo "</td>";

			echo "</tr>";
		}

		echo "</table";


	} else {
		echo "<div class='alert alert-info'>No se encontraron registro.</div>";
	}

?> 