<?php
class Komik extends Produk implements InfoProduk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga); // property ini di construct oleh parent nya yaitu di class Produk
    $this->jmlHalaman = $jmlHalaman; // sementara property ini di-construct oleh child nya karena tidak ada property jmlHalaman pada class Produk
  }

  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}
