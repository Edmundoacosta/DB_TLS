<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
<head>
	<title>Listado</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 user">
				<div class="user-img"></div>
				<h4><?php echo $_SESSION['SESS_FIRST_NAME'] ?></h4>
				<p class="status">Conectado <span id="logout" style="color: red; margin-left: 10px; cursor: pointer" class="glyphicon glyphicon-remove-circle"></span></p>

				<ul>
					<li><a id="list" href="#">PRODUCTOS</a></li>
					<li><a id="list2" href="#">MARCAS</a></li>
				</ul>
			</div>
			<div class="col-md-10">
				<h2 id="page-title"></h2>
				<div id="btn-add" class="btn btn-info display-none">+ Crear Marca</div>
				<div id="page-content"></div>
			</div>
		</div>
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="main.js"></script>
</body>
</html>