<?php
require_once("Classes/Conexao.php");
require_once("Classes/Verifica.php");


unset($_SESSION['liberado']);


session_destroy();

// echo $_SESSION['logado'];
header("location: index.php");

?>