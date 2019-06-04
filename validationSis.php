<?php
	class dbConn{

		private $user = '';
		private $pass = '';
		private $host = '';
		private $db   = '';
		private $conn = '';

		public function __construct(){
			$this -> host = 'localhost';
			$this -> user = 'root';
			$this -> pass = '';
			$this -> db = 'alta_costura';
		}

		public function openconn(){
			$this->conn = new mysqli(
				$this->host,
				$this->user,
				$this->pass,
				$this->db
			)or die ("La conexion a sql fallo");
		}
            public function exequery($sql){
			$this->conn->query($sql);
		}

			public function closeconn(){
			$this->conn->close();
		}


	}
 ?>

