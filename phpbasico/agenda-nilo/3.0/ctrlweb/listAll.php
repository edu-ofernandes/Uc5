<?php
require_once("../include/connectaBD.php");


$sql1 = "SELECT idcontatos, nome FROM contatos ORDER BY nome ASC";
$result1 = $banco->query($sql1);


$sql2 = "SELECT idusers, nome FROM users ORDER BY nome ASC";
$result2 = $banco->query($sql2);

$sql3 = "SELECT idagendamentos, titulo, data FROM agendamentos ORDER BY titulo ASC";
$result3 = $banco->query($sql3);
$novaData = date("d-m-y", strtotime($row3['data']));
$novoTitulo = strtoupper($row3['titulo']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Varias Busacas</title>
</head>
<body>

    <div>
        <h1>Contatos</h1>

    <?php  while($row1 = mysqli_fetch_array($result1)){ ?>

        <p>Nome: <?php  echo $row1['nome']; ?></p> 

    <?php }?>

    </div>
    <hr>

    <div>
        <h1>Users</h1>

    <?php  foreach($result2 as $row2){ ?>
    
        <p>Nome :<?php echo $row2['nome']; ?></p>
    
    <?php } ?>

    </div>


    <div>
        <h1>Agendamentos</h1>

        <?php foreach($result3 as $row3){?>

            <p>Titulo: </p>

        <?}?>
    </div>
</body>
</html>