<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de entrada</title>
    <style type="text/css">
		body form{
			width: 80%;
			min-width: 500px;
			height: 400px;
			padding: 20px;
			text-align: left;
		}
		.nmu{
			border-top: 19px;
			width: 14%;
			height: 10%;
			text-align: center;
		}
		fieldset{
			width: 50%;
			height: 500px;
			min-width: 530px;
		}
	</style>
</head>
<body>
	<div align="center">
	<fieldset style=" min-width:400px margin-left: 100px margin-top: 50px color:silver">
		<form action="Parcial_ejercicio2.php" method="POST">
			<?php
			for ($i=0; $i < 4; $i++) { 
				echo'<br><br>';
				for ($j=0; $j < 5; $j++) { 
					echo'<input type="Number" name="Valores'.$i.$j.'" required text-align="center" class="nmu">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				}
			}
			?>
			<br><br><input type="Submit" name="send" Value="Encontrar mayou" align="center">
		</form>
		</fieldset>
	</div>
</body>
</html>