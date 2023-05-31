<?php

class movie
{
    public $nome;
    public $durata;
    public $genere;

    function __construct($nome, $durata, $genere)
    {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->genere = $genere;
    }

    public function setName($nuovoName)
    {
        $this->nome = $nuovoName;
    }
}



?>