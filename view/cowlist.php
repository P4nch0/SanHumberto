<html>
<head></head>

<body>

<table class="table table-striped">
	<tr><th>ID Plastico</th><th>ID Metal</th><th>Fecha Nacimiento</th><th>ID Madre</th><th>Padre</th><th>Registro</th><th>Atendio Parto</th><th>Hora</th><th>Tipo</th><th>Calostro</th><th>Proteina</th><th>Observaciones</th></tr>
	<?php 

		foreach ($cows as $value)
		{
            foreach ($value as $val)
            { 
                echo '<tr><td>'.$val['ID_PLASTICO'].'</td><td>'.$val['ID_METAL'].'</td><td>'.$val['NACIMIENTO'].'</td><td>'.$val['ID_MADRE'].'</td><td>'.$val['NOMBRE_PADRE'].'</td><td>'.$val['REGISTRO_PADRE'].'</td><td>'.$val['ATENDIO_PARTO'].'</td><td>'.$val['HORA_PARTO'].'</td><td>'.$val['TIPO_PARTO'].'</td><td>'.$val['CALIDAD_CALOSTRO'].'</td><td>'.$val['PROTEINA'].'</td><td>'.$val['OBSERVACIONES'].'</td></tr>';
            }
		}

	?>
</table>

</body>
</html>