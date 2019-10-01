<?php 
ob_start();
require_once('connectaBD.php');
//arquivo para validar se esta logado. se a ssesao for true nao faz nd, caso contrario voltar para se logar 
if(!isset($_SESSION)){
    session_start();
}

if($_SESSION['liberado'] != true){
    header('location: ../ctrlweb/index.php');
//	header('Location: http://www.example.com/');
}
ob_end_flush();
?>
