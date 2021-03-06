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
		public $estado;

		public function __construct($db) {
			$this->conn = $db;
		}


		function readAll() {
			$query = "SELECT idarticulo, nombre, id, precio_compra, precio_venta,
				cantidad, marcas_idmarcas, categoria_idcategoria, cliente_idCliente, estado FROM " . $this->table_name . " WHERE estado='1'";
			$stmt = $this->conn->prepare( $query );
			$stmt->execute();
			return $stmt;
		}

		function selectbyid() {
			$query = "SELECT * FROM " . $this->table_name . " WHERE id=" . $this->id;
			$stmt = $this->conn->prepare( $query );
			$stmt->execute();
			return $stmt;
		}

		function create() {
			$query = "INSERT INTO " . $this->table_name . "
				SET
					nombre = :nombre,
					precio_compra = :precio_compra,
					precio_venta = :precio_venta";

			$stmt = $this->conn->prepare($query);

			$stmt->bindParam(':nombre', $this->nombre);
			$stmt->bindParam(':precio_compra', $this->precio_compra);
			$stmt->bindParam(':precio_venta', $this->precio_venta);

			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}

		function update() {
			$query = "UPDATE
						" . $this->table_name . "
					SET
						nombre = :nombre,
						precio_compra = :precio_compra,
						precio_venta = :precio_venta
					WHERE
						id = :id";

			$stmt = $this->conn->prepare($query);

			$stmt->bindParam(":nombre", $this->nombre);
			$stmt->bindParam(":precio_compra", $this->precio_compra);
			$stmt->bindParam(":precio_venta", $this->precio_venta);

			$stmt->bindParam(':id', $this->id);

			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}

		function delete(){
			$query = "UPDATE
						" . $this->table_name . "
						SET
							estado = :estado
						WHERE
							id = :id";


			$stmt = $this->conn->prepare($query);

			$stmt->bindParam(':estado', $this->estado);
			$stmt->bindParam(':id', $this->id);

			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}
?>