<?php
    class Produk{
        private $nama,
               $pengembang,
               $publisher,
               $harga;

        protected $diskon = 0;

        public function __construct($nama = "nama", $harga = "harga", $pengembang = "pengembang", $publisher = "publisher") 
        {
            $this->nama = $nama;
            $this->harga = $harga;
            $this->pengembang = $pengembang;
            $this->publisher =  $publisher;
        }

        public function setJudul($nama) {
            $this->nama = $nama;
        }

        public function getJudul() {
            return $this->nama;
        }

        public function setHarga($harga) {
            $this->harga = $harga;
        }

        public function getHarga() {
            return $this->harga;
        }

        public function setPublisher($publisher) {
            $this->publisher = $publisher;
        }

        public function getPubisher() {
            return $this->publisher;
        }

        public function setPengembang($pengembang) {
            $this->pengembang = $pengembang;
        }

        public function getPengembang() {
            return $this->pengembang;
        }

        public function getLabel() {
            return "$this->pengembang, $this->publisher";
        }

        public function getHargaAkhir() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function printInfoProduk() {
            $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ";
            return $str;
        }
        
    }

    Class Komik extends Produk {

        protected $jmlHalaman;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlHalaman = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function setDiskon($diskon) {
            return $this->diskon = $diskon;
        }

        public function printInfoProduk() {
            $string = " ". parent::printInfoProduk()." ~ {$this->jmlHalaman} Halaman";
            return $string;
        }
    }

    Class Games extends Produk {

        protected $jmlWaktuMain;

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

        protected $jmlLagu;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlLagu = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlLagu = $jmlLagu;
        }


        public function printInfoProduk() {
            $string = " ". parent::printInfoProduk() ."  - {$this->jmlLagu} Songs";
            return $string;
        }
    }


    $produk1 = new Komik("Pasutri Gaje", 15000, "Line Webtoon", "Annisa Nishifani", 100);
    $produk2 = new Games("The Witcher 3 Wild Hunt", 690000, "CD Projekt", "Andrzej Sapkowsk", 25);
    $produk3 = new Musik("TWICE : Seize Of The Light", 350000, "JYP Entertaiment", "Warner Bros Music", 12);
    
    echo $produk1->printInfoProduk();
    echo "<br/>";
    echo $produk2->printInfoProduk();
    echo "<br/>";
    echo $produk3->printInfoProduk();
    echo "<br/>";
    echo "<hr>";

    
    $produk1->setJudul("Pasutri Gaje 2: Get married");
    $produk1->setPengembang("Persudi Sudahi");
    echo "Informasi komik : {$produk1->getJudul()} | {$produk1->getPengembang()}";
    echo "<br/>";
    $produk1->setDiskon(10);
    echo "Diskon untuk pembelian Komik {$produk1->getHargaAkhir()}";
  
    