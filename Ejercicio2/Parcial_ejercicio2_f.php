<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<style type="text/css">
		body form{
			width: 50%;
			min-width: 530px;
			height: 400px;
			padding: 20px;
			text-align: left;
		}
		body form input{
			border-top: 19px;
			width: 14%;
			height: 30px;
			text-align: center;
		}
		.nmu{
			border-top: 19px;
			width: 14%;
			height: 10%;
			text-align: center;
		}
		body form label{
			width: 200px;
			display: inline-block;
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
	<fieldset style=" min-width:400px margin-left: 100px margin-top: 50px"><legend>. Formulario .</legend>
		<form action="Parcial_ejercicio2.php" method="POST">
			<?php
			for ($i=0; $i < 4; $i++) { 
				echo'<br><br>';
				for ($j=0; $j < 5; $j++) { 
					echo'<input type="Number" name="Valores'.$i.$j.'" required text-align="center" class="nmu">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				}
			}
			?>
			<br><br><input type="Submit" name="Enviar" Value="Aceptar" align="center">
		</form>
		</fieldset>
	</div>
</body>
</html>