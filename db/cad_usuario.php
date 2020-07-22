<?php

require_once ("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$perfil = 2;

$sql = mysqli_query($con,  "INSERT INTO usuario (nome, email, senha, perfil_cod) VALUES ('$nome', '$email', '$senha', '$perfil') " );


if($sql == true){
    header('Location:../index.php?erro=4');
}