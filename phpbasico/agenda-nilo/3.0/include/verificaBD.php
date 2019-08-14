<?php
require_once("connectaBD.php");


// pegar dados do login


// "addslashes()" para evitar form ir vazio
$loginNome = addslashes($_POST['txtLogin']);
$senha = addslashes($_POST['txtSenha']) ;
// convertendo senha em md5, um hash
$senha = md5($senha);

$sqlLogin = "SELECT * FROM users WHERE login= '$loginNome' AND senha= '$senha'";
$result = mysqli_query($banco, $sqlLogin);
$row = mysqli_fetch_array($result);

    if(empty($row)){

        
        $_SESSION['liberado'] = true;
        $_SESSION['login'] = $loginNome;
        header("location: ../ctrlweb/admin.php");

        
    }else{
        
        header("location: ../ctrlweb/index.php");
    }





?>