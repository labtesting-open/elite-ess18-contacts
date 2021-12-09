<?php
namespace ContactsEss18;

require_once "../../clases/Usuario.php";
require_once "../../clases/Utils.php";

$usuario = new Usuario();



$params = array(
    "user" => $_POST['user'],
    "password" => $_POST['password']   
);

$resultado = array();

if(Utils::scapeParams($params)){
   $resultado = $usuario->validar($params);
}

if(count($resultado) > 0){  
   SESSION_START();
   $_SESSION['nombre'] = $resultado[0]['name'];
   $_SESSION['apellidos'] = $resultado[0]['surname'];
   $url='../../home.php';
}else{
   $url='../../index.php';
}

header("location: $url");
die(); 