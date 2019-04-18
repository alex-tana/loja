<?php
session_start();

$usuariot = $_POST["usuario"];
$senhat = $_POST["senha"];

include_once("conexao.php");
$result = mysqli_query($link, "SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuário: " . $resultado['nome'] . "<br>";
//echo "Senha: " . $resultado['senha'];
if(empty($resultado)){
    //Mensagem de erro
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    
    //Manda para o login
    header("location: login.php");
}else{
    //Define os valores atribuidos na sessao do usuario
    $_SESSION['usuarioId']          = $resultado['id'];
    $_SESSION['usuarioNome']        = $resultado['nome'];
    $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
    $_SESSION['usuarioLogin']       = $resultado['login'];
    $_SESSION['usuarioSenha']       = $resultado['senha'];
    
    if($_SESSION['usuarioNivelAcesso'] == 1){
        header("Location: administrativo.php");
    }else{
        header("Location: usuario.php");
    }
}

?>