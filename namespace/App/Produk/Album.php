<?php

class Album extends Produk {

    protected $jmlLagu;
    
    public function __construct($nama, $harga, $pengembang, $publisher, $jmlLagu = 0) {
        parent::__construct($nama, $harga, $pengembang, $publisher);
        $this->jmlLagu = $jmlLagu;
    }
    
    
    public function printInfoProduk() {
        $string = "{$this->getInfo()} | - {$this->jmlLagu} Songs";
        return $string;
    }
    
    public function getInfo() 
    {
       $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}";
       return $str;
    }
}