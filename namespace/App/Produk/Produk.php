<?php 

namespace App\Produk;

abstract class Produk{
    protected  $nama,
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


    abstract public function getInfo();

}