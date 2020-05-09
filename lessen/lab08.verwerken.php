<?php
if (isset($_POST["submit"]) ){
    $Acternaam = $_POST['Acternaam'];
    $Voornaam  = $_POST['voornaam'];
    $Straat    = $_POST['straat'];
    $Postcode  = $_POST['postcode'];
    $Plaats    = $_POST['plaats'];
    $Email     = $_POST['email'];
    $Study     = $_POST['study'];
};
echo "<h2>Uw gegevens zijn :</h2>" . "<br>";
echo "Achternaam: " . $Acternaam . "<br>";
echo "Voornam: " . $Voornaam . "<br>";
echo "straat: " . $Straat . "<br>";
echo "Postcode: " . $Postcode . "<br>";
echo "Plaats: " . $Plaats . "<br>";
echo "E-mailadres: " . $Email . "<br>";
echo "U wordt ingeschreven voor de volgende opkeiding: " . $Study . "<br>";