<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex7</title>
</head>
<body>
    <?php
        //Numero primo

        $numero = 7; /*numeor iformado*/
        $divisores = ''; /*para armazenar quando ele é divisivel e o resto é zero*/

        for($i=1; $i <= $numero; $i++ ){ /*percorrer o numero de 1 ate o numero informado na variavel*/

            if($numero % $i == 0){ /*if para verificar resto da divisao de "$i" e "$numero" se da zero e incrementar o "$divisores"*/ 
                $divisores++;
            }
        }
        
        if($divisores == 2){ /*if para verificar quantos divisores tem, tendo 2 apenas entao ele é primo*/
            echo '<h1>É primo</h1>';
        }
        else{
            echo '<h1>Não é primo</h1>';
        }

        ///////////////////////////////////////////////////////////////////////////////

        // loop de 1 a 100
        for($i = 1; $i <= 100; $i++)
        {
            // variavel que armazena o número de divisores de um número
            $divisores = 0;
            
            // recupera o nº atual no loop e, a partir dele, o decrementa até chegar a 1 
            for($j = $i; $j >= 1; $j--)
            {
                // se o número do 1º loop for divisível por algum número anterior a ele, ou seja, resto 0 
                // incrementa o número de divisores
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }   
            
            // se o número do loop principal tiver exatamente 2 divisores
            // (lembre-se, nº primos tem somente 2 divisores: 1 e ele próprio), exibe o nº primo
            if ($divisores == 2)
            {
                echo '<h2>'.$i . ', '.'</h2>';
            }
        }
    ?>
</body>
</html>