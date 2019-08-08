<?php
require_once("include/connectaBD.php");

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE idusers =".$id;
$result = $banco->query($sql);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['btCad'])){
    $idUser = $_POST['keyUser'];
    $nomeUser = $_POST['txtNome'];
    $cargoUser = $_POST['txtCargo'];
    
    $sqlUserUp = "UPDATE users SET idusers=$idUser, nome='$nomeUser', cargo='$cargoUser' WHERE idusers= $idUser";

    if(mysqli_query($banco, $sqlUserUp)){
        header("location: usersList.php");
    }else {
        echo "deu ruim ".mysqli_error($banco);
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
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome User" value="<?php echo $row['nome'];?>">
            <input type="text" name="txtCargo" id="txtCargo" placeholder="Cargo" value="<?php echo $row['cargo'];?>">
            <input type="hidden" name="keyUser" id="keyUser" value="<?php echo $row['idusers'];?>">
            <input type="submit" name="btCad" id="btCad" value="Cadastrar">
        </form>
    </main>
</body>

</html>