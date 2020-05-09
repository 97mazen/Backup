<?php
function deelbar()
{
    for ($x = 0; $x < 1001; $x++) {
        echo '<br>' . $x;
        if ($x % 7 == 0) {
            echo "<span style='color: red'>" . ' deelbaar door 7 ' . "</span>";

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
    <div><?=deelbar()?></div>
</body>
</html>
