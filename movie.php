<?php

class Movie {

    private $titolo;
    private $genere;
    private $durata;
    private $parentalControl = 'Non attivo';
    
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
        if ($this->genere = 'horror'){
            return $this->parentalControl = 'Attivo';
        } else {
            return $this->parentalControl;
        }
    }
    
    public function getParentalControl(){
        return $this->parentalControl;
    }
}
?>