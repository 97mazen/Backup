<?php

$zin = 'Klaar is kees, zo sprak hij.';
$zin2 =  '“Klaar is Kees”, zo sprak ‘hij’.';

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
    <div><?php echo $zin; ?></div>
    <div><?php echo $zin2; ?></div>
</body>
</html>
