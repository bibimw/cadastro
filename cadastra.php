<!DOCTYPE html>
<html>
<head>
	<title> Cadastro </title>
	<meta charset="UTF-8">
</head>	
<body>
    <form method="POST" action="cadastro.php"> 
       
 		
	<?php	
            echo $_POST['nome'];
            echo "<br>";
            echo $_POST['email'];
            echo "<br>";
            echo $_POST['datanascimento'];
            echo "<br>";
            echo $_POST['sexo'];
            echo "<br>";
            echo $_POST['profissao'];
            echo "<br>";
            echo $_POST['telefone'];
            echo "<br>";
            echo $_POST['endereco'];
            echo "<br>";
            echo $_POST['cidade'];
            echo "<br>";
            echo $_POST['estado'];
            echo "<br>";
            echo $_POST['cep'];
            echo "<br>";
            echo $_POST['username'];
     ?>
 
        </br> </br><input type="submit" value="Finalizar" name="finalizar">
        
    </form>		
</body>
</html>


 