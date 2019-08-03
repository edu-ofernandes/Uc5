<?php
    // classe para nome e id

    class ClasseBase {

        // atributos
        private $id;
        private $nome;



        // construtores
        public function ClasseBase(){
            $this->SetId(0);
            $this->SetNome("");
        }


        // metodos
        public function GetId(){
            return $this->id;
        }
        public function SetId($valueId){
            $this->id = $valueId;
        }
        

        public function GetNome(){
            return $this->nome;
        }
        public function SetNome($valueNome){
            $this->nome = $valueNome;
        }
    }



?>