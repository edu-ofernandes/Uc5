<?php
    // herança de Autenticacao
    
    // conexao com a outra pagina e classe
    require_once("Autenticacao.php");

    class User extends Autenticacao {

        // atributos
        private $foto;
        private $bio;

        // construtores
        public function User(){
            parent::Autenticacao();
            $this->SetFoto("");
            $this->SetBio("");
        }

        // metodos
        public function GetFoto(){
            return $this->foto;
        }
        public function SetFoto($valueFoto){
            $this->foto = $valueFoto;
        }

        public function GetBio(){
            return $this->bio;
        }
        public function SetBio($valueBio){
            $this->bio = $valueBio;
        }

    }


?>