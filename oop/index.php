<?php
include "Ape.php";
include "Frog.php";

class Animal{
    private $name;
    private $legs = 2;
    private $cold_blooded = "false";

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function getColdBlooded()
    {
        return $this->cold_blooded;
    }

    public function setColdBlooded($cold_blooded)
    {
        $this->cold_blooded = $cold_blooded;
    }
}

$sheep = new Animal("shaun");

echo $sheep->getName() . "<br>"; // "shaun"
echo $sheep->getLegs() . "<br>"; // 2
echo $sheep->getColdBlooded() . "<br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"