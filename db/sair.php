<?php

session_start();
unset($SESSION['nome']);
unset($SESSION['email']);
unset($SESSION['perfil']);
session_destroy();
header('Location: ../index.php?erro=3');


?>