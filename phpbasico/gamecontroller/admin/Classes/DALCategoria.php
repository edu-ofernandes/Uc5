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

    public function excluircategoria($idCategoria){
        $sql = "DELETE FROM categorias WHERE id=".$idCategoria;
        $banco = $this->conexao->getbanco();
        $banco->query($sql);
    }

    public function listarCategoria(){
        $sql = "SELECT * FROM `categorias`";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $vetor = [];
        while($row = mysqli_fetch_array($result)){
            $categoria = new Categoria();
            $categoria->setId($row['id']);
            $categoria->setNome($row['nome']);

            $vetor[] = $categoria;
        }

        return $vetor;
    }

    public function listarCategoriaId($idCategoria){
        $sql = "SELECT * FROM `categorias` WHERE id=".$idCategoria;
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $categoria = new Categoria();
        if($row = mysqli_fetch_array($result)){
            $categoria->setId($row['id']);
            $categoria->setNome($row['nome']);
        }else{$categoria = null;}

        return ($categoria);
    }

    public function TotalCategoria(){
        $sql = "SELECT COUNT(nome) AS total FROM categorias";

        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $row = mysqli_fetch_assoc($result);

        return $row['total'];
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