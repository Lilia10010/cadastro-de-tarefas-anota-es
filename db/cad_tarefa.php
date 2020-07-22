<?php

require_once ("conexao.php");
session_start();

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$cod_usuario = $_SESSION['cod'];
$categoria = $_POST['categoria'];

$sql = mysqli_query($con,"INSERT INTO 
            tarefas (titulo, data, hora, descricao, usuario_cod, categoria)
            VALUES
            ('$titulo', '$data', '$hora', '$descricao', '$cod_usuario', '$categoria')
        ");


if($sql == true){
   header("Location:../home.php");
}



?>