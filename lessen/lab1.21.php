<?php
echo "<form name='input-Form' method='post'>
        <input type='text' name='name' value='' placeholder='voornaam'><br>
        <input type='text' name='lastName' value='' placeholder='achternaam'><br>
        <input type='date' name='datum' value='' placeholder='Geboortedatum' <br><br>
        <input type='text' name='straat' value='' placeholder='straat' <br><br>
        <input type='text' name='postcode' value='' placeholder='postcode'><br>
        <input type='text' name='plaats' value='' placeholder='plaats'><br>
        <input type='email' name='email' value='' placeholder='e-mail'><br>
        <input type='password' name='password' value=''><br><br>
        <h2>Minderjarig:</h2> <input type='checkbox' name='Minderjarig' value='Ja'>ja
        <input type='checkbox' name='Minderjarig' value='nee'>Nee<br><br>
         <input type=\"submit\" width=\"300px\" name=\"registreren\" value=\"Registreren\" />
         <input type=\"reset\" value=\"Reset\"></form>";

if (isset($_POST["registreren"])){
    $user = array(
       "Voornaam" =>  $_POST["name"],
        "Achternaam"=> $_POST["lastName"],
        "geboortedatum"=> $_POST["datum"],
        "postcode"=> $_POST["postcode"],
        "straat"=> $_POST["straat"],
        "e-mail"=> $_POST["email"],
        "password"=> $_POST["password"],
        "minderjarig"=> $_POST["Minderjarig"]
    );
    $gebruiker = json_encode($user);
    echo $gebruiker;

    var_dump($user);
}

