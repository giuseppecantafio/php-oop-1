<?php

class Movie {

    private $titolo;
    private $genere;
    private $durata;
    private $parentalControl = false;
    
    function __construct($_titolo, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    public function getTitolo(){
        return $this->titolo;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setParentalControl(){
        $this->genere == 'horror' ? $this->parentalControl = true : $this->parentalControl;
    }
    
    public function getParentalControl(){
        return $this->parentalControl;
    }
}
?>