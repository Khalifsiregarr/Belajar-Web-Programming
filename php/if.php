<?php 

    $nilai = 70;
    $absen = 90;

    if ($nilai >=80 && $absen >=80){
        echo "Selamat Kamu Lulus Seneng bangett dehhh!!!". PHP_EOL;
    } else if ($nilai >= 75 && $absen >=90){
        echo "Keren Gak Tuh 80 :)". PHP_EOL;
    } else if ($nilai >= 90 && $absen >=100){
        echo "Menyala Abangkuh". PHP_EOL;
    } else if ($nilai >= 61 && $absen >=61){
        echo "Ulang Lagi". PHP_EOL;
    } else{
        echo "Tobat". PHP_EOL;
    }