<?php
    // herança de ClasseBase

    // conexao com a outra pagina que contem a outra classe
    require_once("ClasseBase.php");


    class Jogo extends ClasseBase {

        // atributo
        private $idCategoria;

        
        // construtor
        public function Jogo($id=0, $nome="", $idCategoria=0){

            // relaçao com o construtor da outra classe
            parent::ClasseBase($id, $nome);
            
            $this->setIdCategoria(0);
        }


        // metodo
        public function getIdCategoria(){
            return $this->idCategoria;
        }
        public function setIdCategoria($valueIdCategoria){
            $this->idCategoria = $valueIdCategoria;
        }


    }



?>