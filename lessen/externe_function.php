<?php
function korting(){
    $korting = 0;
    if (isset($_POST['student'])) $korting = $korting + 15;
    if (isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}

function servicekosten($betalingswijze){
      /*  if (isset($_POST["select"]))
            if ($betalingswijze === "Visa"){
                $betalingswijze = 2;
            }elseif ($betalingswijze === "MasterCard"){
                $betalingswijze = 2.5;
            }elseif ($betalingswijze === "PayPal"){
                $betalingswijze = 1.5;
            }elseif ($betalingswijze === "Ideal") {
                $betalingswijze = 1;
            }else {
                $betalingswijze = null;
            }*/
      switch ($betalingswijze){
          case "Visa":
            return 2;
             break;
          case "MasterCard":
             return 2.5;
              break;
          case "PayPal":
              return 1.5;
              break;
          case "Ideal":
              return 1;
      }
    return($betalingswijze);
}

function facturering(){
    echo "<h3>Factuur</h3>";
    echo "<table>
                <tr>
                   <td>Genre</td>
                   <td>Artiest</td>
                   <td>Album</td>
                   <td>Aantaal</td>
                   <td>Prijs</td>
                   <td>Bedrag</td>
               </tr>
              
          </table>";
    $totaal = 0;
    $korting = 0;
    for ($x=0; $x < sizeof($_POST["albumcode"]); $x++) {
        $genre = $_POST["genre"][$x];
        $artiest = $_POST["artiest"][$x];
        $album = $_POST["album"][$x];
        $aantal = $_POST["aantal"][$x];
        $prijs = $_POST["prijs"][$x];
        $bedrag = $prijs * $aantal;
        $totaal += $bedrag;
        $korting = ($totaal * korting()) / 100;


        echo "<table>
                <tr>
                    <td>$genre</td>
                    <td>$artiest</td>
                    <td>$album</td>
                    <td>$aantal</td>
                    <td>$prijs</td>
                    <td>$bedrag</td>
                </tr>  
          </table>";
    }
    $betalingswijze = $_POST['select'];
    $servicekosten = servicekosten($betalingswijze);

    $teBtalen= ($totaal - $korting) + $servicekosten;
    echo "<table>
            <tr>
                <td>Totaal</td>
                <td>$totaal</td>
          </tr>
          <tr>
                <td>korting</td>
                <td>$korting</td>
          </tr>
          <tr>
                <td>servicekosten</td>
                <td>$servicekosten</td>
          </tr>
          <tr>
                <td>Te betalen</td>   
                <td>$teBtalen</td>   
          </tr>
  </table>";
}

function premiun(){
    foreach ($_POST["aantal"] as $key){
        if ($key >= 5 ){
            echo "word lid van onze premium club.";
        }

    }
}
