<?php
//llamar al modelo
require_once("modelos/Libros.php");
//Crear la instancia
$libro = new Libros();
$datos = $libro->getLibros();
//var_dump($datos);
//Llamamos a la vista
require_once("vistas/Libros.php");
?>