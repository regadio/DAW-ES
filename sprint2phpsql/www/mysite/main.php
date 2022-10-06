<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Document</title>
</head>
<body>
 <?php
		$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
	?>

	<?php
		$query = 'SELECT * FROM tPeliculas';
		$result = mysqli_query($db, $query) or die('Query error');
		while ($row = mysqli_fetch_array($result)) {?>
			<div class="tarjeta">
				<?php $row['nombre']?>
			</div>
	<?php} ?>

</body>
</html>