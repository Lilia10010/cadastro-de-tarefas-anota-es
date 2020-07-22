<?php
require_once('bloqueio.php');        
$cod = $_SESSION['cod'];
if(isset($_GET['busca'])){
    $busca = $_GET['busca'];
}else{
    $busca = '';
}

if($_SESSION['perfil'] !=1){
    $sql_tarefas = mysqli_query($con, "SELECT *, t.cod as codt FROM tarefas t WHERE usuario_cod = $cod AND (titulo like '%$busca%' OR descricao like '%$busca%') ORDER BY data, hora asc ");
}else{
    $sql_tarefas = mysqli_query($con, "SELECT *,  u.cod as codu, t.cod as codt  FROM tarefas t, usuario u WHERE t.usuario_cod = u.cod AND titulo LIKE '%$busca%' ORDER BY data, hora asc ");
}  
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas Diárias</title>
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/materialize/css/style.css">
</head>
<body>
    

    <nav class="header">
        <div class="nav-wrapper pink lighten-2">
        <!-- retirado   <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
            <span class="white-text name"> Olá, <?= $_SESSION['nome']?></span> 
            <ul class="right"> 
             <li>  <a href="db/sair.php" style="display: flex"> Sair <i class="material-icons">exit_to_app</i></a> </li>
                
            </ul>
        </div>
  </nav>







    