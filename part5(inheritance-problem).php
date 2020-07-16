<?php
    class Produk{
        public $nama,
               $harga,
               $pengembang,
               $publisher,
               $jmlHalaman,
               $jmlWaktuMain,
               $jmlLagu,
               $kategori;

        public function __construct($nama = "nama", $harga = "harga", $pengembang = "pengembang", $publisher = "publisher", $jmlHalaman = 0, $jmlWaktuMain = 0, $jmlLagu = 0, $kategori = "kategori") 
        {
            $this->nama = $nama;
            $this->harga = $harga;
            $this->pengembang = $pengembang;
            $this->publisher =  $publisher;
            $this->jmlHalaman = $jmlHalaman;
            $this->jmlWaktuMain = $jmlWaktuMain;
            $this->jmlLagu = $jmlLagu;
            $this->kategori = $kategori;
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
            } elseif ($this->kategori == "musik" || $this->kategori == "Musik") {
                $str .= "- {$this->jmlLagu} Songs";
            }

            return $str;
        }
    }


    $produk1 = new Produk("Pasutri Gaje", "15000", "Line Webtoon", "Annisa Nishifani", 100, 0, 0, "Komik");
    $produk2 = new Produk("The Witcher 3 Wild Hunt", "670000", "CD Projekt", "Andrzej Sapkowsk", 0, 25, 0, "Game");
    $produk3 = new Produk("TWICE : Seize Of The Light", "350000", "JYP Entertaiment", "Warner Bros Music", 0, 0, 12, "Musik");
    
    echo $produk1->printInfoProduk();
    echo "<br/>";
    echo $produk2->printInfoProduk();
    echo "<br/>";
    echo $produk3->printInfoProduk();

    