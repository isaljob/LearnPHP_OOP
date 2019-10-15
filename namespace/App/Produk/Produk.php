<?php
// ini adalah CLASS
abstract class Produk {
  // ini PROPERTI, merepresentasikan data/keadaan sebuah object
  protected  $judul,
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
  // karena property pada parent-nya(yaitu Produk) visibility-nya private, maka dibuatlah method untuk bisa mengambil property
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

  abstract public function getInfo();

}
