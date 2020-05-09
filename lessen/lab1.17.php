<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>do-while-lus.php</title>
</head>
<body>
    <h3>Voorbeeld van de do-while-lus</h3>
    <?php
        echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
        $saldo = 100;
        $rente = 0.1;
        $mand = 1;
        echo "<br>Beginsaldo is: $saldo";
        echo "<br> Start...";
        do {
            $saldo = $saldo + ($saldo * $rente);
            $saldo = sprintf("%0.2f" , $saldo);
            echo "<br>Maand: $mand je saldo is: $saldo";
            $mand++;
            if ($mand == 2){
                echo "<br>Fabruari betaalt geen rente.";
                $mand++;
            }
            if ($saldo >2000){
                echo "<br>Maximale saldo 2000 is bereikt";
                break;
            }
            if ($mand == 6 && $saldo < 1000){
                echo "<br>Je saldo is te laag";
                break;
            }
        }
        while($saldo < 2000);
        echo "<br>FINISH";
    ?>
</body>
</html>