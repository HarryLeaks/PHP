<html>
	<head>
		<meta charset="ISO-8859-1">
	</head>
	<body>
		<form method="POST" action="">
			<input type="radio" name="tipo" value="Aluno">Aluno
			
			<input type="radio" name="tipo" value="Professor">Professor
			
			<input type="radio" name="tipo" value="Administrador">Administrador
			
			<input type="submit" name="submit" value="Submit">
		</form>

		<form method="POST" action="">
			<input type="number" name="num1">
			<input type="number" name="num2">
			<input type="number" name="num3">

			<input type="submit" name="submit" value="Submit">
		</form>

		<?php 
		  function escreverNome(){
		      echo "Francisco Santos";  
		  }

		  function Data(){
			echo "Hoje: ".date("Y/m/d");
		  }

		  function tipo_utilizador(){
			if(!empty($_POST["tipo"])){
				if($_POST["tipo"] == "Administrador")
					echo "Bem vindo Administrador";
				else if($_POST["tipo"] == "Professor")
					echo "Bem vindo Professor";
				else if($_POST["tipo"] == "Aluno")
					echo "Bem vindo Aluno";
			}
		  }

		  function randnum(){
			echo "number: ".rand(0, 10);
		  }

		function soma($num1, $num2, $num3){
			if($num1 != NULL && $num2 != NULL && $num3 != NULL)
				return $num1 + $num2 + $num3;	
		}

		  echo "<br><br>";

		  echo "O meu nome é ";
		  escreverNome();

		  echo "<br><br>";

		  Data();
		  
		  echo "<br><br>";

		  tipo_utilizador();

		  echo "<br><br>";

		  randnum();

	      echo "<br><br>";

		  if(!empty($_POST["num1"]) || !empty($_POST["num2"]) || !empty($_POST["num3"]))
		  	echo "A Soma é ".soma($_POST["num1"], $_POST["num2"], $_POST["num3"]);
		?>
	</body>
</html>