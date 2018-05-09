<?php 
	$pregunta[1] = "¿Cuanto es 2 + 2?";
	$pregunta[2] = "¿Lamer picapote es ilegal en otros planetas?";
	$pregunta[3] = "¿Qui&eacute;n descubri&oacute; Am&eacute;rica?";
	$pregunta[4] = "¿De qu&eacute; color el el caballo blanco de Napole&oacute;n?";
	$pregunta[5] = "¿Me amas?";

 ?>

 <?php 
	if (isset($_POST['numero'])) {
		$select=isset($_POST['numero'])? $_POST['numero']:1;
		
		if ($select>0 && $select<6) {
			echo "<br>".$pregunta[$select];
			echo "<br> Escriba su respuesta:";	?>

				<form class="" action="" method="post">
	 				<div class="quiz">
	 					<label for="ques">
	 						<input style="display:none" type="text" name="num" value="<?php echo $select;?>">
							<input type="text" name="answer" id="answer">
							<input type="submit" name="respu" value="Contestar">
	 					</label>
	 				</div>
 				</form>
 
 <?php		}
		
	}

 ?>
