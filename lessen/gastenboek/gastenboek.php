<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gasten boek</title>
    <link rel="stylesheet" href="gastenboek.css">
</head>
<body>
<?php

include_once 'db.php';

$first = null;
$titel = null;
$text = null;
$datetime = null;

if (isset($_POST['post'])){
    $first = $_POST["name"];
    $titel = $_POST["titel"];
    $text = $_POST["message"];
    date_default_timezone_set('Europe/Amsterdam');
    $datetime=date("d-m-y \o\m\ H:i:s"); //datum en tijd met "om" ertussen
    $sql = "INSERT INTO users (name, titel, message, datetime ) VALUES ('$first', '$titel', '$text', '$datetime');";
}
mysqli_query($conn, $sql);


?>
    <header>
        <form method="post" action="login.php">
            <nav class="nav">
                <ul class="login">
                    <button name="login" type="submit">Login</button>
                </ul>
            </nav>
        </form>
    </header>
    <main>
        <div class="cont">
            <form action="gastenboek.php" method="post">
                <div class="info">
                    <input type="text" name="name" value="" placeholder="Enter Username">
                    <input type="text" name="titel" value="" placeholder="Titel">
                </div>
                <div>
                    <textarea type="text" name="message" value="" placeholder="Bericht.." class="bericht"></textarea>
                    <input type="submit" name="post" value="post">
                </div>
            </form>
        </div>
    </main>
    <div class="berichten">
        <h3 class="titel">Alle berichten</h3>
        <hr>
    </div>
    <div class="berchtbox" >
        <div class="B">
            <?php
            if (mysqli_connect_errno($conn))
            {
                echo "Connectie Database mislukt: " . mysqli_connect_error();
            }
            $result = mysqli_query($conn,"SELECT name, titel, message,datetime FROM users ");

            if(mysqli_num_rows($result) == 0) {
                echo 'Schrijf als eerste in het gastenboek!';
            } else {

                while($row = mysqli_fetch_array($result))
                { ?>
                        <div class="header">
                            <div class="naam"><?php echo htmlspecialchars($row['name'], true); ?></div>
                            <div class="tijd"><?php echo $row['datetime']; ?></div>
                            <div class=""><?php echo htmlspecialchars($row['titel'], true); ?></div>
                            <div class="bericht"><?php echo htmlspecialchars($row['message'],true); ?></div>
                            <hr>
                        </div>
                <?php } ?>


            <?php }
            mysqli_close($conn); // sluit connectie
            ?>
        </div>
    </div>
</body>
</html>

