<?php

    require_once('include/connectaBD.php');
    $quem = $_GET['id'];
    $sqlDel = "DELETE FROM contatos WHERE idcontatos =".$quem;

    if(mysqli_query($banco, $sqlDel)){
        header("location: index.php");
    }else{
        echo ("deu ruim");
    }

?>