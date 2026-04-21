<?php
    $nama = "budi";
    $umur = 20;
    $tinggi = 175.9;
    $hobi = ["membaca", "berenang", "mengaji"];

    echo "nama saya $nama, umur saya $umur, Tinggi saya $tinggi, hobi saya $hobi[2]";

    echo"<br><br>===========================================<br><br>";

//materi operator kondisi (if else)

    $angka1 = 20;
    $angka2 = 10;
    $hasilperkalian = $angka1 + $angka2;

    echo "hasil dari angka $angka1 + $angka2 = $hasilperkalian";

    echo"<br><br>===========================================<br><br>";

//pembagian
    $hasilpembagian = $angka1 / $angka2;
    echo "hasil dari pembagian $angka1 / $angka2 = $hasilpembagian";
    echo"<br><br>===========================================<br><br>";

//perkalian 
    $hasilperkalian = $angka1 * $angka2;
    echo "hasil dari perkalian $angka1 x $angka2 = $hasilperkalian";
    echo"<br><br>===========================================<br><br>";


//pengurangan
    $hasilpengurangan = $angka1 - $angka2;
    echo "hasil dari pengurangan $angka1 - $angka2 = $hasilpengurangan";
    echo"<br><br>===========================================<br><br>";

//operator kondisi
   $nilai = 91;
   if ($nilai >= 90) {
    echo "nilai A";
    } else if ($nilai >=80) {
        echo "nilai B";
    } else if ($nilai >=70) {
        echo "nilai C";
    } else {
        echo "nilai D";
    }

    echo"<br><br>===========================================<br><br>";

//operator kondisi genap ganjil
    if ($nilai % 2 == 0) {
        echo "nilai $nilai adalah bilangan genap";
    } else {
        echo "nilai $nilai adalah bilangan ganjil";
    }
    
    
?>