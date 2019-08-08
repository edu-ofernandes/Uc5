<?php

require_once("include/connectaBD.php");

if(isset($_POST['btCad'])){
    $nome = $_POST['txtNome'];
    $cargo = $_POST['txtCargo'];


    $sqlAddUser = "INSERT INTO users VALUES (NULL, '$nome', '$cargo')";

    if(mysqli_query($banco, $sqlAddUser)){
        header("location: usersList.php");
    }else{
        echo "Erro ao inserir ".mysqli_erro($banco);
    }
}


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda2.0 - AnDaNilo</title>
    <link rel="stylesheet" href="./css/folha.css" type="text/css">
    <script src="https://kit.fontawesome.com/8e7c1629c9.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    
    <?php include('include/inc_menu.php'); ?>
    <main>
        <form action="#" method="post" id="formUser" name="formUser">
            <h2>Cadastro Usuarios</h2>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome User">
            <input type="text" name="txtCargo" id="txtCargo" placeholder="Cargo">
            <input type="submit" name="btCad" id="btCad" value="Cadastrar">
        </form>

    </main>
    
</body>

</html>