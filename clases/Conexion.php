<?php
	namespace ContactsEss18;

	use mysqli;

	
	class Conexion {

		private $server;
		private $user;
		private $password;
		private $database;
		private $port;
		
		private $conexion;


		function __construct(){
			
			$this->server   = 'localhost';
			$this->user     = 'root';
			$this->password = '';
			$this->database = 'elite17_ess18_contacts';
			$this->port     = 3306;
			
	
			$this->conexion = new mysqli(
				$this->server,
				$this->user,
				$this->password,
				$this->database,
				$this->port
			);
	
			if($this->conexion->connect_errno){
				echo "Error en conexion";
				die();
			}else{
				$this->conexion->query('set names utf8');     
				              
			}
	
		}	


		public function runDMLQueryAndSerialize($sqlStr){

			$results = $this->conexion->query($sqlStr);
	
			$resultArray = array();			
		   
			foreach($results as $key){
				$resultArray[] = $key;
			}             
	
			return $resultArray;				
			
		}

		public function runQuery($sqlStr){

			return $results = $this->conexion->query($sqlStr);	
			
		}

		public function runDDLQuery($sqlStr){
			$results = $this->conexion->query($sqlStr);
			return $this->conexion->affected_rows;
		}


	}

 ?>