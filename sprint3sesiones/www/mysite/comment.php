<?php 
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('Fail');
?>
<html>
<body>
	<?php 
	session_start();
	$user_id_a_insertar = 'NULL';
	if (!empty($_SESSION['id'])) {
		$user_id_a_insertar = $_SESSION['id'];
	}	
		$id_pelicula = $_POST['pelicula_id'];
		$comentario = $_POST['new_comment'];

		$query = "INSERT INTO tcomentario(comentario,id_pelicula, id_usuario, fecha) VALUES ('"
			.$comentario."',".$id_pelicula.",".$user_id_a_insertar.", now())";
		mysqli_query($db,$query) or die('Error');

		echo "<p>Nuevo comentario ";
		echo mysqli_insert_id($db);
		echo " añadido</p>";

		echo "<a href='/detail.php?id=" 
		.$id_pelicula." '>Volver</a>";
		mysqli_close($db);
	?>

</body>
</html>