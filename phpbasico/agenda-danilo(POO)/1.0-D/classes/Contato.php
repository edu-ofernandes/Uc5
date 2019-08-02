<?php
    // conexao com ClasseBase para usar a herança dela nessa classe 
    require_once("ClasseBase.php");

    // criar classe para tabela contato, "extends" pega a herança de outra classe e cria nesta nova 
    class Contato extends ClasseBase {
        // propriedades(campos da tabela)
        private $idcontatos;
        private $nome;
        private $tel;
        private $email;


        // construtores com o mesmo nome da classe
        public function Contato ($id=0, $nome="",$tel="",$email=""){
            //usa-se o construtor herdado da classe pai "parent::ClasseBase($id, $nome)"

            $this->SetTel($tel);
            $this->SetEmail($email);

            $this->SetId($id);
            $this->SetNome($nome);
        }

        
        // metodos de acesso
        public function GetTel(){
            return $this->tel;
        }
        public function SetTel($valueTel){
            $this->tel = $valueTel;
        }


        public function GetEmail(){
            return $this->email;
        }
        public function SetEmail($valueEmail){
            $this->email = $valueEmail;
        }

    }
?>