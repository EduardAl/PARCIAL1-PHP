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
		echo '<table border="1" cellpading="5" cellspacing="20"><tr align="center" bgcolor="gray"><td bgcolor="black"></td><td width="40px" height="40px">0</td><td width="40px" height="40px">1</td><td width="40px" height="40px">2</td><td width="40px" height="40px">3</td><td width="40px" height="40px">4</td><td width="40px" height="40px">5</td><td width="40px" height="40px">6</td><td width="40px" height="40px">7</td><td width="40px" height="40px">8</td><td width="40px" height="40px">9</td></tr>';
		$Mayor=$Nums[0][0];
        $PX=0;$PY=0;
        $Mayor_fila = [];
        $Mayor_fila[0]=$Nums[0][0];
        $Suma_fila=[];
        $Suma_col=[];

		for($i=0;$i<10;$i++){
			echo "<TR ALIGN='center'><TD width='40px' height='40px' BGCOLOR='orange'>$i</TD>";
			for($j=0;$j<10;$j++){
                echo "<TD width='40px' height='40px' >".$Nums[$i][$j]."</TD>";
                $Suma_fila[i]=0;
                $Suma_col[i]=0;
				if($Nums[$i][$j]>$Mayor){
					$Mayor=$Nums[$i][$j];
					$PY=$j;
					$PX=$i;
                }
                if($Nums[$i][$j]>$Mayor_fila[$i])
                {
                    $Mayor_fila[$i]=$Nums[$i][$j];
                    $Suma_fila[$i]=$Suma_fila[$i]+$Nums[$i][$j];
                    $Suma_col[$i]=$Suma_col[$i]+$Nums[$j][$i];
                }
			}
        }
        $Suma_col_m=$Suma_col[0];
        $Suma_fila_m=$Suma_fila[0];
        $posx=0;
        $posy=0;
            echo "</TR><b>El valor mayor: ($Mayor) se encuentra en la posición: </b>[$PX,$PY]<br>";
            for($i=0;$i<10;$i++)
            {
                if($Suma_col_m<$Suma_col[$i])
                {
                    $Suma_col_m=$Suma_col[$i];
                    $posy=$i;
                }
                if($Suma_fila_m<$Suma_fila[$i])
                {
                    $Suma_fila_m=$Suma_fila[$i];
                    $posx=$i;
                }
                echo "</TR><b>El valor mayor de la fila ($i) es: </b>".$Mayor_fila[$i]."<br>";
            }
            echo "</TR><b>La fila con la mayor suma es la fila ($posx) con: </b>".$Suma_fila_m."<br>";
            echo "</TR><b>La columna con la mayor suma es la columna ($posy) con: </b>".$Suma_col_m."<br>";
	?>
	</div>
</body>
</html>