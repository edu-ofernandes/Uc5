<?php
require_once('include/connectaBD.php');
$sql2 = "SELECT * FROM  users";
$return = $banco->query($sql2);

// cadastrar novo contato

if (isset($_POST['btCad'])) {

    $nome = $_POST['txtNome'];
    $tel = $_POST['txtTelefone'];
    $email = $_POST['txtEmail'];
    $star = '0';
    $iduser = $_POST['selUser'];


    $execute = "INSERT INTO contatos VALUES (NULL, '$nome', '$tel', '$email','$star', '$iduser')";

    if (mysqli_query($banco, $execute)) {

        header("location: index.php");
    } else {
        echo ("deu ruim" . mysqli_connect_errno($banco));
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

        <form action="#" method="post" name="formCad" id="formCad">
            <h2>Novo Contato</h2>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
            <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
            <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail">
            <select name="selUser" id="selUser">
                <option value="">Selecione</option>
                <!-- loop começa aqui -->
                <?php while ($row2 = mysqli_fetch_assoc($return)) { ?>
                    <option value="<?php echo ($row2['idusers']); ?>"><?php echo ($row2['nome']); ?></option>
                <?php }?>
                <!-- loop termina -->
            </select>
            <input type="submit" name="btCad" id="btCad" value="Cadastrar">
        </form>

    </main>
    
</body>

</html>