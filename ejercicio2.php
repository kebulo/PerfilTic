<?php  
	// Número primo
	$numero = $_GET['number'];

	for ($i=2; $i < $numero; $i++) {
		$primo = findPrime($i);

		if ($primo) {
			echo $i.'&nbsp;';
		}
	}

	function findPrime($numero){
		for ($i = 2; $i < $numero; $i++) {
			if (($numero % $i) === 0) {
				return false;
			}
		}

		return true;
	}
?>