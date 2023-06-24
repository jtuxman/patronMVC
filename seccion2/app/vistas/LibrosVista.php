<?php include_once("encabezado.php"); ?>
        <h1>Libros</h1>
        <table class="table table-striped" width="100%">
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
              print "<td class='text-left'>".$datos[$i]["id"]."</td>";
              print "<td class='text-left'>".$datos[$i]["titulo"]."</td>";
              print "<td class='text-left'>".$datos[$i]["autor"]."</td>";
              print "<td class='text-left'>".$datos[$i]["editorial"]."</td>";
              print "<td  class='text-left'><a href='".RUTA_APP."libros/modificar/".$datos[$i]["id"]."'>Modificar</a></td>";
              print "<td  class='text-left'><a href='".RUTA_APP."libros/borrar/".$datos[$i]["id"]."'>Borrar</a></td>";
              print "</tr>";
            }
          ?>
          </tbody>
        </table>
        <br>
        <a href='<?php print RUTA_APP."libros/alta/"; ?>' class="btn btn-info">Dar de alta un libro</a>
<?php include_once("piepagina.php");