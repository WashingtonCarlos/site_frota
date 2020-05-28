<<<<<<< HEAD
<?php
    session_start();
    include_once("seguraca.php");
    include_once("conexao.php");
    echo "Bem Vindo Administrador: </br>";
    echo "CPF: ".$_SESSION['cpf']."  Nome: ".$_SESSION['nomeUsuario'];

        //Busca Usuario:
        $id = $_GET['id'];
        //Executa consulta:
        $result = mysqli_query($conectar,"SELECT * FROM funcionario WHERE id = '$id' LIMIT 1 ");
        $resultado = mysqli_fetch_assoc($result);

?>
<br>
<a href="administrativo.php">Voltar</a>
<br>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Visualizar Usuario</title>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ID:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['id']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    CPF:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['cpf']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    NOME:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['nome']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    E-MAIL:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['email']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ENDEREÇO:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['endereco']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    TELEFONE:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['telefone']; ?>
                </div>
            </div>
        </div>
    </div>
</body>

=======
<?php
    session_start();
    include_once("seguraca.php");
    include_once("conexao.php");
    echo "Bem Vindo Administrador: </br>";
    echo "CPF: ".$_SESSION['cpf']."  Nome: ".$_SESSION['nomeUsuario'];

        //Busca Usuario:
        $id = $_GET['id'];
        //Executa consulta:
        $result = mysqli_query($conectar,"SELECT * FROM funcionario WHERE id = '$id' LIMIT 1 ");
        $resultado = mysqli_fetch_assoc($result);

?>
<br>
<a href="administrativo.php">Voltar</a>
<br>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Visualizar Usuario</title>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ID:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['id']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    CPF:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['cpf']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    NOME:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['nome']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    E-MAIL:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['email']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ENDEREÇO:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['endereco']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    TELEFONE:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['telefone']; ?>
                </div>
            </div>
        </div>
    </div>
</body>

>>>>>>> bcfda47... "alteração Washington "
</html>