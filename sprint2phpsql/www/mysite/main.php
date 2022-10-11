
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
<h1>Conexión establecida</h1>
<?php
// Lanzar una query
$query = 'SELECT * FROM tPeliculas';
$result = mysqli_query($db, $query) or die('Query error');
echo '<table">';
// Recorrer el resultado
while ($row = mysqli_fetch_array($result)) {
  echo '<tr>';  
          echo '<td style="background-color: #7677E8" width="80" >';
                echo $row['id'];
        echo '</td>';
        echo '<td>';
                echo $row['nombre'];
        echo '</td>';
        echo '<td>';
                echo '<img src=" '.$row[2].'"  width="80" height="120">';
        echo '</td>';
  echo '</tr>';
}
echo '</table>';
mysqli_close($db);
?>
</body>
</html>