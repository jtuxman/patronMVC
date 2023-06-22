<?php
/**
 * Libros Modelo
 */
class LibrosModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getLibros(){
    $data = $this->db->querySelect("SELECT * FROM libros");
    //var_dump($data);
    return $data;
  }
}
?>