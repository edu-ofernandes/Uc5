<?php
// classe para id dos users e id dos jogos

class JogoUser {

    // propriedades
    private $idUser;
    private $idJogo;



    public function JogoUser(){
        $this->setIdUser(0);
        $this->setIdJogo(0);
    }


    public function getIdUser(){
        return $this->idUser;
    }
    public function setIdUser($valueIdUser){
        $this->idUser = $valueIdUser;
    }



    public function getIdJogo(){
        return $this->idJogo;
    }
    public function setIdJogo($valueIdJogo){
        $this->idJogo = $valueIdJogo;
    }







}





?>