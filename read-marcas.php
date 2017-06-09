<?php
	include_once 'config/database.php';
	include_once 'objects/marcas.php';

	$database = new Database();
	$db = $database->getConnection();

	$m = new Marcas($db);

	$stmt = $m->readAll();
	$num = $stmt->rowCount();

	
	if($num>0) {
		echo "<table class='table table-bordered table-hover'>";
			echo "<tr>";
				echo "<th>N° Marcas</th>";
				echo "<th>desconocidas</th>";
				echo "<th>standfor</th>";
				echo "<th>norma</th>";
				echo "<th>classic</th>";
				echo "<th>minerva</th>";
				echo "<th>bic</th>";
			echo "</tr>";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			extract($row);

			echo "<tr>";
				echo "<td>{$idmarcas}</td>";
				echo "<td>{$desconocidas}</td>";
				echo "<td>{$standfor}</td>";
				echo "<td>{$norma}</td>";
				echo "<td>{$classic}</td>";
				echo "<td>{$minerva}</td>";
				echo "<td>{$bic}</td>";

			echo "</tr>";
		}

		echo "</table";


	} else {
		echo "<div class='alert alert-info'>No se encontraron registro.</div>";
	}

?> 