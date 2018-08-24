<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de entrada</title>
    <style type="text/css">
		fieldset{
			width: 50%;
			height: 500px;
			min-width: 200px;
		}
	</style>
</head>
<body>
	<div align="center">
	<fieldset style=" min-width:400px margin-left: 100px margin-top: 50px color:silvert">
		<form action="Parcial_ejercicio2.php" method="POST" width="80%" min-width="500px" height="400px" padding="20px"	text-align="left">
			<?php
			for ($i=0; $i < 4; $i++) { 
				echo'<br><br>';
				for ($j=0; $j < 5; $j++) { 
					echo'<input type="Number" name="Valores'.$i.$j.'" required text-align="center"';
				}
			}
			?>
			<br><br><input type="Submit" name="send" Value="Encontrar mayor" align="center">
		</form>
		</fieldset>
	</div>
</body>
</html>