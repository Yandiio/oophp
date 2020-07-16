<?php

Class Handphone {
    public function tampil_pesan_handphone() {
        //operator scope self memanggil method dalam class
        echo self::tampil_pesan();
        echo $this->tampil_pesan();

    }

    public function tampil_pesan() {
        return "Ini pesan handphone, ";
    }
}

Class Smartphone extends Handphone {
    public function tampil_pesan_smartphone() {
        //pada class smartphone, operator scope parent akan memanggil method pada parent class
        echo parent::tampil_pesan();
        echo $this->tampil_pesan();
    }

    public function tampil_pesan() {
        return "jenis smartphone";
    }
}

$obj = new Smartphone();
echo $obj->tampil_pesan_smartphone();
echo "<br>";
echo $obj->tampil_pesan_handphone();

