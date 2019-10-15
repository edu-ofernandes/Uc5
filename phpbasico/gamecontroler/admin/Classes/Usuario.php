<?php
    // herança de Autenticacao
    
    // conexao com a outra pagina e classe
    require_once("Admin.php");

    class Usuario extends Admin {

        // atributos
        private $foto;
        private $bio;

        // construtores
        public function Usuario(){
            parent::Admin();
            $this->setFoto("");
            $this->setBio("");
        }

        // metodos
        public function getFoto(){
            return $this->foto;
        }
        public function setFoto($valueFoto){
            $this->foto = $valueFoto;
        }

        public function getBio(){
            return $this->bio;
        }
        public function setBio($valueBio){
            $this->bio = $valueBio;
        }

    }


?>