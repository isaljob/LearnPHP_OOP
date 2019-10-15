<?php
class Game extends Produk implements InfoProduk {
  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga); // property ini di construct oleh parent nya yaitu di class Produk
    $this->waktuMain = $waktuMain; // sementara property ini di-construct oleh child nya karena tidak ada property waktuMain pada class Produk
  }

  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}
