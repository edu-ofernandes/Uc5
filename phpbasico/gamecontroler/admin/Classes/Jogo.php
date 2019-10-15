<?php
    // herança de ClasseBase

    // conexao com a outra pagina que contem a outra classe
    require_once("ClasseBase.php");


    class Jogo extends ClasseBase {

        // atributo
        private $idCategoria;
        private $foto;
        private $descricao;
        private $link;

        
        // construtor
        public function Jogo($id=0, $nome="", $idCategoria=0, $descricao="", $link=""){

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

        public function getFoto(){
            return $this->foto;
        }
        public function setFoto($valueFoto){
            $this->foto = $valueFoto;
        }


        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($valueDescricao){
            $this->descricao = $valueDescricao;
        }

        public function getLink(){
            return $this->link;
        }
        public function setLink($valueLink){
            $this->link = $valueLink;
        }
    }



?>