<?php

Class Mobil {
    public $engine = "engine",
           $name = "name" ,
           $type = "type",
           $speed = "speed";

    public function __construct($name, $type, $engine, $speed) {
        $this->name = $name;
        $this->engine = $engine;
        $this->type = $type;
        $this->speed = $speed;
    }

    public function getTypeCar() {
        return "$this->type, $this->speed";
    }
}

Class CetakInfoMobil {
    public function infoMobil(Mobil $mobil) {
        return $string = "{$mobil->name} | {$mobil->getTypeCar()} | Engine: ($mobil->engine)";
    }
}

$mobil1 = new Mobil("Mercedes-Benz", "C63", "V8", "280kph");
$mobil2 = new Mobil("BMW", "M3 F10", "V10", "285kph");

$cetakMerek = new CetakInfoMobil();
echo $cetakMerek->infoMobil($mobil1);
echo "<br/>";
echo $cetakMerek->infoMobil($mobil2);
