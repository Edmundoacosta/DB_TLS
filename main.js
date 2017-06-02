$(document).ready(function(){
	showProductos();

	function showProductos(){
		changePageTitle('Lista de Productos');
		$('#page-content').load('read.php', function(){
			$('#page-content').fadeIn('slow');
		});
	}

	function changePageTitle(page_title){
		$('#page-title').text(page_title);
		document.title=page_title;
	}
});