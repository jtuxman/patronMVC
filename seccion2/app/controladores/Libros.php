<?php
/**
 * Libros
 */
class Libros extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("LibrosModelo");
  }

  public function index(){
    $data = $this->modelo->getLibros();
    
    print"<br><br><br>";
    //llamamos a la vista
    $this->vista("LibrosVista",$data);
  }
  public function modificar($id)
  {
    print "Modificar: ".$id;
  }
  public function borrar($id)
  {
    print "Borrar: ".$id;
  }
  public function alta()
  {
    //print "Alta de un libro: ";
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      print "Insertar datos";
    } else {
      $this->vista("LibrosAlta","");
    }
  }
  



  //funciones test
  public function metodoVariable(){
    if(func_num_args()>0){
      for ($i=0; $i < func_num_args() ; $i++) { 
        print func_get_arg($i)."<br>";
      }
    } else {
      print "No hay argumentos<br>";
    }
  }

  public function metodoFijo($arg1="", $arg2="", $arg3="vacio"){ 
    print $arg1."<br>";
    print $arg2."<br>";
    print $arg3."<br>";
  }
}
?>