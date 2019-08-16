<?php
    // herança de ClasseBase

    // conexao com outra pagina da classe
    require_once("ClasseBase.php");


    class Categoria extends ClasseBase {


        // construtores
        public function Categoria(){
            parent:: ClasseBase();
        }

    }



?>