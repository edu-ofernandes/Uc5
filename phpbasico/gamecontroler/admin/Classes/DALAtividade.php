<?php
require_once("Conexao.php");
require_once("JogoUser.php");
class DALAtividade{
    private $conexao;


    function __construct($conexao){
        $this->conexao = $conexao;
    }

    public function insert($atividade){
        $sql = "INSERT INTO atividades VALUES(NULL, ";
        $sql = $sql."".$atividade->getIdUser().", ";
        $sql = $sql."".$atividade->getIdJogo().", ";
        $sql = $sql."".$atividade->getData().", ";
        $sql = $sql."".$atividade->getPontuacao().", ";
        $sql = $sql."".$atividade->getTempo()."); ";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }
}
?>