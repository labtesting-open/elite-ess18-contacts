<?php 
	namespace ContactsEss18;

	require_once "Modelo.php";
	

	class Usuario {

		private $modelo;


		function __construct(){

			$this->modelo = new Modelo();

        }

        public function validar($datos) {			

			return $this->modelo->validarUsuario($datos);			
			 
		}


		
	}

 ?>