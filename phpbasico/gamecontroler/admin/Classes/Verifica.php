<?php 
require_once("Conexao.php");

if(!isset($_SESSION)){
    session_start();
}

if($_SESSION['liberado'] != true){
    header("location: index.php");
}

?> 