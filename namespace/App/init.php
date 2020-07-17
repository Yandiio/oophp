<?php 

 spl_autoload_register (function( $class ) { 

     // kita pakai method explode karena namespace akan dipecah jadi bentuk array
    /* contoh:
        App\Produk\User = ["App", "Produk", "User"]
    */
    // dan kita ambil array terakhir menggunakan method end

     $class = explode("\\", $class);
     $class = end( $class );
     require_once __DIR__ . '/Produk/' . $class . '.php'; 
 });

 spl_autoload_register( function( $class ) {

    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';

 });


// /* using magic method autoload */
// function __autoload($class) {
//     require_once  "Produk/$class.php"; 
// }