<?php
/**
 * Clase que controla todo el flujo
 */
class ControlOld{
  function __construct(){
    $url = $_GET["url"];
    print $url;
    if($url==""){
      print "   URL vacia ";
    }
  }
}
class Control{
  protected $controlador = "Libros";
  protected $metodo = "index";
  protected $parametros = [];
  
  function __construct(){
    //al ejecutarse el constructor, manda llamar
    //esta funcion para tener la url en un arreglo
    $url = $this->separarURL();
    //print "Parametros -- $url --";
    //var_dump($url);
    if ($url!="" && file_exists("../app/controladores/".ucwords($url[0]).".php")) {
      $this->controlador = ucwords($url[0]);
      unset($url[0]);
    }
    require_once("../app/controladores/".ucwords($this->controlador).".php");
    $this->controlador = new $this->controlador;

    /*** Inciamos el método ***/
    if (isset($url[1])) {
      if (method_exists($this->controlador, $url[1])) {
        $this->metodo = $url[1];
        unset($url[1]);
      }
    }
    //
    //$this->parametros = $url;
    //print "<br>Metodo: ".$this->metodo."<br>";
    //var_dump($this->parametros);

    $this->parametros = $url ? array_values($url) : [];
    //print "<br>----$this->metodo ----<br>";
    call_user_func_array(
      [$this->controlador, $this->metodo], $this->parametros
    );

    
  }
  private function separarURL(){
     $url = "";
     if (isset($_GET["url"])) {
        //eliminamos la ultima diagonal
        //gato/perro/
        $url = rtrim($_GET["url"],"/");
        //limpiamos caracteres ajenos a una URL
        $url = filter_var($url,FILTER_SANITIZE_URL);
        //separamos
        $url = explode("/",$url);
      }
     //regresamos el arreglo 
     return $url;
  }
}
?>