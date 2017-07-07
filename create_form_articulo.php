<?php 

include_once 'config/database.php';
include_once 'objects/articulo.php';

$database = new Database();
$db = $database->getConnection();
$m = new Marca($db);

$stmt = $m->readAll();
$num = $stmt->rowCount();

?>

<form id="fr" action="#" enctype="multipart/form-data" method="post">
	<table class="table table-hover table-responsive table-bordered">
		<tr class="des">
			<td>Nombre</td>
			<td>
				<textarea name="nombre" id="nombre" class="form-control"></textarea>
			</td>
		</tr>
	</table>
</form>