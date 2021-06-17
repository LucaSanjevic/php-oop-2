<?php

class prodotti {

    public $name;
    public $marca;
    public $prezzo;
    

    function __construct($name, $marca, $prezzo) {
        $this->setName($name);
        $this->setMarca($marca);
        $this->setPrezzo($prezzo);
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function setMarca($value) {
        $this->marca = $value;
    }

    public function setPrezzo($value) {
        $this->prezzo = $value;
    }

    public function return_risultati2() {
        echo $this->name . " " .  "<br>";
        echo $this->marca . " " .  "<br>";
        echo $this->prezzo . " " .  "<br>";
       }
    
}