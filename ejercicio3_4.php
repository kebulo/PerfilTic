<?php  
	// Matriz con número aleatorio
	$numero = $_GET['number'];

	$data = [ [], [] ];

	for ($i=0; $i < $numero; $i++) {
		for ($j=0; $j < $numero; $j++) {
			$data[$i][$j] = rand(0, 999);
		}
	}

	echo $data;

	// Sentencia SQL
	"SELECT propietario.*, vehiculo.id AS id_vehiculo, propietarioid, color FROM propietario LEFT JOIN vehiculo ON vehiculo.propietarioid = propietario.id WHERE 1";
?>