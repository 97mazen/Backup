<?php

$old = null;
$achternaam = null;
$naam = null;
$aantal = null;

if (isset($_POST['submit'])) {
    $naam = $_POST['name'];
    $achternaam = $_POST['lastName'];
    $old = $_POST['leeftijd'];
    $fullname = $naam . " " . $achternaam;
    $hallo = "Hallo ";

    if ($old < 0){
        $caseIS = "leeftijd moet groter of gelijk zijn aan 0.";
        $fullname = null;
    }
    elseif ($old < 18){
        $caseIS = "Overv " . (18 - $old) . " jaar is " . $fullname . " volwassen";
    }
    elseif ($old > 21){
        $caseIS = $fullname . " is nu eigenlijk pas echt volwassen!";
    }
    else {
        $caseIS = 'Jij mag als' .$old . '-jarige meedoen met het prijzenfestival';
    }
}

?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Voornaam:</td>
                <td> <input name="name" type="text" required></td>
            </tr>
            <tr>
                <td>Achternaam:</td>
                <td> <input name="lastName"  type="text" required></td>
            </tr>
            <tr>
                <td>Leeftijd</td>
                <td><input name="leeftijd" type="number" required></td>
            </tr>
        </table>
        <input type="submit" value="verstuur" name='submit'>
    </form>
    <div> <br> <?php echo $hallo . $fullname; ?> </div>
    <div> <?php echo $caseIS; ?> </div>
</body>
</html>
