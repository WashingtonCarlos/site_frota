<?php
    ob_start();
    if(($_SESSION['ID'] == "") || ($_SESSION['nomeUsuario'] == "") || ($_SESSION['cpf'] == "") || ($_SESSION['senha'] == "")){
        unset(
            $_SESSION['nomeUsuario'],
            $_SESSION['cpf'],   
            $_SESSION['inputEmail'],       
            $_SESSION['CEP'],
            $_SESSION['CIDADE'],
            $_SESSION['ESTADO'],
            $_SESSION['ENDERECO'],
            $_SESSION['TELEFONE'],
            $_SESSION['senha'],
            $_SESSION['ID']       
        );
        //Mensagem de erro
        $_SESSION['loginErro'] = "Area restrita para usuarios cadastrados";
        //Manda para tela de login
        header("Location: login.php");
    }
?>