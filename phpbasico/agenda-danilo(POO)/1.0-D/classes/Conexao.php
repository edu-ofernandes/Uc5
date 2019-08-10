<?php
class Conexao {
    //propridades
    private $servidor;
    private $usuario;
    private $senha;
    private $banco;
    private $nomeBanco;



    // construtores
    function __construct($servidor="localhost", $usuario="root", $senha="", $nomeBanco="agenda1.0"){
        $this->setServidor($servidor);
        $this->setUsuario($usuario);
        $this->setSenha($senha);
        $this->setNomeBanco($nomeBanco);

        // se for vazio conecta sozinho
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