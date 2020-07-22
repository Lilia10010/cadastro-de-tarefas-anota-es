<?php

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "tarefasdiarias";
$site       = "localhost/tarefasdiarias/";


$con = mysqli_connect($servidor,$usuario,$senha,$banco);
mysqli_set_charset ( $con , 'utf8' );
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con, $banco);

?>