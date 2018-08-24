<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cálculos</title>
</head>
<body>
	<?php
		$Nums = [];
		for($i=0;$i<10;$i++){
			for($j=0;$j<10;$j++){
				$Nums[$i][$j]=(rand(-900 , 900));
			}
		}
		echo '<table border="1" cellpading="5" cellspacing="20"><tr align="center" bgcolor="gray"><td bgcolor="black"></td><td width="60px" height="60px">0</td><td width="60px" height="60px">1</td><td width="60px" height="60px">2</td><td width="60px" height="60px">3</td><td width="60px" height="60px">4</td></tr>';
        $Mayor=$Nums[0][0];
        $Mayor_fila=[];
        $Mayor_fila[0]=$Nums[0][0];
        $Mayor_col=[];
        $Mayor_col[0]=$Nums[0][0];
		$PX=0;$PY=0;
		for($i=0;$i<10;$i++){
            echo "<TR ALIGN='center'><TD width='60px' height='60px' BGCOLOR='orange'>$i</TD>";
			for($j=0;$j<10;$j++){
				echo "<TD width='40px' height='40px' >".$Nums[$i][$j]."</TD>";
				if($Nums[$i][$j]>$Mayor){
                    $Mayor=$Nums[$i][$j];
					$PY=$j;
					$PX=$i;
				}
			}
		}
			echo "</TR><b>El valor mayor: ($Mayor) se encuentra en la posición: </b>[$PX,$PY]";
	?>
	</div>
</body>
</html>