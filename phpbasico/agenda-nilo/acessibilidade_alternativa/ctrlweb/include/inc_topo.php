<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo</title>
    <link rel="stylesheet" href="../css/folha.css" type="text/css">
      <link rel="stylesheet" href="../css/cont.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Quantidades'],
    ['Usuários',     <?php echo $row['conta']; ?>],
    ['Contatos',      <?php echo $row2['conta']; ?>],
    ['Agendamentos',    <?php echo $row3['conta']; ?>]
    ]);
    var options = {
    title: 'Contador',
    is3D: false,
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
    }
    </script>
    
    <link rel="shortcut icon" type="image/x-icon" href="../include - Cópia/image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">


   <script language="javascript" src="../js/contraste.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container-fluid ">
      <div class="btn-group mt-2 ml-2" role="group" aria-label="Exemplo básico">
        <a href="#altocontraste" id="altocontraste" class="btn btn-dark" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Alto contraste</a>
        <button class="btn btn-dark" type="button" id="btnAumentar">Aumentar fonte</button>
        <button class="btn btn-dark" type="button" id="btnDiminuir">Diminuir fonte</button>
        <button class="btn btn-dark" type="button" id="btnPadrao">fonte Normal</button>
      </div>
      <header class="row d-flex justify-content-center">
        <a href="../admin.php"><div id="logo"><img src="../image/logoOne.png" alt="Logo PokeAgenda"></div></a>
      </header>