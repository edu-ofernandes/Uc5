<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");

$id = $_GET['idDel'];
$sqlDel = "DELETE FROM contatos WHERE idcontatos=".$id;

if(mysqli_query($banco, $sqlDel)){
    header("location: contatos.php");
}else{
    echo ("deu ruim");
}







?>