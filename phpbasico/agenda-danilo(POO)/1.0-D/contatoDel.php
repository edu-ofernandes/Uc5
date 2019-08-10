<?php
require_once("classes/ClasseBase.php");
require_once("classes/Conexao.php");
require_once("classes/Contato.php");
require_once("classes/DALContato.php");

if(isset($_GET['id'])){
    $conexao = new Conexao();
    $dal = new DALContato($conexao);
    
    $idcontato = new Contato();
    $idcontato->SetId($_GET['id']);

    $result = $dal->deletar($idcontato);

    header("location: index.php");


}


?>