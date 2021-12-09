<?php 
	namespace ContactsEss18;

	require_once "Modelo.php";
	

	class Categoria {

		private $modelo;


		function __construct(){

			$this->modelo = new Modelo();

        }
		

		public function agregar($datos) {

			return $this->modelo->agregarCategoria($datos);
			
		}

		public function obtenerDatosCategoria($datos) {

			return $this->modelo->obtenerDatosCategoria($datos);
			
		}

		// public function eliminarClub($clubId){
		// 	return $this->modelo->eliminarClub($clubId);
		// }

		public function actualizarCategoria($datos) {

			return $this->modelo->actualizarCategoria($datos);
			
		}

		
	}

 ?>