<?php

function color()
{
    for ($i = 1; $i <= 30; $i++) {
        if ($i < 11) {
            echo '<span style="color: red" `>' . $i . '</span>';
        } elseif ($i < 21) {
            echo '<span style="color: green">' . $i . '</span>';
        } elseif ($i < 31) {
            echo '<span style="color: blue">' . $i . '</span>';
        }
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
    <div><?=color()?></div>
</body>
</html>
