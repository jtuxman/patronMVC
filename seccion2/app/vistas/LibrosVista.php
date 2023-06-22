<!DOCTYPE html>
<html>
<head>
  <title>Lista de librotes!</title>
  <meta charset="utf-8">
</head>
<body>
  Libros en BD  <br><br><br>
  <?php
    //var_dump($datos);
    //print "<br> -->".$datos." --> <br>";
    //$contador=count($array);
    $contador=count($datos);
    print "Total datos : ".$contador."<br>";
    print "<ul>";
    for ($i=0; $i < $contador; $i++) { 
      print "<li>".$datos[$i]["titulo"]."  -> ".$i."</li>";
    }
    print "</ul>";
  ?>

</body>
</html>