<?php
session_start();
include_once("seguranca.php");
echo "Bem vindo usuário: " . $_SESSION['usuarioNome'] . "<br>";
?>
<br>
<a href="sair.php">Sair</a>
