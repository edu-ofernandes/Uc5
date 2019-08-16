<?php
    // classe para email e senha que herda da classe base

    class Admin extends ClasseBase {

        // atributos
        private $email;
        private $senha;


        // construtores
        public function Admin(){
            parent::ClasseBase();

            $this->setSenha("");
            $this->setEmail("");
        }



        // metodos
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($valueEmail){
            $this->email = $valueEmail;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($valueSenha){
            $this->senha = $valueSenha;
        }
    }


?>