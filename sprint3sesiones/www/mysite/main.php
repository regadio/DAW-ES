
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./main.css">
	<title>Document</title>
  <style>
    table, tr,td,th{
      background-color: #dbdbdb;
      border: 1px solid black;
      border-collapse: collapse;
    }
    img:hover {
					transition: 0.5s all ease-in-out;
					transform: scale(1.1);
				}
        a{
          text-decoration: none;
          color: black;
        }
        #uno:hover{
          background-color:#dbdbdb;
				  font-size:17px;
          font-weight: bold;
        }
  </style>
</head>
<body>
<a href="/logout.php">Logout</a>
<?php
      $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
    ?>
    <?php
      // Lanzar una query
      $query = 'SELECT * FROM tpelicula';
      $result = mysqli_query($db, $query) or die('Query error');
      echo '<table style="text-align: center;">';
        echo '<td colspan="3" style="background-color: #F5C858;">Lista de Peliculas</td>';
        echo '<tr>';  
          echo '<th>Id</th>';
          echo '<th>Nombre</th>';
          echo '<th>Imagen</th>';
        echo '</tr>';
        // Recorrer el resultado
        while ($row = mysqli_fetch_array($result)) {
          echo '<tr>';  
                echo '<td style="background-color: #F5C858" width="80" >';
                        echo $row['id_pelicula'];
                echo '</td>';
                echo '<td id="uno">';
                  echo'<a href="/detail.php?id='.$row['id_pelicula'].'">'.$row['nombre'].'</a>';
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