<?php

require_once("conexao.php");

session_start();

$email = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = mysqli_query($con,  "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ");

//echo $total_empresa = $sql->num_rows;

if(mysqli_num_rows($sql) > 0)
{
    $dados = mysqli_fetch_array($sql);
    $_SESSION['cod']    = $dados['cod'];
    $_SESSION['nome']   = $dados['nome'];
    $_SESSION['email']  = $dados['email'];
    $_SESSION['perfil'] = $dados['perfil_cod'];
    
    header('location:http://'.$site.'home.php');
}
else
{
	echo "<script>alert('Login ou Senha inválido(a), tente novamente.');</script>";
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  echo $login;
  echo $senha;
  header('location:http://'.$site.'index.php?erro=2');
  
}

?>