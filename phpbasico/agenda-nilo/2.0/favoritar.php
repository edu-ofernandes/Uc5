<?php
require_once("include/connectaBD.php");

$idContato = $_GET['id'];
$sqlContato = "SELECT favoritos FROM contatos";
$resultSql = $banco->query($sqlContato);
$row = mysqli_fetch_array($resultSql);

if($row['favoritos'] == 0){
    $sqlFav = "UPDATE contatos SET favoritos ='1' WHERE idcontatos = '$idContato'";
    if(mysqli_query($banco, $sqlFav)){
        header("location: index.php");
    }else{
        echo "erro ".mysqli_error($banco);
    }
    
}else{
    $sqlFav = "UPDATE contatos SET favoritos ='0' WHERE idcontatos = '$idContato'";
    if(mysqli_query($banco, $sqlFav)){
        header("location: index.php");
    }else{
        echo "erro ".mysqli_error($banco);
    }
}






?>