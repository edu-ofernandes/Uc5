    <?php
        date_default_timezone_set('UTC');    
        $hoje = date('d-m-y');
        $dia = date('d');
        $mes = date('m');
        $ano = date('y');
        $L = date('l');

        $niver = '2001';
        $ano = '2019';
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="gotnew.css">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo 'Eduardo<br><br>';

            echo $hoje.'<br><br>';

            echo $dia.'<br><br>';

            echo $mes.'<br><br>';

            echo $ano.'<br><br>';

            echo $L;
        ?>
    </h1>
            
    <div>
        <h2>
            <?php

                    

                if($ano == $niver){
                    echo '<br><br>Hoje é o ano de seu aniversario'; 
                }else{
                    echo '<br><br>Hoje nao é o ano de seu aniversario';
                }
            ?>
        </h2>

    </div>
        
    <div>
        <h2>
            <?php

                $idade = $ano - $niver;
                echo '<br><br>Sua idade é: '.$idade;
                        
            ?>
        </h2>

    </div>

    <div class="Casas">
        <?php
                    
            if($idade %2 == 0){
                echo '<p><br><br>Voce é da casa Targaryn<br></p>'.'<img class="imagem" src="HT.jpg" alt="Casa Targaryn" style="width: 500px; heigth:320px; ">';
            }else{
                echo '<p><br><br>Voce é da casa Stark<br></p>'.'<img class="imagem" src="SK.jpg" alt="Casa Stark" style="width: 500px; heigth:500px; ">';
            }

        ?>
    </div>
</body>
</html>