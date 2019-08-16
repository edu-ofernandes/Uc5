<?php
    // classe para nome e id

    class ClasseBase {

        // atributos
        private $id;
        private $nome;



        // construtores
        public function ClasseBase(){
            $this->setId(0);
            $this->setNome("");
        }


        // metodos
        public function getId(){
            return $this->id;
        }
        public function setId($valueId){
            $this->id = $valueId;
        }
        

        public function getNome(){
            return $this->nome;
        }
        public function setNome($valueNome){
            $this->nome = $valueNome;
        }
    }



?>