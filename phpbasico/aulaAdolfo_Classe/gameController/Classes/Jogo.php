<?php
    // herança de ClasseBase

    // conexao com a outra pagina que contem a outra classe
    require_once("ClasseBase.php");


    class Jogo extends ClasseBase {

        // atributo
        private $categoria;

        
        // construtor
        public function Jogo(){

            // relaçao com o construtor da outra classe
            parent::ClasseBase();
            
            $this->SetCategoria(0);
        }


        // metodo
        public function GetCategoria(){
            return $this->categoria;
        }
        public function SetCategoria($valueCategoria){
            $this->categoria = $valueCategoria;
        }


    }



?>