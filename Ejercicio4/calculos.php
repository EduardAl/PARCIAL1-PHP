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
		echo '<table border="1" cellpading="5" cellspacing="20"><tr align="center" bgcolor="gray"><td bgcolor="black"></td><td width="50px" height="50px">0</td><td width="50px" height="50px">1</td><td width="50px" height="50px">2</td><td width="50px" height="50px">3</td><td width="50px" height="50px">4</td><td width="50px" height="50px">5</td><td width="50px" height="50px">6</td><td width="50px" height="50px">7</td><td width="50px" height="50px">8</td><td width="50px" height="50px">9</td></tr>';
		$Mayor=$Nums[0][0];
        $PX=0;$PY=0;
        $Mayor_fila[];
        $Mayor_fila[0]=$Nums[0][0];
        $Suma_fila=0;
        $Suma_col=0;
		for($i=0;$i<10;$i++){
			echo "<TR ALIGN='center'><TD width='50px' height='50px' BGCOLOR='orange'>$i</TD>";
			for($j=0;$j<10;$j++){
				echo "<TD width='40px' height='40px' >".$Nums[$i][$j]."</TD>";
				if($Nums[$i][$j]>$Mayor){
					$Mayor=$Nums[$i][$j];
					$PY=$j;
					$PX=$i;
                }
                if($Nums[$i][$j]>$Mayor_fila[$i])
                {
                    $Mayor_fila[$i]=$Nums[$i][$j];
                }
			}
		}
            echo "</TR><b>El valor mayor: ($Mayor) se encuentra en la posición: </b>[$PX,$PY]";
        
	?>
	</div>
</body>
</html>