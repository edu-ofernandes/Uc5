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
            
            $this->setCategoria(0);
        }


        // metodo
        public function getCategoria(){
            return $this->categoria;
        }
        public function setCategoria($valueCategoria){
            $this->categoria = $valueCategoria;
        }


    }



?>