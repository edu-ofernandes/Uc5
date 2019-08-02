<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // requerimento de conexao com esta pagina de classes
        require("ClasseBase.php");

        // variavel recebe a classe 
        $obj = new ClasseBase();

        // variavel obj executa o id da classe q é privado dando um valor para ele 
        //$obj->id = 10;
        
        // NAO SE FAZ ASSIM
        //$obj->oi = "kkkk";

        // imprime a variavel executando o id
        //echo $obj->id;

       

        //$obj->SetId(10);
        //$obj->SetNome("Eduardo");

        echo "<pre>";

        var_dump($obj);

        echo "</pre>";

        


    ?>    
</body>
</html>