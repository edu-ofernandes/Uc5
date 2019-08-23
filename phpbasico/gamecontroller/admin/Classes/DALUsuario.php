<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Usuario.php");


class DALUsuario{
    private $conexao;


    // construtor
    public function DALUsuario ($conexao){
        $this->conexao = $conexao;
    }

    // metodods
    public function inserirUsuario($usuario){
        $sql = "INSERT INTO usuarios VALUES (NULL,";
        $sql = $sql."'".$usuario->getNome()."',";
        $sql = $sql."'".$usuario->getFoto()."',";
        $sql = $sql."'".$usuario->getBio()."',";
        $sql = $sql."'".$usuario->getEmail()."',";
        $sql = $sql."'".$usuario->getSenha()."')";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function listarUsuario(){
        $sql = "SELECT * FROM usuarios";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        return $result;
    }
}

?>