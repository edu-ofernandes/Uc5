<?php
    // herança de ClasseBase

    // conexao com a outra pagina e classe 
    require_once("ClasseBase.php");
    require_once("JogoUser.php");


    class Atividade extends JogoUser {
        // propriedades
        private $id;
        private $data;
        private $pontuacao;
        private $tempo;
        


        // construtores
        public function Atividade(){
            parent::JogoUser();
            $this->setData(0);
            $this->setPontuacao(0);
            $this->setTempo(0);
        }


        // metodos
        public function getData(){
            return $this->data;
        }
        public function setData($valueData){
            $this->data = $valueData;
        }


        public function getPontuacao(){
            return $this->pontuacao;
        }
        public function setPontuacao($valuePontuacao){
            $this->pontuacao = $valuePontuacao;
        }


        public function getTempo(){
            return $this->tempo;
        }
        public function setTempo($valueTempo){
            $this->tempo = $valueTempo;
        }





    }

?>