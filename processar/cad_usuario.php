<?php
session_start();
include_once("../seguraca.php");
include_once("../conexao.php");
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
echo "email: ".$email;
$query = mysqli_query($conectar,"INSERT INTO funcionario (cep,cidade,cpf,created,email,endereco,estado,nivel_acesso_id,nome,senha,telefone) 
VALUES ('$cep','$cidade','$cpf',now(),'$email','$endereco','$estado','$nivelAcesso','$usuario','$senha','$telefone')");
    
    if(mysqli_affected_rows($conectar)!= 0){
        header("Location: ../administrativo.php");
    }
?>