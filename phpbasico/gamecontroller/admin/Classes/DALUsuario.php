<?php
include_once("Conexao.php");
include_once("ClasseBase.php");
include_once("Usuario.php");


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

    public function excluirUsuario($idUsuario){
        $sql = "DELETE FROM usuarios WHERE id=".$idUsuario;
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }
}


// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALUsuario($conexao);

//excluir
if(isset($_GET['id'])){
    $idUsuario = $_GET['id'];
    $dal->excluirUsuario($idUsuario);
    header("location: ../listUsuario.php");
}
?>