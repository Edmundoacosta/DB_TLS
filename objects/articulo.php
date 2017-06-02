<?php 
	class Articulo {
		private $conn;
		private $table_name = "articulo";

		//Object
		public $idarticulo;
		public $nombre;
		public $id;
		public $precio_compra;
		public $precio_venta;
		public $cantidad;
		public $marcas_idmarcas;
		public $categoria_idcategoria;
		public $cliente_idCliente;

		public function __construct($db) {
			$this->conn = $db;
		}


		function readAll() {
			$query = "SELECT idarticulo, nombre, id, precio_compra, precio_venta,
				cantidad, marcas_idmarcas, categoria_idcategoria, cliente_idCliente FROM " . $this->table_name . "";
			$stmt = $this->conn->prepare( $query );
			$stmt->execute();
			return $stmt;
		}
	}
?>