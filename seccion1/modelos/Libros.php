<?php
/**
* Modelo Libros
*/
class Libros{
	private $db;
	private $libros;
	
	function __construct()
	{
		$this->db = db::conexion();
		$this->libros = array();
	}
	public function getLibros(){
		$consulta = $this->db->query("SELECT * FROM libros");
		//creamos un arreglo de arreglos asociados
		while ($filas = $consulta->fetch_assoc()) {
			$this->libros[] = $filas;
		}
		return $this->libros;
	}
}
?>