<?php
    // definir classe usa-se a primeira letra maiuscula igual nome da classe em si
    // classe gera um objeto
    // toda classe tem construtores e metodos de acesso

    class ClasseBase{

        // propriedades
        private $id;
        private $nome;
        
        // construtores, pode passar parametros tambem
        public function ClasseBase(){
            // maneira errada
            //$this->id = 0;
            //$this->nome = "";



            // maneira correta
            $this->SetId(10);
            $this->SetNome("testetesttestes");


        }

        // metodos de acesso(funçao)
        public function GetId(){
            return $this->id;
        }

        public function SetId($value){
            $this->id = $value;
        }

        ///////////////////////////////////

        public function GetNome(){
            return $this->nome;
        }
        public function SetNome($value){
            $this->nome = $value;
        }
    }
?>