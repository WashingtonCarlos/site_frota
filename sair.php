<?php
    session_start();
    session_destroy();
    //Remover todos os dados
    unset(
        $_SESSION['nomeUsuario'],
        $_SESSION['cpf'],   
        $_SESSION['email'],       
        $_SESSION['cep'],
        $_SESSION['cidade'],
        $_SESSION['estado'],
        $_SESSION['endereco'],
        $_SESSION['ID']       
    );
    //redirecionar usuario
    header("Location: login.php");
?>