<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");

$nome              = $_POST["nome"];
$email             = $_POST["email"];
$usuario           = $_POST["usuario"];
$senha             = $_POST["senha"];
$nivel_de_acesso   = $_POST["nivel_de_acesso"];

$query = mysqli_query($link, "INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id, created) VALUES ('$nome','$email','$usuario','$senha','$nivel_de_acesso', NOW())");
if(mysqli_affected_rows($link) != 0){
    header("Location: ../listar_usuario.php");
}
?>