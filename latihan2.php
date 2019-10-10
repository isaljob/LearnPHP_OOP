<?php
// untuk membuat Object kita membuat Class terlebih dahulu

// ini adalah CLASS
class Produk {
  // ini PROPERTI, merepresentasikan data/keadaan sebuah object
  public  $judul = "judul",
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0;

  // ini METHOD, merepresentasikan perilaku sebuah object
  public function getLabel() {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga"; // $this disini mengacu pada properti class Produk
  }
}

// ini adalah OBJECT
$produk1 = new Produk();              // instansiasi $produk1
$produk1->judul ='Doraemon';          // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk1->penulis = 'Andrea Hirata';  // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk1->penerbit = 'Erlangga';      // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk1->harga = 12000;              // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya

$produk2 = new Produk();              // instansiasi $produk2
$produk2->judul ='Winning Eleven';    // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk2->penulis = 'Kokoroto';       // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk2->penerbit = 'Konami';        // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya
$produk2->harga = 250000;             // propertinya diisi dengan data yang diinginkan, jika tidak diisi maka akan tampil nilai defaultnya

// coba ditampilkan
var_dump($produk1);
echo "<br>";
var_dump($produk1->penerbit);
echo "<br>";
var_dump($produk1->getLabel());
echo "<br>";
var_dump($produk2);
echo "<br>";
var_dump($produk2->penerbit);
echo "<br>";
var_dump($produk2->getLabel());



 ?>
