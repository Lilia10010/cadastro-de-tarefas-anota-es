<?php

require_once ("conexao.php");
session_start();

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$cod_tarefa = $_POST['cod'];
$categoria = $_POST['categoria'];

$sql = mysqli_query($con,  "UPDATE tarefas SET
                                titulo = '$titulo', 
                                data = '$data', 
                                hora = '$hora', 
                                descricao = '$descricao', 
                                categoria = '$categoria'
                                WHERE cod = $cod_tarefa  
                                
                                ");


if($sql == true){
 header("Location:../home.php");
}

?>