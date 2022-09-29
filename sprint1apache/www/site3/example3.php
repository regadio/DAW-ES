<html>
	<body>
	<h1>Example3</h1>
	<?php

	function edad_en_años($edad){
		return $edad + 10;
	}
	if (edad_en_años($_GET["edad"])>65){
		echo "Tendras edad de jubilación";
	}else{
		echo "Disfruta";
	}
	?>
	</body>
</html>
