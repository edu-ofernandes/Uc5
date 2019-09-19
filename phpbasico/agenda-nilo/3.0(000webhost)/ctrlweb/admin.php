<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");



if($_SESSION['liberado'] == true){
    $nome = $_SESSION['nome'];
};


// sql para contar os registros e exibir no dashboard
$sqlUser = "SELECT COUNT(*) AS contar FROM users";
$resultUser = $banco->query($sqlUser);
$rowUser = mysqli_fetch_assoc($resultUser);

$sqlContato = "SELECT COUNT(*) AS contar FROM contatos";
$resultContato = $banco->query($sqlContato);
$rowContato = mysqli_fetch_assoc($resultContato);

$sqlEvento = "SELECT COUNT(*) AS contar FROM agendamentos";
$resultEvento = $banco->query($sqlEvento);
$rowEvento = mysqli_fetch_assoc($resultEvento);

?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo - Controle</title>
    <link rel="stylesheet" href="../css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        ['Usuarios:', <?php echo $rowUser['contar'];?>],
        ['Contato:', <?php echo $rowContato['contar'];?>],
        ['Evento:', <?php echo $rowEvento['contar'];?>]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                    'width':400,
                    'height':300,};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>
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
            <h1>DASHBOARD</h1>
            <?php echo "<h2>Bem Vindo ".$nome?>
            <section id="dashboard">
                <div class="cxDash"><a href="users.php">Usuários: <?php echo $rowUser['contar'];?>;</a></div>
                <div class="cxDash"><a href="contatos.php">Contatos: <?php echo $rowContato['contar'];?>;</a></div>
                <div class="cxDash"><a href="event.php">Eventos: <?php echo $rowEvento['contar'];?>;</a></div>
            </section>
            
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>