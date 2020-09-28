<?php

    $bilangan1 = $_GET['bilangan1'];
    $bilangan2 = $_GET['bilangan2'];
    $operasi = $_GET['operasi'];
    
    echo "Bilangan 1 = $bilangan1 <br>";
    echo "Bilangan 2 = $bilangan2 <br>";

    if($operasi == "tambah" ){
        $hasil = $bilangan1 + $bilangan2;
        echo "Operasi hitung = tambah<br>Hasil = $hasil";
    }
    elseif($operasi == "kurang"){
        $hasil = $bilangan1 - $bilangan2;
        echo "Operasi hitung = kurang<br>Hasil = $hasil";
    }
    elseif($operasi == "kali"){
        $hasil = $bilangan1 * $bilangan2;
        echo "Operasi hitung = kali<br>Hasil = $hasil";
    }
    elseif($operasi == "bagi"){
        $hasil = $bilangan1 / $bilangan2;
        echo "Operasi hitung = bagi<br>Hasil = $hasil";

    }
    else{
        echo "ERROR";
    }
?>
