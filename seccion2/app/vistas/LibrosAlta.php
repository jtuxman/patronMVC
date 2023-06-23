<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta un libro</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."libros/alta/"; ?>' method="POST">
    <table>
      <tr><td><label for="titulo">Titulo:</label></td>
        <td><input type="text" name="titulo"></td>
      </tr>
      <tr><td><label for="autor">Autor:</label></td>
        <td><input type="text" name="autor"></td>
      </tr>
      <tr><td><label for="editorial">Editorial:</label></td>
        <td><input type="text" name="editorial"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP."libros/"; ?>'>Regresar</a>
</body>
</html>