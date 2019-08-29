<?php
require_once("include/connectaBD.php");

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$sqlAgendamentos = "SELECT * FROM agendamentos WHERE data='$data' ORDER BY idagendamentos ASC";
$result = $banco->query($sqlAgendamentos);


$sqlContatos = "SELECT * FROM contatos ORDER BY nome";
$resultContatos = $banco->query($sqlContatos);

if(isset($_POST[''])){
    
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo</title>
    <link rel="stylesheet" href="css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    <header>
        <div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="ctrlweb/index.php">Administração</a></li>
            <li><a href="javascript:history.back();">Voltar</a></li>
            <li><a href="fale.php">Fale Conosco</a></li>
    </nav>
    <main>
        <article>
            <h1>Agenda de clientes/contato e eventos</h1>
            <section class="listAll">
                <h2>Listando todos os Contatos</h2>
                <div id="search">
                    <form action="#" method="get" name="formBusca" id="formBusca">
                        <input type="text" name="txtBusca" id="txtBusca" placeholder="Que nome deseja ver">
                        <input type="submit" name="btSerach" id="btSearch" value="Buscar">
                    </form>
                </div>

                <?php while($row = mysqli_fetch_array($resultContatos)){?>

                <div class="list">
                    <div class="listNome">Nome: <?php echo $row['nome'];?></div>
                    <div class="listTel">Telefone: <?php echo $row['tel'];?></div>
                    <div class="listEmail">Email: <?php echo $row['email'];?></div>
                </div>

                <?php }?>

            </section>
            <section class="listAll">
                <h2>Listando todos os Eventos de hoje</h2>
                <div id="search">
                    <form action="#" method="get" name="formBusca2" id="formBusca2">
                        <input type="text" name="txtBusca2" id="txtBusca2" placeholder="Dia desejado">
                        <input type="submit" name="btSerach2" id="btSearch2" value="Buscar">
                    </form>
                </div>

                <?php while($row = mysqli_fetch_array($result)){?>

                <div class="list">
                    <div class="listEvent">Titulo: <?php echo $row['titulo'];?></div><br>
                    <div class="listEvent">Local - Endereço: <?php echo $row['endereco'];?></div> <br>
                    <div class="listEvent">Observações: <?php echo $row['obs'];?></div> <br>
                    <div class="listEvent">Concluido: <?php echo $row['concluido'];?></div> <br>
                </div>

                <?php }?>

            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>