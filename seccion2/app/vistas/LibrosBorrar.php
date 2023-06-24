<?php include_once("encabezado.php"); ?>
  <form action='<?php print RUTA_APP."libros/borrar/"; ?>' method="POST">
    
      <div class="form-group text-left">
          <label for="titulo">Titulo:</label>
          <input type="text"  class="form-control" name="titulo" disabled="disabled" value="<?php print $datos["titulo"]; ?>">
      </div>
      <div class="form-group text-left">
          <label for="autor">Autor:</label>
          <input type="text"  class="form-control" name="autor" disabled="disabled" value="<?php print $datos["autor"]; ?>">
      </div>
      <div class="form-group text-left">
          <label for="editorial">Editorial:</label>
          <input type="text"  class="form-control" name="editorial" disabled="disabled" value="<?php print $datos["editorial"]; ?>">
      </div>
      <div class="form-group text-left">
          <input type="hidden"   value="<?php print $datos["id"]; ?>" name="id">
          <a href='<?php print RUTA_APP."libros/"; ?>' class="btn btn-success">Regresar</a>
          <input type="submit" value="Enviar" class="btn btn-danger">
      </div>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
 
<?php include_once("piepagina.php");