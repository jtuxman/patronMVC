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
    //var_dump($data);
    ///print "<ul>";
    ///for ($i=0; $i < count($data); $i++) { 
    ///  print "<li>".$data[$i]["titulo"]."</li>";
    ///}
    ///print "</ul>";
    ///$this->vista("LibrosVista",$data);
    $this->vista("LibrosVista",$data);
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