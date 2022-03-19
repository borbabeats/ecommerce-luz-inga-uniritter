<?php 

$servidor = 'localhost';
 $banco = 'mydatabase';
 $usuario = 'root';
 $senha = 'root';
 $link = mysql_connect($servidor, $usuario, $senha);
 $db = mysql_select_db($banco, $link);


  if(!$link)
  {
      echo "Ocorreu um erro na conexão com o banco de dados.";
       exit();
      }



if (isset($_POST["acao"])){ 

   $nome=$_POST["nome"]; 
   $telefone=$_POST["tel"]; 
   $email=$_POST["email"]; 
   $endereco=$_POST["endereco"]; 
   $cidade=$_POST["cidade"]; 


    echo "<p>O nome do usuário é: ".$nome."</p>";
    echo "<p>Seu email é: ".$email."</p>";
    echo "<p>Seu telefone é: ".$tel."</p>";
    echo "<p>Seu endereço é: ".$endereco."</p>";
    echo "<p>Sua cidade é: ".$cidade."</p>";

}
?>
