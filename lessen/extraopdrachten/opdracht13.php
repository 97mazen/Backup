<?php
session_start();

$action = 0;

if(isset($_POST["action"])){
    $action = $_POST["action"];
}

if (!$_SESSION){
    $_SESSION["score"] = array();
}


function goed(){
    $x = $_SESSION["score"] +1;
    $_SESSION["score"]= $x;

};

function fout(){
    $z = $_SESSION["score"] -1;
    $_SESSION["score"] = $z;
};

$score = "score: " .$_SESSION["score"];

function show_action_html() {
    global $action;
    switch($action) {
        case 0:
            dostep2();
            break;
        case 1:
            dostep1();
            break;
    }
}
$answer = null;
function dostep2() {
    global $answer;
    if (isset($_POST["ant"])){
        if ($_POST["ant"] == $_SESSION["antwoord"]){
            $answer = "uw antwoord is correct "  . $_POST["ant"];
            goed();
        }else {
            $answer = $_POST["ant"] . " is fout";
            fout();
        }

    }
}
$taf = null;
function dostep1() {
    global $taf;
    $tf= $_POST["tafels"];
    $rand = rand(1 , 10);
    $taf = $tf . " * " . $rand . " = ";
    $_SESSION["antwoord"] = $tf * $rand;

}
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
<form method="post" action="opdracht13.php">
    <input type="hidden" name="action" value="0">
    <div>
        <?php echo $taf; ?>
        <input type='number' name='ant' value=''>
    </div>

</form>
<div><?php echo $answer; ?></div>
<div><?php echo $score; ?></div>
</body>
</html>