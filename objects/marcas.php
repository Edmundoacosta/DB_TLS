<?php

class Marcas {
	private $conn;
		private $table_name = "marcas";

		//Object
		public $idmarcas;
		public $desconocidas;
		public $standfor;
		public $norma;
		public $classic;
		public $minerva;
		public $bic;

		public function __construct($db) {
			$this->conn = $db;
		}

		function readAll(){
			$query = "SELECT idmarcas, desconocidas, standfor, norma, classic, minerva, bic FROM " . $this->table_name . " WHERE idmarcas = '1' ORDER BY idmarcas DESC";
			echo $query;

			$stmt = $this->conn->prepare( $query );
			$stmt-> execute();

			return $stmt;
		}

		function create() {

			$query = "INSERT INTO" . $this->table_name . "
				SET
					idmarcas=:idmarcas,
					desconocidas=:desconocidas,
					standfor=:standfor";

			$stmt = $this->conn->prepare($query);

			$stm->bindParam(':idmarcas', $this->idmarcas);
			$stmt->bindParam(':desconocidas', $this->desconocidas);
			$stmt->bindParam(':standfor', $this->standfor);

			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
}









?>