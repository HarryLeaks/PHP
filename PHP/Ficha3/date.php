<html>
	<head>
	</head>
	<body>
		<?php 
		  $d = date("D");
		  switch($d){
		      case "Mon":
		          echo "Boa Segunda-feira";
		          break;
		      case "Tue":
		          echo "Boa Terça-feira";
		          break;
		      case "Wed":
		          echo "Boa Quarta-feira";
		          break;
		      case "Thu":
		          echo "Boa Quinta-feira";
		          break;
		      case "Fri":
		          echo "Boa Sexta-feira";
		          break;
		      case "Sat":
		          echo "Bom Sábado";
		          break;
		      case "Sun":
		          echo "Bom Domingo";
		          break;
		  }
		?>
	</body>
</html>