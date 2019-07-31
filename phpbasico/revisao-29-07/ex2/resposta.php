<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resposta</title>
</head>
<body>
    <?php


        $v1 = "0";
        $v2 = "0";
        $operadores = "+";
        $retorno = "";

        if(isset($_POST["executar"])){ 
            
            $v1 = $_POST["valor1"];
            $retorno = "?v1=$v1";

            $v2 = $_POST["valor2"];
            $retorno = $retorno."&v2=$v2";

            $operadores = $_POST["operadores"];
            $retorno = $retorno."&op=$operadores";

            if($operadores == "+"){
                $total = $v1 + $v2;
                
                
            }if($operadores == "-"){
                $total = $v1 - $v2;
                
                
            }if($operadores == "*"){
                $total = $v1 * $v2;
                
                
            }if($operadores == "/"){
                $total = $v1 / $v2;
                
                
            }
            echo ($total);
        }else{
            // retornar para pagina
            header('Location:index.php');
        }
    ?>
    
    <p><a href="index.php<?php echo $retorno;?>">Voltar para o index com os valores</a></p>

    <p><a href="index.php">Voltar para o index sem os valores</a></p>
</body>
</html>