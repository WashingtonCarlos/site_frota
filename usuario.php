<?php
    session_start();
    include_once("seguraca.php");
    echo "Bem Vindo  Usuario: </br>";
    echo "CPF: ".$_SESSION['cpf']." ".$_SESSION['nomeUsuario'];

?>
<br>
<a href="sair.php">Sair</a>