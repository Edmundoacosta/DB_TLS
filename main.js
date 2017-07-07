$(document).ready(function(){
	showProductos();
	showMarcas();
	logout();

	function showProductos(){
		$('#list').click(function(){
			changePageTitle('Lista de Productos');
			$('#page-content').load('read.php', function(){
				$('#page-content').fadeIn('slow');
			});
		})
	}

	function changePageTitle(page_title){
		$('#btn-add').removeClass('display-none');
		$('#page-title').text(page_title);
		document.title=page_title;
	}

	function showMarcas(){
		$('#list2').click(function(){
			changePageTitle('Lista de Marcas');
			$('#page-content').load('read-marcas.php', function(){
				$('#page-content').fadeIn('slow');
			});
		});
	}

	function logout() {
		$('#logout').click(function(){
			$('body').load('./ac/logout.php', function(){
				$('#page-content').fadeIn('slow');
			});
		});
	}
	$(document).on('click', '.delete-btn', function(){
		if (confirm('Estas Seguro?')) {
			console.log(this)
			var marca_id = $(this).closest('td').find('.marca-id').text();
			$.post("delete.articulo.php", { id: marca_id })
			.done( function(data){
				showMarcas();
			});
		}
	});
});