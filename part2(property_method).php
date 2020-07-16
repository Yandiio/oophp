<?php
    class Produk{
        public $nama = "Nama",
               $harga = "Harga",
               $pengembang = "Pengembang",
               $publisher = "Publisher";

        public function getLabel() {
            return "Judul: $this->judul, Harga: $this->harga, Pengembang : $this->pengembang, Publisher: $this->publisher";
        }
    }

    $produk1 = new Produk();
    $produk1->harga = "150000";
    $produk1->judul = "Pasutri Gaje";
    $produk1->pengembang = "Annisa Nishifani";
    $produk1->publisher = "Line Webtoon";


    $produk2 = new Produk();
    $produk2->judul = "The Witcher 3 Wild Hunt";
    $produk2->harga = "670000"; 
    $produk2->publisher = "CD Projekt";
    $produk2->pengembang = "Andrzej Sapkowsk";

    echo "Komik : ". $produk1->getLabel();
    echo "<br/>";
    echo "Game : ". $produk2->getLabel();


    