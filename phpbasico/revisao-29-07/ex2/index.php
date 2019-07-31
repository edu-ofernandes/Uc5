<?php
    $v1 = "0";
    $v2 = "0";
    $operadores = "+";

    if(isset($_GET["v1"])){
        $v1 = $_GET["v1"];
        $v2 = $_GET["v2"];
        $op = $_GET["op"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo de valores</title>
</head>
<body>
    <form action="resposta.php" method="post">

        <input type="number" name="valor1" placeholder="Primerio valor" value="<?php echo $v1; ?>">
        
        <input type="number" name="valor2" placeholder="Segundo valor" value="<?php echo $v2; ?>">

        <select name="operadores" id="operadores">
            <option value="+" >+</option> 
            <option value="-">-</option> 
            <option value="*">*</option> 
            <option value="/">/</option> 
        </select>
        
        <button type="submit" name="executar" value="calcular">Calcular</button>
    </form>
</body>
</html>