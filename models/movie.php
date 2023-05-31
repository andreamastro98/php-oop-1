<?php

class movie{

    public $nome;
    public $durata;
    public $type;

    function __construct($nome, $durata, $type)
    {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->type = $type;
    }

    public function setName($nuovoName)
    {
        $this->nome = $nuovoName;
    }
}



?>