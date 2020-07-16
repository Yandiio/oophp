<?php
class Komik extends Produk implements infoProduk {

    protected $jmlHalaman;
    
    public function __construct($nama, $harga, $pengembang, $publisher, $jmlHalaman = 0) {
        parent::__construct($nama, $harga, $pengembang, $publisher);
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function setDiskon($diskon) {
        return $this->diskon = $diskon;
    }
    
    public function getInfo() 
    {
       $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}";
       return $str;
    }
    
    public function printInfoProduk() {
        $string = " {$this->getInfo()} | {$this->jmlHalaman} Halaman";
        return $string;
    }
}