<?php

    //rumus s = v * t; jarak tempuh 64.5
    // 1. kecepatan 3m/s t=23menit
    $v1 = (3*3600) / (1000*1);
    $t1 = 23/60;
    $s1 = $v1 * $t1;
    echo "Jarak kecepatan 3m/s dengan waktu 23 menit adalah ".$s1." KM<br>";

    //2. kecepatan 5m/s t=12menit
    $v2 = (5*3600) / (1000*1);
    $t2 = 12/60;
    $s2 = $v2 * $t2;
    echo "Jarak kecepatan 5m/s dengan waktu 12 menit adalah ".$s2." KM<br>";

    //3. hitung sisa jarak
    $sisa = 64.5 - ($s1 + $s2);
    echo "Sisa jarak tempuh ketika sudah melakukan kecepatan 3m/s dengan waktu 23 menit dan 5m/s dengan waktu 12 menit adalah ".$sisa." KM<br>";

    //4. diperlambat dari 3m/s jadi 2m/s
    $v3 = (2*3600) / (1000*1);
    $t3 = $sisa / $v3;
    echo "Lamanya waktu yang dibutuhkan untuk sampai ke ketujuan dengan jarak sisa adalah ".$t3." JAM<br>";

    $total_second   = $t3 * 3600;
    $second         = intval($total_second%60);
    $total_minutes  = intval($total_second/60);
    $minutes        = intval($total_minutes%60);
    $hours          = intval($total_minutes/60);

    echo "Jadi total waktu yang dibutuhkan untuk sampai ke jarak 64.5KM adalah $hours Jam : $minutes Menit: $second Detik";

?>