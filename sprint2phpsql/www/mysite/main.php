<html>
<head>
</head>
<body>
	<h1>Prueba</h1>
	<?php
		$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
	?>

	<?php
		$query = 'SELECT * FROM tPeliculas';
		$result = mysqli_query($db, $query) or die('Query error');
		while ($row = mysqli_fetch_array($result)) {
			echo $row['nombre'];
			echo '<br>';
			echo $row[2];
			echo '<br>';
		}
	?>


</body>
</html>
