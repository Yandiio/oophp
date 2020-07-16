<?php

Class Mobil {
    private $engine,
           $name,
           $type,
           $speed, 
           $torsi,
           $rpm;

    protected $interior;

    public function __construct($name= "name" , $type = "type", $engine = "engine", $speed = 0,$torsi = 0 ,$rpm = 0) {
        $this->name = $name;
        $this->engine = $engine;
        $this->type = $type;
        $this->speed = $speed;
        $this->torsi = $torsi;
        $this->rpm = $rpm;
    }

    public function getHorsePower() {
        $str = ($this->torsi * $this->rpm) / 5252;
        $str = floor($str);
        return $str;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setTorsi($torsi) {
        $this->torsi = $torsi;
    }

    public function getTorsi() {
        return $this->torsi;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setRpm($rpm) {
        $this->rpm = $rpm;
    }

    public function getRpm() {
        return $this->rpm;
    }

    public function getEngineSpec() {
        return "Engine: ($this->engine), Speed: $this->speed";
    }

    public function infoMobil() {
        return "{$this->name} {$this->type} | {$this->getEngineSpec()}";
    }
}

Class Saloon extends Mobil {
    public $kacaKuat; 

    public function __construct($name= "name" , $type = "type", $engine = "engine", $speed = 0, $kacaKuat = "Kaca", $torsi, $rpm) {
        parent::__construct($name, $type, $engine, $speed, $torsi, $rpm);
        $this->kacaKuat = $kacaKuat;
    }

    public function infoMobil() {
        return " ". parent::infoMobil()." | {$this->kacaKuat} | Horsepower: {$this->getHorsePower()}";
    }

    public function setInterior($interior) {
        return $this->interior = $interior;
    }
}

Class Exotic extends Mobil {
    public $nitroKencang;

    public function __construct($name= "name" , $type = "type", $engine = "engine", $speed = 0, $nitroKencang = "Kencang", $torsi, $rpm) {
        parent::__construct($name, $type, $engine, $speed, $torsi, $rpm);
        $this->nitroKencang = $nitroKencang;
    }

    public function infoMobil()
    {
        return " ".parent::infoMobil()." | Nitro yang Di pakai : ($this->nitroKencang) | Horsepower : {$this->getHorsePower()}";
    }
}

$mobil1 = new Saloon("Mercedes-Benz", "C63", "V8", 280, "Kaca Tahan peluru", 650, 4000);
$mobil2 = new Exotic("BMW", "F10", "V10", 285, "NOS Oxide", 250, 3000);


echo $mobil1->infoMobil();
echo "<br>";
echo $mobil2->infoMobil();
echo "<hr>";
echo $mobil1->setInterior("Suede Leather");
