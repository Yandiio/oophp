<?php
class printInfoProduk {
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