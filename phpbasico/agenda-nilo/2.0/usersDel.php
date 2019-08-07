<?php
require_once("include/connectaBD.php");

$quem = $_GET['id'];
$idusers = "SELECT * FROM users INNER JOIN contatos ON contatos.users_idusers = users.idusers WHERE users.idusers = '$quem'";

$resultadoDelUser = $banco->query($idusers);
if(mysqli_num_rows($resultadoDelUser) == 0){
    $sqlDel = "SELECT FROM users WHERE idusers = $idusers";

    if(mysqli_query($banco, $idusers)){
        header("location: usersList.php");
    }else{
        echo "erro ao deletar arquivo ".mysqli_error($banco);
    }
}else{
    echo "Usuarios possui contatos vinculados à sua conta, nao é possivel apagar registro";
    header("refresh:4;url=usersList.php");
}
