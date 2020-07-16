<?php
    class Produk{
        public $nama,
               $harga,
               $pengembang,
               $publisher,
               $jmlHalaman,
               $jmlWaktuMain,
               $jmlLagu;

        public function __construct($nama = "nama", $harga = "harga", $pengembang = "pengembang", $publisher = "publisher", $jmlHalaman = 0, $jmlWaktuMain = 0, $jmlLagu = 0) 
        {
            $this->nama = $nama;
            $this->harga = $harga;
            $this->pengembang = $pengembang;
            $this->publisher =  $publisher;
            $this->jmlHalaman = $jmlHalaman;
            $this->jmlWaktuMain = $jmlWaktuMain;
            $this->jmlLagu = $jmlLagu;
        }

        public function getLabel() {
            return "$this->pengembang, $this->publisher";
        }

        public function printInfoProduk() {
            $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) | ";
            
            if ($this->kategori == "Komik") {
                $str .= "- {$this->jmlHalaman} Halaman";
            } elseif ($this->kategori == "Game") {
                $str .= "~ {$this->jmlWaktuMain} Hours";
            }   

            return $str;
        }
    }

    Class Komik extends Produk {
        public function printInfoProduk() {
            $string = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlHalaman} Halaman";
            return $string;
        }
    }

    Class Games extends Produk {
        public function printInfoProduk() {
            $string = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlWaktuMain} Hours";
            return $string;
        }
    }

    Class Musik extends Produk {
        public function printInfoProduk() {
            $string = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlLagu} Songs";
            return $string;
        }
    }


    $produk1 = new Komik("Pasutri Gaje", "15000", "Line Webtoon", "Annisa Nishifani", 100, 0, 0);
    $produk2 = new Games("The Witcher 3 Wild Hunt", "670000", "CD Projekt", "Andrzej Sapkowsk", 0, 25, 0);
    $produk3 = new Musik("TWICE : Seize Of The Light", "350000", "JYP Entertaiment", "Warner Bros Music", 0, 0, 12);
    
    echo $produk1->printInfoProduk();
    echo "<br/>";
    echo $produk2->printInfoProduk();
    echo "<br/>";
    echo $produk3->printInfoProduk();




    