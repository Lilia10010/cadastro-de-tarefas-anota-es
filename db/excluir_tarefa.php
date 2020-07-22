<?php
/*caso queira impedir que usuários padrão exclua tarefas
if($_SESSION['perfil']!=1){
    header("Location:../home.php?erro=1");
*/
require_once ("conexao.php");
session_start();
$cod = $_GET['cod'];


$sql = mysqli_query($con,  "DELETE FROM tarefas WHERE cod = $cod ");


if($sql == true){
   header("Location:../home.php");
}

?>
