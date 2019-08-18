<?php
// classe para conexao

class Conexao{
    // propriedades
    private $servidor;
    private $usuario;
    private $senha;
    private $banco;
    private $nomeBanco;



    // construtor
    function __construct($servidor="localhost", $usuario="root", $senha="", $nomeBanco="gamecontroler"){
        $this->setUsuario($usuario);
        $this->setServidor($servidor);
        $this->setSenha($senha);
        $this->setNomeBanco($nomeBanco);

        // Conectar sozinho
        if($this->getNomeBanco() != ""){
            $this->Conectar();
        }

    }

    // metodos
    public function getServidor(){
        return $this->servidor;
    }
    public function setServidor($valueServ){
        $this->servidor = $valueServ;
    }
    //-----------------------------------------
    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($valueUser){
        $this->usuario = $valueUser;
    }
    //-----------------------------------------
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($valueSenha){
        $this->senha = $valueSenha;
    }
    //-----------------------------------------
    public function getNomeBanco(){
        return $this->nomeBanco;
    }
    public function setNomeBanco($valueNomeBanco){
        $this->nomeBanco = $valueNomeBanco;
    }

    
    public function getBanco(){
        return $this->banco;
    }


    // metodo para conectar
    public function Conectar(){
        $this->banco = new mysqli (
            $this->getServidor(),
            $this->getUsuario(),
            $this->getSenha(),
            $this->getNomeBanco(),
        );

        if($this->banco->connect_errno){
            die("Deu ruim, SQL: (".$this->banco->connect_errno.")");
        }else{
            return $this->getBanco();
        }
    }
}



?>