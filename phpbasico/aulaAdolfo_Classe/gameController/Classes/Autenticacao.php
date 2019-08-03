<?php
    // classe para email e senha

    class Autenticacao extends ClasseBase {

        // atributos
        private $email;
        private $senha;


        // construtores
        public function Autenticacao(){
            parent::ClasseBase();

            $this->SetSenha("");
            $this->SetEmail("");
        }



        // metodos
        public function GetEmail(){
            return $this->email;
        }
        public function SetEmail($valueEmail){
            $this->email = $valueEmail;
        }

        public function GetSenha(){
            return $this->senha;
        }
        public function SetSenha($valueSenha){
            $this->senha = $valueSenha;
        }
    }


?>