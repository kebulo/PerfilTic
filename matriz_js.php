<?php  
	$numero = $_GET['number'];

	$data = [ [], [] ];

	for ($i=0; $i < $numero; $i++) {
		for ($j=0; $j < $numero; $j++) {
			$data[$i][$j] = rand(0, 999);
		}
	}

	$json = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Matriz multiple con JS</title>
	</head>
	<body>
		<button onclick="setDoubleMatriz()">Duplicar Matriz</button>

		<div id="matriz--visual"></div>

		<script>
			var matriz = <?= $json ?>;
			var n_matriz = [[], []];

			function setDoubleMatriz(){
				for (var i = matriz.length - 1; i >= 0; i--) {
					for (var j = matriz[i].length - 1; j >= 0; j--) {
						n_matriz[i][j] = matriz[i][j]*2;
					}
				}

				document.getElementById('matriz--visual').innerHTML = n_matriz;
			}
		</script>
	</body>
</html>