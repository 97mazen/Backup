<?php

$brief= "
beste <b>abonnee</b>
U heeft het laatste nummer van ons magazine ontvangen. <br>
Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting: <br>
U betaalt <b>bedrag-met-korting</b>
in plaats van 65euro. <br><br>
<i>Profiteer nu van deze aanbieding!</i><br><br>
Met vriedelijke groet, <br>
Sam simons<br>
Hoofdredacteur<br>";
$brief = str_replace("abonnee", "Jan Davids" , $brief);
$brief = str_replace("bedrag-met-korting", "50 euro", $brief);
echo $brief;