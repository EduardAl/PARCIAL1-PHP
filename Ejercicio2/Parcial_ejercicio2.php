<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Valores Numéricos</title>
</head>
<body>
	<?php
		$Numeros = [];
		for($i=0;$i<4;$i++){
			for($j=0;$j<5;$j++){
				$Numeros[$i][$j]=$_POST['Valores'.$i.$j];
			}
		}

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