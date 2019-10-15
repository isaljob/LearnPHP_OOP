<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
//
// require_once 'Service/User.php';

// load Produk
spl_autoload_register(function($class){
  // isi $class nya adalah App\Produk\User.php  kemudian di explode dulu agar terambil User.php nya
  $class = explode('\\', $class);
  $class = end($class);
  require_once 'Produk/' . $class . '.php';
});

// load Service
spl_autoload_register(function($class){
  // isi $class nya adalah App\Service\User.php  kemudian di explode dulu agar terambil User.php nya
  $class = explode('\\', $class);
  $class = end($class);
  require_once 'Service/' . $class . '.php';
});
