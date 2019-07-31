<?php
    if(isset($_POST['btGol'])){ //"$_POST[]" pega o valor do que tiver entre aspas no colchetes

        $pergunta = $_POST['pergunta'];

    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Qauntas vezes quer que exiba "Gol da alemanha!"?</h2>

    <form action="#" method="POST">

        <input type="text" name="pergunta" id="pergunta" placeholder="Pergunta" autofocus>

        <input type="submit" value="Ir" name="btGol">

    </form>

    <h2>
        <?php
            if(isset($_POST['btGol'])){
                for($i=1; $i <= $pergunta; $i++){
                    echo $i.'º Gol da alemanha';
                    echo '<br>';
                }

            }
        ?>
    </h2>
</body>
</html>