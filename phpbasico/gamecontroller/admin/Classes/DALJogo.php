<?php
require_once("Conexao.php");
require_once("ClasseBase.php");
require_once("Jogo.php");
require_once("Categoria.php");


class DALJogo {
    private $conexao;


    // construtor
    public function DALJogo($conexao){
        $this->conexao = $conexao;
    }


    // metodos
    public function inserirJogo($jogo){
        $sql = "INSERT INTO jogos VALUES (NULL,";
        $sql = $sql."'".$jogo->getNome()."')";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function excluirJogo($idJogo){
        $sql = "DELETE FROM jogos WHERE id= ".$idJogo;

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function listarJogo(){
        $sql = "SELECT * FROM jogos";

        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        return $result;
    }
}


?>