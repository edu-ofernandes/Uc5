<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex2</title>
</head>
<body>
    <?php
        //Calcular a area de um triangulo (base*altura/2)

        $BaseTri = 5;
        $AlturaTri = 19;

        $AreaTri = (($BaseTri*$AlturaTri)/2);

        echo '<h1>Area de um Triangulo</h1>';
        echo '<h2>Base do tirnagulo: '.$BaseTri.'<br>Altura do triangulo: '.$AlturaTri.'<br><br>Area do mesmo: '.$AreaTri.'</h2>';
    ?>
</body>
</html>