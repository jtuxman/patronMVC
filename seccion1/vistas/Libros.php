<!DOCTYPE html>
<html lang="en">
<head>
	<title>Libros</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Libros de finanzas personales</h2>
<ul>
	<?php
		foreach ($datos as $valor) {
			print "<li>".$valor["titulo"].", ".$valor["autor"]."</li>";
		}
	?>
</ul>
</body>
</html>