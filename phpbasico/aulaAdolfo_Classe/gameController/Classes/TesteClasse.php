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
        include("Categoria.php");
        include("Jogo.php");
        include("User.php");


        $objCategoria = new Categoria();
        $objCategoria->SetId(20);
        $objCategoria->SetNome("Jogos Eletronicos");

        echo ("<pre>");
        print_r($objCategoria);
        echo("</pre>");


        $objJogo= new Jogo();
        $objJogo->SetId(16);
        $objJogo->SetNome("GTA V");
        $objJogo->SetCategoria($objCategoria->GetId());
        $objJogo->SetCategoria($objCategoria->GetNome());

        echo ("<pre>");
        var_dump($objJogo);
        echo("</pre>");


        $objUser = new User();
        $objUser->SetId(7);
        $objUser->SetNome("Eduardo");
        $objUser->SetBio("Cursando Tec Inf. Internet");
        $objUser->SetFoto("Foto");
        $objUser->SetSenha("********");
        $objUser->SetEmail("fernandeseduardo93@gmail.com");

        echo ("<pre>");
        var_dump($objUser);
        echo("</pre>");

    ?>

    <h1>Game Controler</h1>

    <h2>Id categoria</h2>
</body>
</html>