<?php
if(isset($_GET['erro'])){
    if($_GET['erro'] == 1){
       $erro = "Acesso Negado!";
    }else if($_GET['erro'] == 2){
        $erro = "E-mail ou senha inválidos!";
    }else if($_GET['erro'] == 3){
        $erro = "Logout realizado com sucesso!";
    }else if($_GET['erro'] == 4){
        $erro = "Cadastro realizado com sucesso!";
    }
    }else{
    $erro = "";
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/materialize/css/style.css">
</head>
<body>

<main class="container">
    
    <form action="db/verifica_login.php" method="post" class="row">
        <div class="col offset-m3 m6 s12">
            <h3 class="pink-text">Login</h3>
        </div>
        
        <div class="input-field col offset-m3 m6 s12">
            <input type="text" name="login" id="login">
            <label for="login">E-mail</label>            
        </div>

        <div class="input-field col offset-m3 m6 s12">
            <input type="password" name="senha" id="senha">
            <label for="senha">Senha</label>   
        </div>

        <div class="input-field col offset-m3 m6 s12">
            <span id="error"><?php echo $erro; ?></span> <br>
            <button class="btn waves-effect waves-light pink lighten-2"><i class="material-icons right">send</i>Logar</button> 
            <div class="divider"></div>            
        </div>

        <div class="input-field col offset-m3 m6 s12">            
            <a href="cadastro.php">Cadastre-se</a>
        </div>
      
    </form>
    
    </main>
    <script src="assets/materialize/js/materialize.min.js"></script>  
</body>
</html>