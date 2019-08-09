<?php
require_once("ClasseBase.php");
require_once("Conexao.php");
require_once("Contato.php");


class DALContato {

    
    private $conexao;


    
    public function DALContato ($conexao){
        $this->conexao = $conexao;
    }

    public function inserir ($contato){
        $sql = "INSERT INTO contatos VALUES(NULL,";
        $sql = $sql."'".$contato->GetNome()."',";
        $sql = $sql."'".$contato->GetTel()."',";
        $sql = $sql."'".$contato->GetEmail()."')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sql);

    }

    

}




?>