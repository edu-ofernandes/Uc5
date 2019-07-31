<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media de notas de alunos</title>
</head>
<body>
    <h1>Media de notas de alunos</h1>
    <?php
        $nota1 = 5;
        $nota2 = 4;
        $nota3 = 9;
        $nota4 = 7;
        $nota5 = 9;
        $nota6 = 5;
        
        //media das notas. "intaval($nomeDaVariavel)" é o parse int no php
        $mediaNotas = intval((($nota1+$nota2+$nota3+$nota4+$nota5+$nota6)/6));

        //media minima para passar
        $mediaMinima = 6;


        if($mediaNotas >= $mediaMinima){
            echo '<h2>Nota minima para ser aprovado: '.$mediaMinima.'</h2>';
            echo '<h2>Nota1: '.$nota1.'<br>Nota2: '.$nota2.'<br>Nota3: '.$nota3.'<br>Nota4: '.$nota4.'<br>Nota5: '.$nota5.'<br>Nota6: '.$nota6.'<br><br
            >Parabens,
            sua media foi: '.$mediaNotas.' e voce foi aprovado!</h2>';
        }else{
            echo '<h2>Nota minima para ser aprovado: '.$mediaMinima.'</h2>';
            echo '<h2>Sua media foi: '.$mediaNotas.' e voce esta reprovado</h2>';
        }

    ?>
</body>
</html>