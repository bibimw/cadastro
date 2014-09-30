<!DOCTYPE html>
<html>
<head>
	<title> Cadastro </title>
	<meta charset="UTF-8">
</head>	
<body>
    <form method="POST" action="cadastro.php"> 
       
                    <?php $username = $_POST['username']; if(strlen($username)<6 OR empty($username))
                    {echo " Verifique se o campo do Username esta preenchido, ou se ele tem menos de 6 caracteres.<br/>";}?>
                    
                    <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
                    {echo " Verifique se o campo Senha esta preenchido, ou se a senha tem menos de 5 digitos.<br/>";}?>
 		
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
 
        </br> </br> <?php include 'cadastro.php';?>
        
    </form>		
</body>
</html>


 