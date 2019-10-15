<?php

// abstract
// sebuah class yang tidak dapat di-instansiasi

// ini adalah CLASS
abstract class Produk {
  // ini PROPERTI, merepresentasikan data/keadaan sebuah object
  private  $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0;

  // ini METHOD construct, atau biasa disebut magic method dari php
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // ini method yang disebut SETTER, karena digunakan untuk mengeset property didalam class
  // karena property pada parent-nya(yaitu Produk) visibilitinya private, maka dibuatlah method untuk bisa modifikasi property
  public function setJudul($judul) {
    $this->judul = $judul;
  }

  // ini method yang disebut GETTER, karena digunakan untuk mengambil nilai property didalam class
  // karena property pada parent-nya(yaitu Produk) visibilitinya private, maka dibuatlah method untuk bisa mengambil property
  public function getJudul() {
    return $this->judul;
  }

  public function setPenulis($penulis) {
    $this->penulis = $penulis;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  public function setPenerbit($penerbit) {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit() {
    return $this->penerbit;
  }

  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }

  public function getDiskon() {
    return $this->diskon;
  }

  public function setHarga($harga) {
    $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  // ini METHOD, merepresentasikan perilaku sebuah object
  public function getLabel() {
    return "$this->penulis, $this->penerbit"; // $this disini mengacu pada properti class Produk
  }

  abstract public function getInfoProduk();

  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

}


class Komik extends Produk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga); // property ini di construct oleh parent nya yaitu di class Produk
    $this->jmlHalaman = $jmlHalaman; // sementara property ini di-construct oleh child nya karena tidak ada property jmlHalaman pada class Produk
  }

  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga); // property ini di construct oleh parent nya yaitu di class Produk
    $this->waktuMain = $waktuMain; // sementara property ini di-construct oleh child nya karena tidak ada property waktuMain pada class Produk
  }

  public function getInfoProduk() {
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk {
  public $daftarProduk = [];

  public function tambahProduk( Produk $produk) {
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";

    foreach ( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}

// instansiasi
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

 ?>
