<?php
include_once("../include/connectaBD.php");


// destroindo todas sessoes criadas
unset($_SESSION['liberado']);
unset($_SESSION['nome']);
unset($_SESSION['loginNome']);
unset($_SESSION['senha']);
unset($_SESSION['nivel']);

session_destroy();
header("Location: index.php");

?>