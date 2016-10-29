<html>
<head></head>

<body>

<table class="table table-striped">
	<tr><th>ID Plastico</th><th>Fecha</th></tr>
	<?php 

		foreach ($cows as $value)
		{
            foreach ($value as $val)
            { 
                echo '<tr><td>'.$val['ID_VACA'].'</td><td>'.$val['FECHA'].'</td></tr>';
            }
		}

	?>
</table>

</body>
</html>