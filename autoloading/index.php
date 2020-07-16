<?php

require_once 'App/init.php';

$produk1 = new Komik("Pasutri Gaje", 15000, "Line Webtoon", "Annisa Nishifani", 100);
$produk2 = new Game("The Witcher 3 Wild Hunt", 690000, "CD Projekt", "Andrzej Sapkowsk", 25);
$produk3 = new Album("TWICE : Seize Of The Light", 350000, "JYP Entertaiment", "Warner Bros Music", 12);

$cetakInfoProduk = new printInfoProduk();
$cetakInfoProduk->tambahInfoProduk($produk1);
$cetakInfoProduk->tambahInfoProduk($produk2);
$cetakInfoProduk->tambahInfoProduk($produk3);

echo $cetakInfoProduk->cetakInfoProduk();
echo "<br/>";

