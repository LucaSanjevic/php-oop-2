<?php

class cliente {

    public $nome;
    public $cognome;
    public $eta;
    

    function __construct($nome, $cognome, $eta) {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setEta($eta);
    }

    public function setNome($value) {
        $this->nome = $value;
    }

    public function setCognome($value) {
        $this->cognome = $value;
    }

    public function setEta($value) {
        $this->eta = $value;
    }

    public function return_risultati1() {
        echo $this->nome . " " .  "<br>";
        echo $this->cognome . " " .  "<br>";
        echo $this->eta . " " .  "<br>";
       }

       
}