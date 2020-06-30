<?php
class Ape extends Animal {
    private $legs = 2;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function yell(){
        echo  "Auoo<br>";
    }
}