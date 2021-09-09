<?php 
	namespace ContactsEss18;

	require_once "Modelo.php";
	

	class Club {

		private $modelo;


		function __construct(){

			$this->modelo = new Modelo();

        }
		

		public function agregarClub($datos) {

			return $this->modelo->agregarClub($datos);
			
		}

		public function obtenerDatosClub($datos) {

			return $this->modelo->obtenerDatosClub($datos);
			
		}

		public function eliminarClub($clubId){
			return $this->modelo->eliminarClub($clubId);
		}

		public function actualizarClub($datos) {

			return $this->modelo->actualizarClub($datos);
			
		}

		
	}

 ?>