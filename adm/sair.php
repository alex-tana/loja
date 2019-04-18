<?php
session_start();
session_destroy();

//Remove todas as informações contidas na variaveis globais

unset($_SESSION['usuarioId'],          
$_SESSION['usuarioNome'],      
$_SESSION['usuarioNivelAcesso'],
$_SESSION['usuarioLogin'],       
$_SESSION['usuarioSenha']);

//Redirecione o usuario para a pagina de login
header("Location: login.php");
?>
