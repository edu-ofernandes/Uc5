<?php
    if(isset($_POST['btCal'])){

        $valor1 = $_POST['num1'];
        $valor2 $_POST['num2'];
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

    <h2>Use os operadores em dois numeros</h2>
    <form action="#" method="POST">

        <input type="text" name="num1" id="num1" placeholder="Numero 1"><br><br>
        
        <input type="text" name="num2" id="num2" placeholder="Numero 2"><br><br>

        <input type="submit" name="btCal" value="Calcular">

        <select name="operadores" id="operadores">
            <option value="subtracao">-</option>
            <option value="soma">+</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
            <option value="subtracao">-</option>
        </select>
    

        <?php
        
            if(isset($_POST['btCal'])){



            }

        ?>

    </form>
</body>
</html>