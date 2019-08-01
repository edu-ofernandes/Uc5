<?php
    // requerimento de conexao com banco
    require_once('include/connectaBD.php');

    // variavel armazenando o id do contato que ira ser excluido que veio pelo get 
    $contato_delete = $_GET['id'];

    // sql para deletar o contato
    $sql_delete = "DELETE FROM contatos WHERE idcontatos=".$contato_delete;
    
    
    if(mysqli_query($banco, $sql_delete)){
        header("location: index.php");
    }else{
        echo ("deu ruim");
    }

?>