<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/materialize/css/style.css">

</head>
<body>
<main class="container">
    <form action="db/cad_usuario.php" method="post" class="row">

        <div class="col offset-m3 m6 s12">
            <h3 class="pink-text">Cadastrar</h3>
        </div>
        
        <div class="input-field col offset-m3 m6 s12">
            <label for="name">Nome</label>   
            <input type="text" name="name"> <br>   
        </div>

        <div class="input-field col offset-m3 m6 s12">
            <label for="email">E-mail</label>   
            <input type="email" name="email">  
        </div>

        <div class="input-field col offset-m3 m6 s12">
            <label for="senha">Senha</label>   
            <input type="password" name="senha" id="senha" onkeyup="validaSenha()"> 
        </div>

        <div class="input-field col offset-m3 m6 s12">
            <label for="senha">Confirmar senha:</label>   
            <input type="password" name="senha2" id="senha2" onkeyup="validaSenha()">
        </div>

        <div class="input-field col offset-m3 m6 s12">
             <button class="waves-effect modal-trigger waves-light btn-small pink lighten-2"><i class="material-icons right">send</i>Cadastrar</button>
        </div> 

        <div class="input-field col offset-m3 m6 s12">            
            <a href="index.php">Login</a>
        </div>   
           
        </form>
</main>
   

    <script>
        function validaSenha(){
            $senha = document.getElementById("senha").value;
            $senha2 = document.getElementById("senha2").value;
            if($senha != $senha2){
                document.getElementById("senha2").style.border = "red 1px solid";
            }else{
                document.getElementById("senha2").style.border = "green 1px solid";
            }
        }
    </script>

  
   
<?php require_once("footer.php"); ?>