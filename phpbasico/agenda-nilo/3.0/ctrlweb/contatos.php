<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");

// $idUser = $_SESSION[''];


// listando contatos
$sql = "SELECT * FROM contatos";
$result = $banco->query($sql);






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
                <h2>Listando todos os Contatos</h2>
                <h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>
                <div class="list">
                <?php while($row = mysqli_fetch_array($result)){?>
                    <div class="contanier">
                        <div class="listFt"><img src="../image/<?php echo $row['foto'];?>" alt="Foto contato"></div>
                        <div class="listNome">Nome: <?php echo $row['nome'];?></div>
                        <div class="listTel">Telefone: <?php echo $row['tel'];?></div>
                        <div class="listEmail">Email: <?php echo $row['email'];?></div>
                        <button class="editar"><a href="contatoUp.php?idUp=<?php echo $row['idcontatos'];?>">Editar</a></button>
                        <button class="excluir"><a href="contatoDel.php?idDel=<?php echo $row['idcontatos'];?>">Excluir</a></button>
                    </div>
                    <?php }?>
                </div>
               
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>