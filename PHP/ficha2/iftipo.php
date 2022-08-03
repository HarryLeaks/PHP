<form method="POST" action="">
    <input type="radio" name="tipo" value="Aluno">Aluno
    
    <input type="radio" name="tipo" value="Professor">Professor
    
    <input type="radio" name="tipo" value="Administrador">Administrador
	
	<input type="submit" name="submit" value="Submit">
</form>

<?php 
    if(!empty($_POST["tipo"])){
        if($_POST["tipo"] == "Administrador")
            echo "Bem vindo Administrador";
        else if($_POST["tipo"] == "Professor")
            echo "Bem vindo Professor";
        else if($_POST["tipo"] == "Aluno")
            echo "Bem vindo Aluno";
    }
?>
