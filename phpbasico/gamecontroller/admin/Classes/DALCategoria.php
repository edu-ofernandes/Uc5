<?php
require_once("Conexao.php");
require_once("ClasseBase.php");
require_once("Categoria.php");


class DALCategoria {
    private $conexao;

    // construtor
    public function DALCategoria($conexao){
        $this->conexao = $conexao;
    }


    // metodos
    public function inserirCategoria($categorias){
        $sql = "INSERT INTO categorias VALUES (NULL,";
        $sql = $sql."'".$categorias->getNome()."')";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function alterarCategoria($categoria){
        $sql = "UPDATE categorias SET ";
        $sql = $sql."nome='".$categoria->getNome()."' ";
        $sql = $sql."WHERE id=".$categoria->getId()."; ";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function listarCategoria(){
        $sql = "SELECT * FROM `categorias`";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        return $result;
    }
    public function listarIdCategoria($idCategoria){
        $sql = "SELECT * FROM `categorias` WHERE id=".$idCategoria;
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        return $result;
    }

    public function excluircategoria($idCategoria){
        $sql = "DELETE FROM categorias WHERE id=".$idCategoria;
        $banco = $this->conexao->getbanco();
        $banco->query($sql);
    }
}

// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALCategoria($conexao);

if(isset($_GET['id'])){
    $idCategoria = $_GET['id'];
    $dal->excluircategoria($idCategoria);
    header("location: ../listCategoria.php");
}
?>