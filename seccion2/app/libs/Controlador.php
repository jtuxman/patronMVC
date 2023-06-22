<?php
/**
 * Clase base controladora
 */
class Controlador{
  public function modelo($modelo){
    require_once("../app/modelos/".$modelo.".php");
    return new $modelo();
  }
  //public function vista($vista,$datos=[]){
  public function vista($vista,$datos){
    //print " <br>  Datos en funcion vista de controlador :".$datos."<-- <br>";
    //var_dump($datos);
    if(file_exists("../app/vistas/".$vista.".php")){
      require_once("../app/vistas/".$vista.".php");
    } else {
      die("La vista no existe");
    }
  }
}
?>