<?php
require_once("include/connectaBD.php");

$id = $_GET['id'];
$sqlIdUsers = "SELECT * FROM users INNER JOIN contatos ON contatos.users_idusers = users.idusers WHERE users.idusers = ".$id;
$resultadoDelUser = $banco->query($sqlIdUsers);


if($row = mysqli_num_rows($resultadoDelUser) == 0){
    $sqlDelUser = "DELETE FROM users WHERE idusers =".$id;

    if(mysqli_query($banco, $sqlDelUser)){
        header("location: usersList.php");
    }else {
        echo "teste nao deu certo";
    }
}else {
    echo "Nao é possivel excluir usuarios com contatos";
    header("refresh: 3; url=usersList.php");
}


