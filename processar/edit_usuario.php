<<<<<<< HEAD
<?php
session_start();
include_once("../seguraca.php");
include_once("../conexao.php");
$id          = $_POST['id'];
$cpf         = $_POST['cpf'];
$senha       = $_POST['senha'];
$email       = $_POST['inputEmail'];
$usuario     = $_POST['nome'];
$endereco    = $_POST['endereco'];
$cidade      = $_POST['cidade'];
$nivelAcesso = $_POST['nivel_de_acesso'];
$estado      = $_POST['inputEstado'];
$cep         = $_POST['cep'];
$telefone    = $_POST['telefone'];

$query = mysqli_query($conectar,"UPDATE funcionario SET cep = '$cep', cidade = '$cidade', cpf = '$cpf', email = '$email', 
endereco = '$endereco', estado = '$estado', id = '$id', modified = now(), nivel_acesso_id = '$nivelAcesso', nome = '$usuario',
senha = '$senha', telefone = '$telefone' WHERE id = '$id' ");
  
  if(mysqli_affected_rows($conectar)!= 0){
      header("Location: ../administrativo.php");
  }
=======
<?php
session_start();
include_once("../seguraca.php");
include_once("../conexao.php");
$id          = $_POST['id'];
$cpf         = $_POST['cpf'];
$senha       = $_POST['senha'];
$email       = $_POST['inputEmail'];
$usuario     = $_POST['nome'];
$endereco    = $_POST['endereco'];
$cidade      = $_POST['cidade'];
$nivelAcesso = $_POST['nivel_de_acesso'];
$estado      = $_POST['inputEstado'];
$cep         = $_POST['cep'];
$telefone    = $_POST['telefone'];

$query = mysqli_query($conectar,"UPDATE funcionario SET cep = '$cep', cidade = '$cidade', cpf = '$cpf', email = '$email', 
endereco = '$endereco', estado = '$estado', id = '$id', modified = now(), nivel_acesso_id = '$nivelAcesso', nome = '$usuario',
senha = '$senha', telefone = '$telefone' WHERE id = '$id' ");
  
  if(mysqli_affected_rows($conectar)!= 0){
      header("Location: ../administrativo.php");
  }
>>>>>>> bcfda47... "alteração Washington "
?>