<?php
session_start();

//session_unset();

var_dump($_SESSION);


$action = 0;
if(!isset($_SESSION['scored'])) {
    $_SESSION['scored'] =false;
}
$scored = $_SESSION['scored'];

if(isset($_POST["action"])){
    $action = $_POST["action"];
}


// init the score

if (!isset($_SESSION["score"])){
    $_SESSION['scored'] = false;
    $scored = $_SESSION['scored'];
    $_SESSION["score"] = 0;
}


function goed(){

    global $scored;
    $x = $_SESSION["score"];
    echo $x;

    if(!$scored) {
        $x+=1;
        $_SESSION["score"] = $x;
        $scored = true;
        $_SESSION['scored'] = $scored;
    }
        $_SESSION["score"] = $x;
        echo "<br> score: " . $x;
   };

function fout(){
    $z = $_SESSION["score"] -1;
    $_SESSION["score"] = $z;
    echo "<br> score: " . $z;
};


$step0 = <<< CODE
<form method="post" action="opdracht13.php">
    <div style="display: inline-block">kies</div>
    <select name='tafels'>
        <option name='tafel1'></option>
        <option value='1'>tafel 1</option>
        <option value='2'>tafel 2</option>
        <option value='3'>tafel 3</option>
        <option value='4'>tafel 4</option>
        <option value='5'>tafel 5</option>
        <option value='6'>tafel 6</option>
        <option value='7'>tafel 7</option>
        <option value='8'>tafel 8</option>
        <option value='9'>tafel 9</option>
        <option value='10'>tafel 10</option>
        <input type="hidden" name="action" value="1">
    </select>
    <input type='submit' name='submit' value='Som'>
</form>

CODE;

$step1 = <<< CODE

<form method="post" action="opdracht13.php">
    <input type="hidden" name="action" value="0">
    <input type='number' name='ant' value=''>
</form>

CODE;

$step2 = <<< CODE
<form action="opdracht13.php" method="post">

    <input type='submit' name='back' value='Terug'>
</form>
CODE;


function show_action_html() {
    global $action;
    global $step0;
    global $step1;
    global $step2;
    switch($action) {
        case 0:
            echo $step0;
            dostep2();
            break;
        case 1:
            dostep1();
            echo $step1;
            echo $step2;
            break;
        case 2:
            echo $step0;
            back();
        break;
    }
}

function dostep2() {
    if (isset($_POST["ant"])){
        if ($_POST["ant"] == $_SESSION["antwoord"]){
            echo "<br>wu antwoord is correct "  . $_POST["ant"];
            goed();
        }else {
            echo  $_POST["ant"] . " is fout";
            echo "<br> de antwoord is " . $_SESSION["antwoord"];
            fout();
        }

    }
}
function back(){
    global $step0;
    if (isset($_POST["back"])){
        echo $step0;
    }
}

function dostep1() {

    $tf= $_POST["tafels"];
    $rand = rand(1 , 10);
    echo "<br>" . $tf . " * " . $rand . " = "  ;
    $_SESSION["antwoord"] = $tf * $rand;

}

