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
        require_once("ClasseBase.php");
        require_once("Conexao.php");
        require_once("Contato.php");
        require_once("DALContato.php");


        // objeto contato 
        $contato = new Contato();
        $contato->SetId(0);
        $contato->SetNome('Teste2');
        $contato->SetTel('18998042941');
        $contato->SetEmail('teste2@gmail.com');


        // conexao com o banco
       $conexao = new Conexao();


        // DAL
        $dal = new DALContato($conexao);
        $dal->inserir($contato);










        

        


    ?>    
</body>
</html>