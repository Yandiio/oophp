<?php


class Produk{
        public $nama = "Nama",
               $harga = "Harga",
               $pengembang = "Pengembang",
               $publisher = "Publisher";

        public function __construct($nama = "nama", $harga = 0, $pengembang = "pengembang", $publisher = "publisher") 
        {
            $this->nama = $nama;
            $this->harga = $harga;
            $this->pengembang = $pengembang;
            $this->publisher =  $publisher;
        }

        public function getLabel() {
            return "$this->pengembang, $this->publisher";
        }
    }

    $produk1 = new Produk("Pasutri Gaje", 16000, "Line Webtoon", "Annisa Nishifani");
    $produk2 = new Produk("The Witcher 3 Wild Hunt", 680000, "CD Projekt", "Andrzej Sapkowsk");
    $produk3 = new Produk("TWICE : Seize Of The Light");
    
    echo "Komik : ". $produk1->getLabel();
    echo "<br/>";
    echo "Game : ". $produk2->getLabel();
    echo "<br/>";
    var_dump($produk3);


    