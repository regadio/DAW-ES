<?php 
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die ('Fail');
?>
<html>
<body>
	<?php 
		$id_pelicula = $_POST['id_pelicula'];
		$comentario = $_POST['new_comment'];

		$query = "INSERT INTO tcomentario(comentario,id_pelicula,id_usuario, fecha) VALUES ('"
			.$comentario."',".$id_pelicula.",NULL, now())";

		mysqli_query($db,$query) or die('Error');

		echo "<p>Nuevo comentario ";
		echo mysqli_insert_id($db);
		echo " añadido</p>";

		echo "<a href='/detail.php?id_pelicula=" 
		.$id_pelicula." '>Volver</a>";
		mysqli_close($db);
	?>

</body>
</html>