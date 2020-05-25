<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <!-- Chamada JavaScript para o campo INPUT Matricula  -->
    <script type="text/javascript" src="js/number.js"></script>

    <title>Seção de Manutenção (SEMED) - Acesso</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <?php
      unset(
         $_SESSION['nomeUsuario'],
         $_SESSION['cpf'],   
         $_SESSION['inputEmail'],       
         $_SESSION['cep'],
         $_SESSION['cidade'],
         $_SESSION['estado'],
         $_SESSION['endereco'],
         $_SESSION['telefone'],
         $_SESSION['ID']       
       );
    ?>
    <form class="form-signin" method ="POST" action = "valida_login.php">
      <img class="mb-4" src="image/ube12.png" alt="seção de manutenção" width = 180 height = 90>
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputNumber" class="sr-only">CPF</label>
      <input type="text" id="inputNumber"  class="form-control" name="cpf" placeholder="CPF - somente os numeros" onkeypress="return onlynumber();" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020 - Seção de Manutenção</p>      
      <p class = "text-center text-danger" >
        <?php
          if (isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          }
        ?>
      </p>
    </form>  
  </body>
</html>
