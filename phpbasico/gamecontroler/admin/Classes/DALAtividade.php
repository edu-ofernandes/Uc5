<?php
class DALAtividade{
    private $conexao;


    function __construct($conexao){
        $this->$conexao = $conexao;
    }

    public function insert($atividade){
        $sql = 'INSERT INTO atividades VALUES(NULL, ';
        $sql = $sql.'';
    }
}
?>