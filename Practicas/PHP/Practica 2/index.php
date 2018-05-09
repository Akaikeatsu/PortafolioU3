<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form class="" action="" method="post">
		<label for="">Escribe el numero a convertir:  
			<input type="text" name="numero" id="numero">
		</label>
		<select name="opcion" id="opcion">
			<option value="bin">Binario</option>
			<option value="hex">Hexhadecimal</option>
		</select>
		<input type="submit" value="Convertir">
	</form>

	<?php
    if(isset($_POST['numero']))
      include_once("convert.php");
  	 ?>

</body>
</html>