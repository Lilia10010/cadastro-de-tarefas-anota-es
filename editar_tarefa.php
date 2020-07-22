<?php

    require_once("bloqueio.php");

    $sql = mysqli_query($con, "SELECT * FROM categoria_tarefa ");
    $cod = $_GET['cod']; 
    $sql2 = mysqli_query($con, "SELECT * FROM tarefas WHERE cod = $cod ");

    $tarefa = mysqli_fetch_array($sql2);
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>

    <?php  require_once("header.php"); ?>


<h3>Editar Tarefa</h3>
    <form action="db/edit_tarefa.php" method="post">
        <input type="hidden" value="<?=$cod?>" name="cod">
        Título:   
        <input type="text" name="titulo" value="<?= $tarefa['titulo']; ?>"> <br>
        Data: 
        <input type="text" name="data" value="<?= $tarefa['data']; ?>"> <br>
        Hora: 
        <input type="text" name="hora" value="<?= $tarefa['hora']; ?>"> <br>
        Categoria:
        <input type="text" name="categoria" value="<?= $tarefa['categoria']; ?>"> <br>
        
        Descrição: 
        <textarea name="descricao" id="" cols="30" rows="10"><?= $tarefa['descricao'];?></textarea> <br>
        <button>Salvar</button>
    </form>

    
    <?php require_once("footer.php"); ?>