
<?php include_once("encabezado.php"); ?>
  <form action='<?php print RUTA_APP."libros/modificar/"; ?>' method="POST">
    
     <div class="form-group text-left    
         <label for="titulo">Titulos:</label>
         <input type="text" class="form-control" name="titulo" value="<?php print $datos["titulo"]; ?>">
     </div>
     <div class="form-group text-left    
          <label for="autor">Autor:</label>
         <input type="text" class="form-control" name="autor" value="<?php print $datos["autor"]; ?>">
     </div>
      <div class="form-group text-left    
          <label for="editorial">Editorial:</label>
         <input type="text" class="form-control" name="editorial" value="<?php print $datos["editorial"]; ?>">
     </div>
     <div class="form-group text-left">     
         <input type="hidden" value="<?php print $datos["id"]; ?>" name="id">
         <input type="submit" value="Enviar"  class="btn btn-info">
         <a href='<?php print RUTA_APP."libros/"; ?>'  class="btn btn-info">Regresar</a>
     </div>

  </form>
  
<?php include_once("piepagina.php");