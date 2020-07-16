<?php 

/* using system php library
// spl_autoload_register(function($class) {
//     require_once __DIR__ . '/Produk/' . $class . '.php'; 
// });


/* using magic method autoload */
function __autoload($class) {
    require_once  "Produk/$class.php"; 
}