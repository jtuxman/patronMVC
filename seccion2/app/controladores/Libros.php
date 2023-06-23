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
  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";
      print "<br>ID ".$id;
      $this->modelo->modificarLibros($id, $titulo, $autor, $editorial);
    } 
    else 
    {   
        $data = $this->modelo->getLibro($id);
        $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
        ];
        $this->vista("LibrosModificar",$datos);
    }
  }
  public function borrar($id="")
  {
   
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
     
      $this->modelo->borrarLibro($id);

    } else {
      $data = $this->modelo->getLibro($id);
      $datos = [
        "id" => $id,
        "titulo" => $data[0]["titulo"],
        "autor" => $data[0]["autor"],
        "editorial" => $data[0]["editorial"]
      ];
      $this->vista("LibrosBorrar",$datos);
      
    }
  }
  public function alta()
  {
    //print "Alta de un libro: ";
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $titulo = isset($_POST["titulo"])?$_POST["titulo"]:"";
      $autor = isset($_POST["autor"])?$_POST["autor"]:"";
      $editorial = isset($_POST["editorial"])?$_POST["editorial"]:"";

      $this->modelo->insertarLibros($titulo, $autor, $editorial);
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