<?php

    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "inventori";

    $koneksi = mysqli_connect($server, $user, $password, $dbname);

    if (!$koneksi) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>