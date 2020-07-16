<?php
    class Produk{
        public $nama,
               $harga,
               $pengembang,
               $publisher;

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

        public function printInfoProduk() {
            $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ";
            return $str;
        }

        
    }

    Class Komik extends Produk {

        public $jmlHalaman;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlHalaman = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function printInfoProduk() {
            $string = " ". parent::printInfoProduk()." ~ {$this->jmlHalaman} Halaman";
            return $string;
        }
    }

    Class Games extends Produk {

        public $jmlWaktuMain;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlWaktuMain = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlWaktuMain = $jmlWaktuMain;
        }

        public function printInfoProduk() {
            $string = " ". parent::printInfoProduk() ." ~ {$this->jmlWaktuMain} Hours";
            return $string;
        }
    }

    Class Musik extends Produk {

        public $jmlLagu;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlLagu = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlLagu = $jmlLagu;
        }

        public function printInfoProduk() {
            $string = " ". parent::printInfoProduk() ."  - {$this->jmlLagu} Songs";
            return $string;
        }
    }


    $produk1 = new Komik("Pasutri Gaje", "15000", "Line Webtoon", "Annisa Nishifani", 100);
    $produk2 = new Games("The Witcher 3 Wild Hunt", "670000", "CD Projekt", "Andrzej Sapkowsk", 25);
    $produk3 = new Musik("TWICE : Seize Of The Light", "350000", "JYP Entertaiment", "Warner Bros Music", 12);
    
    echo $produk1->printInfoProduk();
    echo "<br/>";
    echo $produk2->printInfoProduk();
    echo "<br/>";
    echo $produk3->printInfoProduk();
    echo "<br/>";




    