<?php
echo "<h3>Reiskosten berkenen </h3>";
echo "Vertrek:
<form method='post' name='berekenen'>
        <select name='vertrek'>
            <option value='1'>Amsterdam</option>    
            <option value='2' >Utrecht</option>    
            <option value='3' >Den Haag</option>    
            <option value='4' >Rotterdam</option>    
        </select>
        
      Bestemming:
        <select name='bestemming'>
            <option value='1'>Amsterdam</option>    
            <option value='2' >Utrecht</option>    
            <option value='3' >Den Haag</option>    
            <option value='4' >Rotterdam</option>    
        </select>
        <input type='submit' name='submit' value='Berekenen'>
</form>";

$kosten = 0;
if (isset($_POST["submit"]) ){
    function reiskosten($vertrek, $bestemming){
        $reiskosten = array();
        $reiskosten[1] = array();
        $reiskosten[2] = array();
        $reiskosten[3] = array();
        $reiskosten[4] = array();

        $reiskosten[1][1] = 0;
        $reiskosten[1][2] = 30;
        $reiskosten[1][3] = 60;
        $reiskosten[1][4] = 90;

        $reiskosten[2][1] = 30;
        $reiskosten[2][2] = 0;
        $reiskosten[2][3] = 40;
        $reiskosten[2][4] = 20;

        $reiskosten[3][1] = 60;
        $reiskosten[3][2] = 40;
        $reiskosten[3][3] = 0;
        $reiskosten[3][4] = 10;

        $reiskosten[4][1] = 90;
        $reiskosten[4][2] = 20;
        $reiskosten[4][3] = 10;
        $reiskosten[4][4] = 0;

        return ($reiskosten[$vertrek][$bestemming]);
    }
    $kosten = reiskosten($_POST["vertrek"],$_POST["bestemming"]);
    echo "De berekende reiskosten zijn: " . $kosten;
}else {
    $kosten = null;
}
