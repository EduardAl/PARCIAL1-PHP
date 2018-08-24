<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cálculos</title>
</head>
<body>
	<?php
		$Nums = [];
		for($i=0;$i<4;$i++){
			for($j=0;$j<5;$j++){
				$Nums[$i][$j]=$_POST['Valores'.$i.$j];
			}
		}

		$Mayor=$Nums[0][0];
		$PX=0;$PY=0;
		for($i=0;$i<4;$i++){
			echo "<TR ALIGN='center'>";
			echo "<TD BGCOLOR='cyan'>$i</TD>";
			for($j=0;$j<5;$j++){
				echo "<TD>".$Nums[$i][$j]."</TD>";
				if($Nums[$i][$j]>$Mayor){
					$Mayor=$Nums[$i][$j];
					$PY=$j;
					$PX=$i;
				}
			}
		}
			echo "</TR>";
			echo"<b>El valor mayor: ($Mayor) se encuentra en la posición: </b>[$PX,$Y]";
			echo '<table border="1" cellpading="2" cellspacing="10">'
			. '<tr align="center" bgcolor="blue">'
			. '<td bgcolor="black"></td>'
			. '<td>0</td>'
			. '<td>1</td>'
			. '<td>2</td>'
			. '<td>3</td>'
			. '<td>4</td>'
			. '</tr>';
	?>
	</div>
</body>
</html>