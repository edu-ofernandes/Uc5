<?php
// conecçao com o bando de dados
$banco = new mysqli("localhost", "root", "", "agenda2.0");

// teste para saber se ocorreu tudo certo
if($banco->connect_errno){
    echo "deu ruim (". $banco->connect_errno.")";
}else {
    //echo "deu certo";
}

?>