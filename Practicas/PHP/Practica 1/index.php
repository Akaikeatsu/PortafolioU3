<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practica 1 - Formulario php</title>
</head>
<body>

 	<div class="container">
 		<form class="" action="" method="post">
	 		<div class="quiz">
	 			<label for="ques">Elige un numero del 1 al 5
					<input type="text" name="numero" id="numero">
	 			</label>
	 		</div>
 		</form>
 	</div>
	
	<?php
	    if(isset($_POST['numero']))
	      include_once("preguntas.php");
	    if(isset($_POST['answer']))
	      include_once("respuestas.php");
     ?>

</body>
</html>