<?php
    session_start();
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Alexandre Tanaka">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Área para Usuário Cadastrado</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <link href="css/bootstrap_login.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <?php
        unset($_SESSION['usuarioId'],          
              $_SESSION['usuarioNome'],      
              $_SESSION['usuarioNivelAcesso'],
              $_SESSION['usuarioLogin'],       
              $_SESSION['usuarioSenha']);    
    ?>
<form class="form-signin" method="post" action="valida_login.php">
    <h1 class="h3 mb-3 font-weight-normal text-center">Área para Usuário Cadastrado</h1>
    <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o usuário" required autofocus><br>
    <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button><br>
    <p class="text-center text-danger">
        <?php
            if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
        ?>
    </p>
</form>
</body>
</html>
