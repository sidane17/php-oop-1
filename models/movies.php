<?php

class film
{
    public $titolo;
    public $durata;
    public $regista;

    public function nomeFilm()
    {
        return "$this->titolo";
    }


    public function __construct($titolo, $durata, $regista)
    {
        $this->titolo = $titolo;
        $this->durata = $durata;
        $this->regista = $regista;
    }
    public function __tostring(){
        return " TITOLO:  $this->titolo,  DURATA: $this->durata,  REGISTA: $this->regista";
    }
}