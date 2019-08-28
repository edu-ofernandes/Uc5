<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");


$sql = "SELECT * FROM agendamentos ORDER BY idagendamentos ASC";
$resultAgenda = $banco->query($sql);


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
                <h2>Listando Eventos</h2>
                <h3><a href="eventAdd.php">Cadastrar Evento</a></h3>

                <?php while($row = mysqli_fetch_array($resultAgenda)){?>

                <div class="list">
                    <div class="listEvent">Titulo: <?php echo $row['titulo'];?></div>
                    <div class="listEvent">Local - Endereço: <?php echo $row['endereco'];?></div>
                    <div class="listEvent">Observações <?php echo $row['obs'];?></div>
                    <div class="listEvent">Concluido <?php echo $row['concluido'];?></div>
                    <div class="up"><a href="eventUp.php?id=<?php echo $row['idcontatos'];?>">Editar</a></div>
                    <div class="del"><a href="eventDel.php?id=<?php echo $row['idcontatos'];?>">Excluir</a></div>
                </div>

                <?php }?>

            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>