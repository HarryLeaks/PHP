<html>
	<head>
	</head>
	<body>
		<table border="1">
			<tr><td><b>Número<td><b>Quadrado
				<?php 
				    for ($i = 1; $i <= 16; $i++) {
				        $q = pow(2,$i);
				        echo "<tr><td>$i<td>$q";
				    }
				?>
		</table>
	</body>
</html>
