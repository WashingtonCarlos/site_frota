<?php
    session_start();
    $cpft = $_POST['cpf'];
    $senhat = $_POST['senha'];
    include_once("conexao.php");
    
    $result1  = mysqli_query($conectar,"SELECT * FROM funcionario WHERE cpf = '$cpft' AND senha = '$senhat' LIMIT 1 ");
    $resultado = mysqli_fetch_array($result1);
    echo $resultado['nome'];

    if (empty($resultado)){
        //mensagem de erro
        $_SESSION['loginErro'] = "Usuario ou senha inválido";

        //Mandar o usuario para a tela de login
        header("Location: login.php");
    }else{
        //Define o que é atribuido no banco de dados
        $_SESSION['nomeUsuario']      = $resultado['nome'];
        $_SESSION['cpf']              = $resultado['cpf'];
        $_SESSION['inputEmail']       = $resultado['email'];
        $_SESSION['nivelAcesso']      = $resultado['nivel_acesso_id'];
        $_SESSION['CEP']              = $resultado['cep'];
        $_SESSION['CIDADE']           = $resultado['cidade'];
        $_SESSION['ESTADO']           = $resultado['estado'];
        $_SESSION['TELEFONE']         = $resultado['telefone'];
        $_SESSION['ENDERECO']         = $resultado['endereco'];
        $_SESSION['senha']            = $resultado['senha'];
        $_SESSION['ID']               = $resultado['id'];


        if($_SESSION['nivelAcesso'] == 1){
            //redirecionando para pagina administrativa
            header("Location: administrativo.php");
        }else {
            //redirecionando para pagina comum do usuario 
            header("Location: usuario.php");
        }
    }  
?>
