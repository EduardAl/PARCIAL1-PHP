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
				$Nums[$i][$j]=$_POST['val'.$i.$j];
			}
		}
		echo '<table border="1" cellpading="3" cellspacing="15"><tr align="center" bgcolor="gray"><td bgcolor="black"></td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>';
		$Mayor=$Nums[0][0];
		$PX=0;$PY=0;
		for($i=0;$i<4;$i++){
			echo "<TR ALIGN='center'>";
			echo "<TD BGCOLOR='orange'>$i</TD>";
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
			echo"<b>El valor mayor: ($Mayor) se encuentra en la posición: </b>[$PX,$PY]";
	?>
	</div>
</body>
</html>