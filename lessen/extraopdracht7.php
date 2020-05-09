<?php

$array = [
    0 => 1,
    1 => 8,
    2 => 12,
    3 => 7,
    4 => 14,
    5 => 8,
    6 => 1,
    7 => 1,
    8 => 14,
    9 => 7
];

print_r($array);

$hoogste = 0;
for ($x=0 ; $x < sizeof($array); $x++){
    if ($array[$x] > $hoogste){
        $hoogste = $array[$x];
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
    <div><?php echo $hoogste; ?></div>
</body>
</html>
