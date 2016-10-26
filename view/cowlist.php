<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Author</td><td>Description</td></tr>
	<?php 

		foreach ($cows as $id => $cow)
		{ 
			echo '<tr><td><a href="index.php?cow='.$cow->id.'">'.$cow->id.'</a></td><td>'.$cow->author.'</td><td>'.$cow->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>