<?php
    abstract class Produk{
        protected $nama,
               $pengembang,
               $publisher,
               $harga;

        protected $diskon = 0;
        

        abstract function printInfoProduk();

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

    }

    class Komik extends Produk {

        protected $jmlHalaman;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlHalaman = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function setDiskon($diskon) {
            return $this->diskon = $diskon;
        }

        public function printInfoProduk() {
            $string = " {$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) {$this->jmlHalaman} Halaman";
            return $string;
        }
    }

    class Games extends Produk {

        protected $jmlWaktuMain;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlWaktuMain = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlWaktuMain = $jmlWaktuMain;
        }

        public function printInfoProduk() {
            $string = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlWaktuMain} Hours";
            return $string;
        }
    }

    class Musik extends Produk {

        protected $jmlLagu;

        public function __construct($nama, $harga, $pengembang, $publisher, $jmlLagu = 0) {
            parent::__construct($nama, $harga, $pengembang, $publisher);
            $this->jmlLagu = $jmlLagu;
        }


        public function printInfoProduk() {
            $string = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlLagu} Songs";
            return $string;
        }
    }

    
    class InfoProduk {
        public $produkArray = [];

        public function tambahInfoProduk(Produk $produk) {
            $this->produkArray[] = $produk;
        }

        public function cetakInfoProduk() {
            $str = "Daftar Produk : <br/>";

            foreach ($this->produkArray as $p) {
                $str .= $p->printInfoProduk() . "<br/>";
            }

            return $str;
        }
    }


    $produk1 = new Komik("Pasutri Gaje", 15000, "Line Webtoon", "Annisa Nishifani", 100);
    $produk2 = new Games("The Witcher 3 Wild Hunt", 690000, "CD Projekt", "Andrzej Sapkowsk", 25);
    $produk3 = new Musik("TWICE : Seize Of The Light", 350000, "JYP Entertaiment", "Warner Bros Music", 12);

    $cetakInfoProduk = new InfoProduk();
    $cetakInfoProduk->tambahInfoProduk($produk1);
    $cetakInfoProduk->tambahInfoProduk($produk2);
    $cetakInfoProduk->tambahInfoProduk($produk3);

    echo $cetakInfoProduk->cetakInfoProduk();
    echo "<br/>";

    