/*
echo
"<form method='post'>
    <div style='display: inline-block'>kies</div>
    <select name='tafels'>
        <option name='tafel1'></option>
        <option value='tafel1'>tafel 1</option>
        <option value='tafel2'>tafel 2</option>
        <option value='tafel3'>tafel 3</option>
        <option value='tafel4'>tafel 4</option>
        <option value='tafel5'>tafel 5</option>
        <option value='tafel6'>tafel 6</option>
        <option value='tafel7'>tafel 7</option>
        <option value='tafel8'>tafel 8</option>
        <option value='tafel9'>tafel 9</option>
        <option value='tafel10'>tafel 10</option>

    </select>
    <input type='submit' name='submit' value='Som'>
</form>";

echo "<form method='post'>";

   if (isset($_POST["ant"])){
       if ($_POST["ant"] == $_SESSION["antwoord"]){
           echo "goed" . $_SESSION["antwoord"];
          echo "<br>" . goed();
       }else {
           echo "fout" . $_SESSION["antwoord"];
          echo "<br>" . fout();
       }
   }

if (isset($_POST['submit'])){
   switch ($_POST['tafels']){
       case "tafel1":
           $een[0] = "1 * 0 = ";
           $een[1] = "1 * 1 = ";
           $een[2] = "1 * 2 = ";
           $een[3] = "1 * 3 = ";
           $een[4] = "1 * 4 = ";
           $een[5] = "1 * 5 = ";
           $een[6] = "1 * 6 = ";
           $een[7] = "1 * 7 = ";
           $een[8] = "1 * 8 = ";
           $een[9] = "1 * 9 = ";
           $een[10] = "1 * 10 = ";

           $rand1 = array_rand($een , 1);
           $_SESSION["antwoord"] = $rand1 * 1;
           echo "<br>$een[$rand1] <input type='text' value='' name='ant' maxlength='2'>";


       break;
       case "tafel2":
           $twee[0] = "2 * 0 = ";
           $twee[1] = "2 * 1 = ";
           $twee[2] = "2 * 2 = ";
           $twee[3] = "2 * 3 = ";
           $twee[4] = "2 * 4 = ";
           $twee[5] = "2 * 5 = ";
           $twee[6] = "2 * 6 = ";
           $twee[7] = "2 * 7 = ";
           $twee[8] = "2 * 8 = ";
           $twee[9] = "2 * 9 = ";
           $twee[10] = "2 * 10 = ";

           $rand2 = array_rand($twee , 1);
           $_SESSION["antwoord"] = $rand2 *2;
           echo "<br>$twee[$rand2] <input type='text' value='' name='ant'>";
       break;
       case "tafel3":
           $drie[0] = "3 * 0 = ";
           $drie[1] = "3 * 1 = ";
           $drie[2] = "3 * 2 = ";
           $drie[3] = "3 * 3 = ";
           $drie[4] = "3 * 4 = ";
           $drie[5] = "3 * 5 = ";
           $drie[6] = "3 * 6 = ";
           $drie[7] = "3 * 7 = ";
           $drie[8] = "3 * 8 = ";
           $drie[9] = "3 * 9 = ";
           $drie[10] = "3 * 10 = ";

           $rand3 = array_rand($drie , 1);
           $_SESSION["antwoord"] = $rand3 *3;
           echo "<br>$drie[$rand3] <input type='text' value='' name='ant'>";
       break;
       case "tafel4":
           $vier[0] = "4 * 0 = ";
           $vier[1] = "4 * 1 = ";
           $vier[2] = "4 * 2 = ";
           $vier[3] = "4 * 3 = ";
           $vier[4] = "4 * 4 = ";
           $vier[5] = "4 * 5 = ";
           $vier[6] = "4 * 6 = ";
           $vier[7] = "4 * 7 = ";
           $vier[8] = "4 * 8 = ";
           $vier[9] = "4 * 9 = ";
           $vier[10] = "4 * 10 = ";

           $rand4 = array_rand($vier , 1);
           $_SESSION["antwoord"] = $rand4 *4;
           echo "<br>$vier[$rand4] <input type='text' value='' name='ant'>";
       break;
       case "tafel5":
           $vijf[0] = "5 * 0 = ";
           $vijf[1] = "5 * 1 = ";
           $vijf[2] = "5 * 2 = ";
           $vijf[3] = "5 * 3 = ";
           $vijf[4] = "5 * 4 = ";
           $vijf[5] = "5 * 5 = ";
           $vijf[6] = "5 * 6 = ";
           $vijf[7] = "5 * 7 = ";
           $vijf[8] = "5 * 8 = ";
           $vijf[9] = "5 * 9 = ";
           $vijf[10] = "5 * 10 = ";

           $rand5 = array_rand($vijf , 1);
           $_SESSION["antwoord"] = $rand5 *5;
           echo "<br>$vijf[$rand5] <input type='text' value='' name='ant'>";
       break;
       case "tafel6":
           $zes[0] = "6 * 0 = ";
           $zes[1] = "6 * 1 = ";
           $zes[2] = "6 * 2 = ";
           $zes[3] = "6 * 3 = ";
           $zes[4] = "6 * 4 = ";
           $zes[5] = "6 * 5 = ";
           $zes[6] = "6 * 6 = ";
           $zes[7] = "6 * 7 = ";
           $zes[8] = "6 * 8 = ";
           $zes[9] = "6 * 9 = ";
           $zes[10] = "6 * 10 = ";

           $rand6 = array_rand($zes , 1);
           $_SESSION["antwoord"] = $rand6 *6;
           echo "<br>$zes[$rand6] <input type='text' value='' name='ant'>";
       break;
       case "tafel7":
           $seven[0] = "7 * 0 = ";
           $seven[1] = "7 * 1 = ";
           $seven[2] = "7 * 2 = ";
           $seven[3] = "7 * 3 = ";
           $seven[4] = "7 * 4 = ";
           $seven[5] = "7 * 5 = ";
           $seven[6] = "7 * 6 = ";
           $seven[7] = "7 * 7 = ";
           $seven[8] = "7 * 8 = ";
           $seven[9] = "7 * 9 = ";
           $seven[10] = "7 * 10 = ";

           $rand7 = array_rand($seven , 1);
           $_SESSION["antwoord"] = $rand7 *7;
           echo "<br>$seven[$rand7] <input type='text' value='' name='ant'>";
       break;
       case "tafel8":
           $acht[0] = "8 * 0 = ";
           $acht[1] = "8 * 1 = ";
           $acht[2] = "8 * 2 = ";
           $acht[3] = "8 * 3 = ";
           $acht[4] = "8 * 4 = ";
           $acht[5] = "8 * 5 = ";
           $acht[6] = "8 * 6 = ";
           $acht[7] = "8 * 7 = ";
           $acht[8] = "8 * 8 = ";
           $acht[9] = "8 * 9 = ";
           $acht[10] = "8 * 10 = ";

           $rand8 = array_rand($acht , 1);
           $_SESSION["antwoord"] = $rand8 * 8;
           echo "<br>$acht[$rand8] <input type='text' value='' name='ant'>";
       break;
       case "tafel9":
           $negen[0] = "9 * 0 = ";
           $negen[1] = "9 * 1 = ";
           $negen[2] = "9 * 2 = ";
           $negen[3] = "9 * 3 = ";
           $negen[4] = "9 * 4 = ";
           $negen[5] = "9 * 5 = ";
           $negen[6] = "9 * 6 = ";
           $negen[7] = "9 * 7 = ";
           $negen[8] = "9 * 8 = ";
           $negen[9] = "9 * 9 = ";
           $negen[10] = "9 * 10 = ";

           $rand9 = array_rand($negen , 1);
           $_SESSION["antwoord"] = $rand9 * 9;
           echo "<br>$negen[$rand9] <input type='text' value='' name='ant'>";
       break;
       case "tafel10":
           $tien[0] = "10 * 0 = ";
           $tien[1] = "10 * 1 = ";
           $tien[2] = "10 * 2 = ";
           $tien[3] = "10 * 3 = ";
           $tien[4] = "10 * 4 = ";
           $tien[5] = "10 * 5 = ";
           $tien[6] = "10 * 6 = ";
           $tien[7] = "10 * 7 = ";
           $tien[8] = "10 * 8 = ";
           $tien[9] = "10 * 9 = ";
           $tien[10] = "10 * 10 = ";

           $rand10 = array_rand($tien , 1);
           $_SESSION["antwoord"] = $rand10 *10;
           echo "<br>$tien[$rand10] <input type='text' value='' name='ant'>";
   }
}


echo "</form>";
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tafel testen</title>
</head>
<body>
<?=show_action_html();?>

</body>
</html>
