<?php 
	$respuesta[1] = "4";
	$respuesta[2] = "Si";
	$respuesta[3] = "Cristobal Col&oacute;n";
	$respuesta[4] = "Blanco";
	$respuesta[5] = "No";

	$no=isset($_POST['num']) ? $_POST['num'] : 1;
	$res=isset($_POST['answer']) ? $_POST['answer'] : '';

	if ($res==$respuesta[$no]) {
		echo "Respuesta Correcta";
	}else
		echo "Respuesta incorrecta"
 ?>




