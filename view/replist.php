<html>
<head></head>

<body>

<table class="table table-striped">
	<tr><th>ID Plastico</th><th>Toro</th><th>Registro</th><th>Num Serv</th><th>Tec</th><th>Observaciones</th></tr>
	<?php 

		foreach ($cows as $value)
		{
            foreach ($value as $val)
            { 
                echo '<tr><td>'.$val['ID_VACA'].'</td><td>'.$val['NOMBRE_TORO'].'</td><td>'.$val['REGISTRO_TORO'].'</td><td>'.$val['NUM_SERV'].'</td><td>'.$val['TEC'].'</td><td>'.$val['OBSERVACIONES'].'</td></tr>';
            }
		}

	?>
</table>

</body>
</html>