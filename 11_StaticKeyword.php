<?php
// catatan-catatan
// class adalah template dari object

// static keyword
// member yang terikat dengan class, bukan dengan SplObjectStorage
// nilai static ajab selalu tetap meskipun object di-instansiasi berulang kali

// class dengan property static
class ContohStatic {
  public static $angka = 1;

  public static function halo() {
    return "Halo." . self::$angka++ . " kali."; // cara memanggil property $angka pada static tidak lagi dengan this, tetapi dengan self
  }
}

echo ContohStatic::$angka; // memanggil class dengan properti static dengan :: bukan dengan tanda panah ->
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();

 ?>
