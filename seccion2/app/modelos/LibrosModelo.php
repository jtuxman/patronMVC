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
  public function insertarLibros($titulo, $autor, $editorial){
    $sql = "INSERT INTO libros VALUES(0,";
    $sql.= "'".$titulo."', ";
    $sql.= "'".$autor."', ";
    $sql.= "'".$editorial."')";
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."libros");
      exit();
    } else {
      exit("Error al insertar los datos del libro");
    }
  }
}
?>