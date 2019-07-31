<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex8</title>
</head>
<body>
    <?php
        //Determinar o fatorial de um numero

        //precisa arrumar!!

        $numero = 5;

        for($i = ($numero-1); $i < $numero; $i++){
            

            $soma = $numero * $i;
            $total = $soma;
            
            echo '<h1>'.$numero.' x '.$i.' = '.$total.'</h1>';
        }

        
        
    ?>
</body>
</html>