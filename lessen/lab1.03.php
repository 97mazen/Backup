<?php

    $breedte    = 10;
    $lengte     = 11;
    $hoogte     = 5;

    $oppervlakte    = $breedte * $lengte;
    $volume         = $breedte * $lengte * $hoogte;
    $resultaat      = '<div> containerbasisoppervlakte is ' . $oppervlakte . '</div>';
    $resultaat2     = '<div> containerbasisvolume is ' . $volume . '</div>';
    echo $resultaat;
    echo $resultaat2;