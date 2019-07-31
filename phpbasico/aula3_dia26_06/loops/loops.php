<?php

    if(isset($_POST['btGo'])){
    $idade = $_POST['idade'];

    $email = $_POST['email'];

    $telefone = $_POST['telefone'];

    $nome = $_POST['nome'];
    
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

    <form action="#" method="post">

        <input type="text" name="nome" id="nome" placeholder="nome"> <br><br>

        <input type="text" name="idade" id="idade" placeholder="idade"> <br><br>

        <input type="text" name="email" id="email" placeholder="email"> <br><br>

        <input type="text" name="telefone" id="telefone" placeholder="telefone"> <br><br>

        <input type="submit" name="btGo" value="Vai">

        <br><br>

    </form>

        <?php

            if(isset($_POST['btGo'])){

                echo 'Sua idade: '.$idade; 

                echo '<br><br>Seu email é: '.$email;

                echo '<br><br>Seu telefone: '.$telefone;

                echo '<br><br>Seu nome: '.$nome;
                
        }
        ?>
        

</body>
</html>