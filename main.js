$(document).ready(function(){
	showProductos();
	showMarcas();

	function showProductos(){
		$('#list').click(function(){
			changePageTitle('Lista de Productos');
			$('#page-content').load('read.php', function(){
				$('#page-content').fadeIn('slow');
			});
		})
	}

	function changePageTitle(page_title){
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
});