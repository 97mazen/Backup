<?php

$old = null;
$achternaam = null;
$naam = null;

if (isset($_POST['submit'])) {
    $naam = $_POST['name'];
    $achternaam = $_POST['lastName'];
    $old = $_POST['leeftijd'];
    $welkom = "Hallo " . $naam . " " . $achternaam;

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
                <td> <input name="name" type="text"></td>
            </tr>
            <tr>
                <td>Achternaam:</td>
                <td> <input name="lastName"  type="text"></td>
            </tr>
            <tr>
                <td>Leeftijd</td>
                <td><input name="leeftijd" type="text"></td>
            </tr>
        </table>
        <input type="submit" value="verstuur" name='submit'>
    </form>
    <div><?php echo $welkom; ?></div>
    <div><?php echo 'Jij mag als' .$old . '-jarige meedoen met het prijzenfestival'; ?></div>
</body>
</html>

