<?php
class db{
	public static function conexion(){
		//XAMPP la clave es vacia
		//MAMP la clave root
		//MAMP en PC requerian el numero de puerto de la bd
		$conn = new mysqli("localhost","root","root","mvc") or 
		die("Error al abrir la base de datos");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}
?>