<?php 

include_once 'config/database.php';
include_once 'objects/articulo.php';

$database = new Database();
$db = $database->getConnection();
$m = new Articulo($db);

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
		<tr class="des">
			<td>Precio Compra</td>
			<td>
				<textarea name="precio_compra" id="precio_compra" class="form-control"></textarea>
			</td>
		</tr>
		<tr class="des">
			<td>Precio Venta</td>
			<td>
				<textarea name="precio_venta" id="precio_venta" class="form-control"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button class="btn btn-info" id="btn-send" type="button">
					<span class="glyphicon glyphicon-plus"></span>
					Crear Articulo
				</button>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">

	$('#btn-send').click(function(event, data){
        if($('#nombre').val()==""){
            alert("Debe colocar un Nombre");
            $('#nombre').focus();
        } else {
           $.post("create-articulo.php", $('form#fr').serialize()).done(function(data) {
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