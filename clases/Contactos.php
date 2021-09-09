<?php 
	namespace ContactsEss18;

	require_once "Modelo.php";
	

	class Contactos {

		private $modelo;


		function __construct(){

			$this->modelo = new Modelo();

        }


		public function agregarContacto($datos) {			

			return $this->modelo->agregarContacto($datos);			
			 
		}

		public function eliminarContacto($idContacto) {

			return $this->modelo->eliminarContacto($idContacto);					
			
		}

		public function obtenerDatosContacto($idContacto) {
			
			return $this->modelo->obtenerDatosContacto($idContacto);
		}

		public function actualizarContacto($datos) {

			return $this->modelo->actualizarContacto($datos);
			
		}

		

		
	}

 ?>