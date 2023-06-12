<?php
$conexion=new mysqli("localhost", "root", "root", "mvc");
$conexion->query("SET NAMES 'utf8'");
//
$libros = array();
//
$consulta=$conexion->query("SELECT * FROM libros;");
  while($filas=$consulta->fetch_assoc()){
      $libros[]=$filas;
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Libros</title>
  </head>
  <body>
    <ul>
      <?php
        foreach ($libros as $dato) {
            echo "<li>".$dato["titulo"]."</li>";
        }
      ?>
    </ul>
  </body>
</html>