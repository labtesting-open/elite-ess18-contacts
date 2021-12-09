<?php 
	namespace ContactsEss18;

	require_once "Modelo.php";
	

	class Usuario {

		private $modelo;


		function __construct(){

			$this->modelo = new Modelo();

        }

        public function validar($params) {			

			$userData = array();

			if(Utils::scapeParams($params))
			{
				$userData = $this->modelo->validarUsuario($params);
			}

			return $userData;
			
			 
		}


		
	}

 ?>