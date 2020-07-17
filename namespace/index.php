<?php

require_once 'App/init.php';

// bisa menggunakan alias, agar tidak terjadi konflik saat pendeklarasikan instance
use App\Produk\User as UserProduk;
use App\Service\User as ServiceProduk;



$user = new ServiceProduk;
echo "<br>";
$user2 = new UserProduk;
