<?php 

class Game extends Produk {

    protected $jmlWaktuMain;
    
    public function __construct($nama, $harga, $pengembang, $publisher, $jmlWaktuMain = 0) {
        parent::__construct($nama, $harga, $pengembang, $publisher);
        $this->jmlWaktuMain = $jmlWaktuMain;
    }
    
    public function printInfoProduk() {
        $string = "{$this->getInfo()} | ~ {$this->jmlWaktuMain} Hours";
        return $string;
    }
    
    public function getInfo() 
    {
       $str = "{$this->nama} | {$this->getLabel()} (Rp. {$this->harga}";
       return $str;
    }
    }
    