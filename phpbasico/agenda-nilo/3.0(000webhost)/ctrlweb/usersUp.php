<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");



    $idUsers = $_GET['id'];
    $sqlList = "SELECT * FROM users WHERE idusers=$idUsers";
    $resultList = $banco->query($sqlList);
    $rowList = mysqli_fetch_assoc($resultList);

    if(isset($_POST['btCad'])){
        $nome = addslashes($_POST['txtNome']);
        $nomeUsuario = addslashes($_POST['txtNomeUsuario']);
        $senha = md5(addslashes($_POST['txtSenha']));
        $nivel = $_POST['selNivel'];

        $sql = "UPDATE users SET idusers=$idUsers, nome='$nome', login='$nomeUsuario', senha='$senha', nivel='$nivel' WHERE idusers=$idUsers";
        $resultList = $banco->query($sql);
        header("location: users.php");
    }



?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo - Controle</title>
    <link rel="stylesheet" href="../css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>

<body>
    <header>
        <div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
        <div id="search">
            <form action="#" method="get" name="formBusca" id="formBusca">
                <input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
                <input type="submit" name="btSerach" id="btSearch" value="Buscar">
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="contatos.php">Contatos</a></li>
            <li><a href="users.php">Usuários</a></li>
            <li><a href="event.php">Eventos</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <section id="listar">
                <h2>Alterando Usuarios</h2>

                <?php ?>

                <form action="#" method="post" id="formUser" name="formUser">
                    <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="<?php echo $rowList['nome'];?>">
                    <input type="text" name="txtNomeUsuario" id="txtNomeUsuario" placeholder="Nome de usuario" value="<?php echo $rowList['login'];?>">
                    <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" value="<?php echo $rowList['senha'];?>">

                    <?php if($rowList['nivel'] === 0){?>

                    <!-- verificar os inputs radios para imprimir o que ja estao setado -->
                    <label for="selNivel">Comum</label>
                    <input type="radio" name="selNivel" id="selNivel0" value="0" checked>
                    <label for="selNivel">Admin</label>
                    <input type="radio" name="selNivel" id="selNivel1" value="1">

                    <input type="submit" name="btCad" id="btCad" value="Cadastrar">

                    <?php }else{?>

                    <label for="selNivel">Comum</label>
                    <input type="radio" name="selNivel" id="selNivel0" value="0" >
                    <label for="selNivel">Admin</label>
                    <input type="radio" name="selNivel" id="selNivel1" value="1" checked>

                    <input type="submit" name="btCad" id="btCad" value="Cadastrar">

                    <?php }?>

                </form>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>