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
        $sql = $sql."'".$jogo->getNome()."', ";
        $sql = $sql."'".$jogo->getFoto()."', ";
        $sql = $sql."".$jogo->getIdCategoria().")";
        //Caso nao funcione trocar a ordem do getIdCategoria e getFoto!!!!!
        
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function alterarJogo($jogo){
        $sql = "UPDATE jogos SET ";
        $sql = $sql."nome='".$jogo->getNome()."', ";
        $sql = $sql."foto='".$jogo->getFoto()."', ";
        $sql = $sql."categorias_id=".$jogo->getIdCategoria()." ";
        $sql = $sql." WHERE id=".$jogo->getId().";";

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

        $vetor = [];
        while($row = mysqli_fetch_array($result)){
            $jogo = new Jogo();
            $jogo->setId($row['id']);
            $jogo->setNome($row['nome']);
            $jogo->setFoto($row['foto']);
            $jogo->setIdCategoria($row['categorias_id']);
    
            $vetor[] = $jogo;
        }
        return ($vetor);
    }

    public function listarIdJogo($idJogo){
        $sql = "SELECT * FROM jogos WHERE id=".$idJogo;
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $jogo = new Jogo();
        if($row = mysqli_fetch_array($result)){
            $jogo->setId($row['id']);
            $jogo->setNome($row['nome']);
            $jogo->setFoto($row['foto']);
            $jogo->setIdCategoria($row['categorias_id']);
        }
        return ($jogo);
    }

    public function TotalJogo(){
        $sql = "SELECT COUNT(nome) as total FROM jogos";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $row = mysqli_fetch_assoc($result);

        return $row['total'];
    }
}

// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALJogo($conexao);

if(isset($_GET['id'])){
    $idJogo = $_GET['id'];
    $dal->excluirJogo($idJogo);
    header("location: ../listJogo.php");
}

?>