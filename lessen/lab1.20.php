<?php
ob_start();
?>
    <!doctype html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cookies</title>
    </head>
    <body>
    <form name="login" action="" method="post">
        Gebruikersnaam:<br>
        <input type="text" name="user"> <br><br>
        <input type="submit" name="submit" value="Inloggen">
    </form>
    </body>
    </html>
<?php
if (isset($_POST["submit"])) {
    function welkom($user) {
        if ($user == $_COOKIE["user"]) {
            echo "<br>Hallo " . $user . ", welkom terug.";
        } elseif ($user != $_COOKIE["user"]) {
            echo "<br>Hallo " . $user . ", u bent onze nieuwtse gebruiker";
            setcookie("user", "$user", mktime(0,0,0,1,1,2050));
        }
    }

    $user = $_POST["user"];
    $melding = welkom($user);
    echo "<br> $melding";
}
ob_end_flush();
?>