<?php
namespace ContactsEss18;

require_once "../../clases/Usuario.php";

$usuario = new Usuario();


$datos = array(
    "user" => $_POST['user'],
    "password" => $_POST['password']   
);

$resultado = $usuario->validar($datos);

//print_r($resultado);

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