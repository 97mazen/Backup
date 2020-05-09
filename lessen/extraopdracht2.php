<?php

$total = null;
for ($x = 1; $x <4; $x++) {
    $tijd = rand(0,60);
    $total += $tijd;
}

$gemiddelde = $total/3;

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
    <div> <?php echo $x . " rond " . $tijd?> </div>
    <div> Totale tijd over 3 ronden is  <?php echo $total; ?> seconden</div>
    <div> Het gemiddelde was <?php echo $gemiddelde; ?> seconden </div>
</body>
</html>
