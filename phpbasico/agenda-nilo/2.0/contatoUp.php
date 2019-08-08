<?php
require_once("include/connectaBD.php");


$idcontato = $_GET['id'];
$sqlUser = "SELECT idcontatos, contatos.nome AS nomeContato, tel, email, favoritos, users.idusers, idusers, users.nome AS nomeUser FROM contatos RIGHT JOIN users 
ON contatos.users_idusers = users.idusers WHERE idcontatos= '$idcontato'";
$resultContatoUp = $banco->query($sqlUser);
$row = mysqli_fetch_assoc($resultContatoUp);

$sqlIdUser = "SELECT * FROM users";
$resultIdUser = $banco->query($sqlIdUser);


if(isset($_POST['btCad'])){
    
    $idcontato = $_POST['keyContato'];
    $nome = $_POST['txtNome'];
    $tel = $_POST['txtTelefone'];
    $email = $_POST['txtEmail'];
    $star = '0';
    $idUser = $_POST['selUser'];
  
    
    $sqlUp = "UPDATE contatos SET nome = '$nome', tel = '$tel', email = '$email', favoritos = '$star', users_idusers = $idUser 
    WHERE idcontatos = $idcontato";



    if(mysqli_query($banco, $sqlUp)){
        header("location: index.php");
    }else{
        echo "erro ".mysqli_error($banco);
        echo $sqlUp;
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
        <div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
        <div id="search">
            <form action="#" method="get" name="formBusca" id="formBusca">
                <input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
                <input type="submit" name="btSerach" id="btSearch" value="Buscar">
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Contatos</a></li>
            <li><a href="usersList.php">Usuários</a></li>
            <li><a href="javascript:history.back();">Voltar</a></li>
    </nav>
    <main>
        <article>
            <h1>Agenda de clientes/contato</h1>
            <section id="listar">
                <h2>Alterando cadastro</h2>
                <div id="newCad">

                    <form action="#" method="post" name="formCad" id="formCad">
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="<?php echo $row['nomeContato'];?>">
                        <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone" value="<?php echo $row['tel'];?>">
                        <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail" value="<?php echo $row['email'];?>">
                        <select name="selUser" id="selUser" >
                            <option value="<?php echo $row['idusers'];?>"><?php echo $row['nomeUser'];?></option>
                            
                            <!-- novo loop user -->
                            <?php while($row2 = mysqli_fetch_array($resultIdUser)){?>
                            <option value="<?php echo $row2['idusers'];?>"><?php echo $row2['nome'];?></option>
                            <?php }?>
                            <!-- termina loop -->
                        </select>
                        <input type="hidden" name="keyContato" id="keyContato" value="<?php echo $row['idcontatos'];?>">
                        <input type="submit" name="btCad" id="btCad" value="Alterar">
                    </form>
                </div>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>