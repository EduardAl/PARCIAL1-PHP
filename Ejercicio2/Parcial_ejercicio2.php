<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Valores Numéricos</title>
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
	<?php
		$Numeros = [];
		for($i=0;$i<4;$i++){
			for($j=0;$j<5;$j++){
				$Numeros[$i][$j]=$_POST['Valores'.$i.$j];
			}
		}
		echo '<table border="1" cellpading="2" cellspacing="10">'
			. '<tr align="center" bgcolor="blue">'
			. '<td bgcolor="black"></td>'
			. '<td>0</td>'
			. '<td>1</td>'
			. '<td>2</td>'
			. '<td>3</td>'
			. '<td>4</td>'
			. '</tr>';
		$Mayor=$Numeros[0][0];
		$PosicionX=0;$PosicionY=0;
		for($i=0;$i<4;$i++){
			echo "<TR ALIGN='center'>";
			echo "<TD BGCOLOR='cyan'>$i</TD>";
			for($j=0;$j<5;$j++){
				echo "<TD>".$Numeros[$i][$j]."</TD>";
				if($Numeros[$i][$j]>$Mayor){
					$Mayor=$Numeros[$i][$j];
					$PosicionY=$j;
					$PosicionX=$i;
				}
			}
		}
			echo "</TR>";
			echo"<b>La posición con el primer elemento mayor ($Mayor) es: </b>[$PosicionX,$PosicionY]";
	?>
	</div>
</body>
</html>