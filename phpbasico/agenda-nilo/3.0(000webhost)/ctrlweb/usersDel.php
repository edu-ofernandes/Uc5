<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");


$idUser = addslashes($_GET['id']); 
$idUser = mysqli_real_escape_string($banco, $idUser);
$sqlList = "SELECT * FROM contatos WHERE users_idusers=$idUser";
$resultList = $banco->query($sqlList);



if(empty(mysqli_query($banco, $resultList))){
    $sql = "DELETE FROM users WHERE idusers=$idUser";
    $result = $banco->query($sql);
    header("location: users.php");
}else{
    echo '<script>Alert("Usuario possui contatos e nao pode ser apagado!");</script>';
    header("location: users.php"); 
}

// $sql = "DELETE FROM users WHERE idusers=$idUser";
// $result = $banco->query($sql);
 


?>
