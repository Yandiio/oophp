<?php
    class Produk{
        public $nama = "Nama",
               $harga = "Harga",
               $pengembang = "Pengembang",
               $publisher = "Publisher";

        public function __construct($nama = "nama", $harga = "harga", $pengembang = "pengembang", $publisher = "publisher") 
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

    Class InfoProduk {
        public function cetakInfoProduk( Produk $produk ) {
            return $dataProduk = "{$produk->nama} | {$produk->getLabel()} (Rp. {$produk->harga})";
        }
    }

    $produk1 = new Produk("Pasutri Gaje", "15000", "Line Webtoon", "Annisa Nishifani");
    $produk2 = new Produk("The Witcher 3 Wild Hunt", "670000", "CD Projekt", "Andrzej Sapkowsk");
    $produk3 = new Produk("TWICE : Seize Of The Light", "350000", "JYP Entertaiment", "Warner Bros Music");
    
    $infoProduk = new InfoProduk();
    echo $infoProduk->cetakInfoProduk($produk1);
    echo "<br/>";
    echo $infoProduk->cetakInfoProduk($produk2);
    echo "<br/>";
    echo $infoProduk->cetakInfoProduk($produk3);


    