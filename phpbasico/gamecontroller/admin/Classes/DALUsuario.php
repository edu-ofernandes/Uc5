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

        $vetor = array();
        while($row = mysqli_fetch_array($result)){
            $usuario = new Usuario();
            $usuario->setId($row['id']);
            $usuario->setNome($row['nome']);
            $usuario->setFoto($row['foto']);
            $usuario->setBio($row['bio']);
            $usuario->setEmail($row['email']);
            $usuario->setSenha($row['senha']);

            $vetor[] = $usuario;
        }
        return $vetor;
    }

    public function listarIdUsuario($idUsuario){
        $sql = "SELECT * FROM usuarios WHERE id=".$idUsuario;
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $usuario = new Usuario();
        if($row = mysqli_fetch_array($result)){
            $usuario->setId($row['id']);
            $usuario->setNome($row['nome']);
            $usuario->setFoto($row['foto']);
            $usuario->setBio($row['bio']);
            $usuario->setEmail($row['email']);
            $usuario->setSenha($row['senha']);
        }

        return $usuario;
    }

    public function excluirUsuario($idUsuario){
        $sql = "DELETE FROM usuarios WHERE id=".$idUsuario;
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function alterarUsuario($usuario){
        $sql = "UPDATE usuarios SET ";
        $sql = $sql."id=".$usuario->getId().", ";
        $sql = $sql."nome='".$usuario->getNome()."', ";
        $sql = $sql."foto='".$usuario->getFoto()."', ";
        $sql = $sql."bio='".$usuario->getBio()."', ";
        $sql = $sql."email='".$usuario->getEmail()."', ";
        $sql = $sql."senha='".$usuario->getSenha()."' ";
        $sql = $sql." WHERE id=".$usuario->getId().";";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }

    public function TotalUsuario(){
        $sql = "SELECT COUNT(nome) AS total FROM usuarios";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $row = mysqli_fetch_assoc($result);
        return $row['total'];
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