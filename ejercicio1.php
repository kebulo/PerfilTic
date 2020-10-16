<?php  
	// Texto multiple
	$numero = $_GET['n'];
	$texto	= $_GET['s'];

	for ($i=0; $i < $numero; $i++) {
		echo '&nbsp;'.$texto;
	}
?>