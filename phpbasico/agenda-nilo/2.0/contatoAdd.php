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
    <title>PokeAgenda2.0 - AnDaNilo - Cadastrar</title>
    <link rel="stylesheet" href="css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    <header>
        <?php include('include/inc_topo.php'); ?>
    </header>
    <nav>
        <?php include('include/inc_menu.php'); ?>
    </nav>
    <main>
        <article>
            <h1>Agenda de clientes/contato</h1>
            <section id="listar">
                <h2>Novo cadastro</h2>
                <div id="newCad">
                    <form action="#" method="post" name="formCad" id="formCad">
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
                        <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
                        <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail">
                        <select name="selUser" id="selUser">
                            <option value="">Selecione</option>

                            <!-- loop começa aqui -->
                            <?php
                            while ($row2 = mysqli_fetch_assoc($return)) {
                                ?>
                                <option value="<?php echo ($row2['idusers']); ?>"><?php echo ($row2['nome']); ?></option>

                            <?php
                            }
                            ?>
                            <!-- loop termina -->
                        </select>
                        <input type="submit" name="btCad" id="btCad" value="Cadastrar">
                    </form>
                </div>
            </section>
        </article>
    </main>
    <footer><?php include('include/inc_rodape.php'); ?></footer>
</body>

</html>