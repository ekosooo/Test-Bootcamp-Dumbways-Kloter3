<?php

    $nkura      = 9999;
    $nmati      = floor(0.211*$nkura);
    $nsisa      = $nkura - $nmati;

    $nlahir     = floor($nsisa*(floor(365/90)));

    echo "Kura mati ".$nmati."</br>";
    echo "Kura sisa ".$nsisa."</br>";
    echo "Kura-kura lahir dalam waktu 365 hari ".$nlahir."</br>";

?>