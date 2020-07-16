<?php 


Class ExampleStatic {
    public static $angka = 1;

    public function printTextss() {
        return "Halo " . self::$angka++ . " Kali";
    }
}

$obj = new ExampleStatic();
echo $obj->printTextss();
echo $obj->printTextss();
echo $obj->printTextss();
echo "<hr>";

$obj2 = new ExampleStatic();
echo $obj2->printTextss();
echo $obj2->printTextss();
echo $obj2->printTextss();
