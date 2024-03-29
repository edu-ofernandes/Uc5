<?php
require_once("Conexao.php");
require_once("ClasseBase.php");
require_once("Admin.php");



class DALAdmin {
    private $conexao;

    // construtor
    public function DALAdmin($conexao){
        $this->conexao = $conexao;
    }
    

    //================ metodos

    // insert
    public function inserirAdmin($admin){
        $sql = "INSERT INTO administradores VALUES (NULL,";
        $sql = $sql."'".$admin->getNome()."',";
        $sql = $sql."'".$admin->getEmail()."',";
        $sql = $sql."'".$admin->getSenha()."')";

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }    

    // alterar
    public function alterarAdmin($admin){
        $sql = "UPDATE administradores SET ";
        $sql = $sql."id=".$admin->getId().", ";
        $sql = $sql."nome='".$admin->getNome()."', ";
        $sql = $sql."email='".$admin->getEmail()."', ";
        $sql = $sql."senha='".$admin->getSenha()."'";
        $sql = $sql." WHERE id=".$admin->getId().";";
        
        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }    

    // excluir
    public function excluirAdmin($idAdmin){
        $sql = "DELETE FROM administradores WHERE id= ".$idAdmin;

        $banco = $this->conexao->getBanco();
        $banco->query($sql);
    }    

    // listar
    public function listarAdmin(){
        $sql = "SELECT * FROM administradores";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $vetor = [];

        while($row = mysqli_fetch_array($result)){
            $admin = new Admin();
            $admin->setId($row['id']);
            $admin->setNome($row['nome']);
            $admin->setEmail($row['email']);
            $admin->setSenha($row['senha']);

            $vetor[] = $admin;
        }

        return $vetor;
    } 

    public function listarAdminId($idAdmin){
        $sql = "SELECT * FROM administradores WHERE id=".$idAdmin;
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $admin = new Admin();
        if($row = mysqli_fetch_array($result)){
            $admin->setId($row['id']);
            $admin->setNome($row['nome']);
            $admin->setEmail($row['email']);
            $admin->setSenha($row['senha']);
        }else{$admin = NULL;}

        return ($admin);
    }

    public function listarAdminLogin($email, $senha){
        $sql = "SELECT * FROM administradores ";
        $sql = $sql." WHERE email='".$email."' AND senha='".$senha."' ;";

        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);
        $admin = new Admin();
        if($row = mysqli_fetch_array($result)){
            $admin->setId($row['id']);
            $admin->setNome($row['nome']);
            $admin->setEmail($row['email']);
            $admin->setSenha($row['senha']);
        }else{
            $admin = null;
        }

        return($admin);
    }

    public function TotalAdmin(){
        $sql = "SELECT COUNT(nome) AS total FROM administradores";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        $row = mysqli_fetch_assoc($result);

        return $row['total'];
    }
}




// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALAdmin($conexao);

//excluir
if(isset($_GET['id'])){
    $idAdmin = $_GET['id'];
    $dal->excluirAdmin($idAdmin);
    header("location: ../listAdmin.php");
}
?>