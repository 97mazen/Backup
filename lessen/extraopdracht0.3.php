<?php

if (isset($_POST['submit'])) {
    $naam = $_POST['name'];
    $achternaam = $_POST['lastName'];
    $old = $_POST['leeftijd'];
}
echo  'hallo ' . $naam .' '. $achternaam .'<br>';
echo 'Jij mag als' .$old . '-jarige meedoen met het prijzenfestival';