<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");

$id = addslashes($_GET['idDel']);
$id = mysqli_escape_string($banco, $id);
$sqlDel = "DELETE FROM contatos WHERE idcontatos=".$id;

if(mysqli_query($banco, $sqlDel)){
    header("location: contatos.php");
}else{
    echo ("deu ruim");
}







?>