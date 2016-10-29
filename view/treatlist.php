<html>
<head></head>

<body>

<table class="table table-striped">
	<tr><th>ID Plastico</th><th>Fecha</th><th>Signos</th><th>Descripcion</th><th>Observaciones</th></tr>
	<?php 

		foreach ($cows as $value)
		{
            foreach ($value as $val)
            { 
                echo '<tr><td>'.$val['ID_VACA'].'</td><td>'.$val['FECHA'].'</td><td>'.$val['SIGNOS'].'</td><td>'.$val['DESCRIPCION'].'</td><td>'.$val['OBSERVACIONES'].'</td></tr>';
            }
		}

	?>
</table>

</body>
</html>