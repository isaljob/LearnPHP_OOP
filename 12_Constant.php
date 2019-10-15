<?php

// sebuah identifier untuk menyimpan nilai
// beda dengan variable, constant tidak bisa diubah
// cara buat bisa dengan define() dan const

// biasakan menulis contant dengan huruf besar untuk membedakan dengan variable biasa
define('NAMA', 'Faishal Fawwaz'); // define tidak bisa diletakkan didalam class
echo NAMA;

echo "<br>";

const UMUR = 29; // const bisa diletakkan didalam class
echo UMUR;

echo "<hr>";

// membuat constant didalam class
class Coba {
    const NAMA2 = 'Ahmad Ihsanul';
}

// cara memanggil constant didalam class seperti memanggil static
echo Coba::NAMA2;

 ?>
