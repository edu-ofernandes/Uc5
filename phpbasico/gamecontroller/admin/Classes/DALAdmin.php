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
    

    // metodos
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

    }    

    // excluir
    public function excluirAdmin($admin){

    }    

    // listar
    public function listarAdmin(){
        $sql = "SELECT * FROM administradores";
        $banco = $this->conexao->getBanco();
        $result = $banco->query($sql);

        // $vetor = [];

        // while($row = mysqli_fetch_array($result)){
        //     $admin = new Admin();
        //     $admin->setId($row['id']);
        //     $admin->setNome($row['nome']);
        //     $admin->setEmail($row['email']);
        //     $admin->setSenha($row['senha']);

        //     $vetor[] = $admin;
        // }

        return $result;
    }    
    





    
}
?>