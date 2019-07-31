<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex3</title>
</head>
<body>
    <?php
        //Calcular media de 5 valores

        $Valor1 = 23;
        $Valor2 = 45;
        $Valor3 = 65;
        $Valor4 = 83;
        $Valor5 = 01;

        $Media = intval(($Valor1+$Valor2+$Valor3+$Valor4+$Valor5)/5);

        echo '<h1>valor1: '.$Valor1.'<br>Valor2: '.$Valor2.'<br>Valor3: '.$Valor3.'<br>Valor4: '.$Valor4.'<br>Valor5: '.$Valor5.'</h1>';
        echo '<h2>Media: '.$Media.'</h2>';
    ?>
</body>
</html>