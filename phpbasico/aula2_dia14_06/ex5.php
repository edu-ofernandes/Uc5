<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex5</title>
</head>
<body>
    <?php
        //Informar numero par ou impar

        $var1 = 7823;
        $var2 = 1762;

        //variavel 1
        if($var1%2 == 0){
            echo '<h2>Variavel1: '.$var1.'<br><br>Par</h2>';
        }else{
            echo '<h2>Variavel1: '.$var1.'<br><br>Impar</h2><br>';
        };

        //variavel 2
        if($var2%2 == 0){
            echo '<h2>Variavel2: '.$var2.'<br><br>Par</h2>';
        }else{
            echo '<h2>Variavel2: '.$var2.'<br><br>Impar</h2>';
        }
    ?>
</body>
</html>