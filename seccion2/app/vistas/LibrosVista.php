<!DOCTYPE html>
<html>
<head>
  <title>Lista de libros</title>
  <meta charset="utf-8">
</head>
<body>
<table border='1'>
    <thead>
      <th>id</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Editorial</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i=0; $i < count($datos); $i++) { 
        print "<tr>";
        print "<td>".$datos[$i]["id"]."</td>";
        print "<td>".$datos[$i]["titulo"]."</td>";
        print "<td>".$datos[$i]["autor"]."</td>";
        print "<td>".$datos[$i]["editorial"]."</td>";
        print "<td><a href='".RUTA_APP."libros/modificar/".$datos[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."libros/borrar/".$datos[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
    ?>
    </tbody>
  </table>
  <a href='<?php print RUTA_APP."libros/alta/"; ?>'>Dar de alta un libro</a>

</body>
</html>