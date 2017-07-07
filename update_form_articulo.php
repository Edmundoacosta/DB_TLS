<?php 

include_once 'config/database.php';
include_once 'objects/articulo.php';

$database = new Database();
$db = $database->getConnection();
$m = new Articulo($db);


//id update
$m->id = $_GET['id'];
$stmt3 = $m->selectbyid();
$num3 = $stmt3->rowCount();


if ($num3>0) {
	$rowupd = $stmt3->fetch(PDO::FETCH_ASSOC);
	extract($rowupd);
}

?>

<form id="fr" action="#" enctype="multipart/form-data" method="post">
	<input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
	<table class="table table-hover table-responsive table-bordered">
		<tr class="des">
			<td>Nombre</td>
			<td>
				<input type="text" value="<?php echo $nombre; ?>" id="nombre" name="nombre" class="form-control">
			</td>
		</tr>
		<tr class="des">
			<td>Precio Compra</td>
			<td>
				<input type="text" value="<?php echo $precio_compra; ?>" id="precio_compra" name="precio_compra" class="form-control">
			</td>
		</tr>
		<tr class="des">
			<td>Precio Venta</td>
			<td>
				<input type="text" value="<?php echo $precio_venta; ?>" id="precio_venta" name="precio_venta" class="form-control">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button class="btn btn-info" id="btn-update" type="button">
					<span class="glyphicon glyphicon-plus"></span>
					Actualizar Articulo
				</button>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">

	$('#btn-update').click(function(event, data){
        if($('#nombre').val()==""){
            alert("Debe colocar un Nombre");
            $('#nombre').focus();
        } else {
           $.post("update-articulo.php", $('form#fr').serialize()).done(function(data) {
               showArti();
            });
        }
    });

    function changePageTitle(page_title){   
        $('#page-title').text(page_title);
        document.title=page_title;
    }

    function showArti(){
            
        changePageTitle('Lista de Articulos');
        
        $('#page-content').fadeOut('slow', function(){
            $('#page-content').load('read.php', function(){
                $('#loader-image').hide();
                $('#btn-add').removeClass('display-none');
                $('#page-content').fadeIn('slow');
            });
        });
    }

</script>