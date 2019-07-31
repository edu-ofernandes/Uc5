<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex4</title>
</head>
<body>
    <?php
        //Mostrar variavel menor entre as duas


        $var1 = 17;
        $var2 = 81;

        echo '<h1>Menor variavel</h1>';
        echo '<h3>Variavel 1: '.$var1.'<br>Variavel 2: '.$var2.'</h3>';
        
        if($var1 < $var2){
            echo '<h2>Variavel 1 é a menor: '.$var1.'</h2>';
        }
        else {
            echo '<h2>Variavel 2 é a menor: '.$var2.'</h2>';
        }
    ?>
</body>
</html>