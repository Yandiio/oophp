<?php 

abstract class Buah {
    protected $warna;
    
    abstract function makan();

    public function warna($warna) {
        return $this->warna = $warna;
    }
}

class Mangga extends Buah {
    
    public function makan() {
        return "buah mangga dimakan";
    }
}

class Apel extends Buah {

    public function makan()
    {
        return "buah apel dimakan";
    }
}

echo Mangga::makan();
echo "<br>";
echo Apel::makan();