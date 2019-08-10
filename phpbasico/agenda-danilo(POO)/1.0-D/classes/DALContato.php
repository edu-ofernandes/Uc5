<?php
require_once("ClasseBase.php");
require_once("Conexao.php");
require_once("Contato.php");


class DALContato {

    
    private $conexao;


    
    public function DALContato ($conexao){
        $this->conexao = $conexao;
    }

    public function inserir ($contato){
        $sql = "INSERT INTO contatos VALUES(NULL,";
        $sql = $sql."'".$contato->GetNome()."',";
        $sql = $sql."'".$contato->GetTel()."',";
        $sql = $sql."'".$contato->GetEmail()."')";

        $banco = $this->conexao->GetBanco();
        $banco->query($sql);

    }

    public function ListarTabela (){
        $sql = "SELECT * FROM contatos";
        $banco =  $this->conexao->getBanco();
        return $banco->query($sql);

    }
    
    public function listar (){
        $sql = "SELECT * FROM contatos";
        $banco =  $this->conexao->getBanco();
        $result = $banco->query($sql);

        $vetor = array();

        while($row = mysqli_fetch_array($result)){
            $obj = new Contato();
            $obj->SetId($row['idcontatos']);
            $obj->SetNome($row['nome']);
            $obj->SetTel($row['tel']);
            $obj->SetEmail($row['email']);

            $vetor[] = $obj;
        }
        return ($vetor);
    }

    public function deletar($contato){
        $sql = "DELETE FROM contatos WHERE idcontatos= ".$contato->GetId();
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
    }

    public function Alterar($contato){

    }


}




?>