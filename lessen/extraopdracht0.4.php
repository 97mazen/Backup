<?php

if (isset($_POST['submit'])) {
    $naam = $_POST['name'];
    $achternaam = $_POST['lastName'];
    $old = $_POST['leeftijd'];
}


if ($old < 0){
    echo 'leeftijd moet groter of gelijk zijn aan 0.';
    $achternaam = 0;
    $naam = 0;
}

if ($old >= 18){
    echo  'hallo ' . $naam .' '. $achternaam .'<br>';
    echo 'Jij mag als ' .$old . '-jarige meedoen met het prijzenfestival';
}
$aantal = null;
if ($old > 1 && $old < 18){
    $aantal = 18 - $old;
    echo 'over ' . $aantal . ' jaar is ' . $naam . ' ' . $achternaam .' volwassen.';
}

if ($old >=21){
   echo $naam .' '. $achternaam . ' is nu eigenlijk pas echt volwassen!';
}