<?php

session_start();


// Obtener controlador y acción

$controller = $_GET['controller'] ?? 'index';

$action = $_GET['action'] ?? 'index';



// Convertir nombre

$controllerName = ucfirst($controller)."Controller";



// Cargar controlador

require_once "controllers/".$controllerName.".php";



// Crear objeto

$controllerObject = new $controllerName();



// Ejecutar acción

if(method_exists($controllerObject,$action))
{

    $controllerObject->$action();

}
else
{

    echo "La acción no existe";

}

?>