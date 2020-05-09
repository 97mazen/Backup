<?php

$faces = [
    'seven.jpg',
    'bell.jpg',
    'women.jpg',
    'watermelon.jpg',
    'wild.jpg',
    'strickwild.jpg',
    'ring.jpg',
    'Wristwatch.jpg',
    'glass.jpg'
];



$payouts = array (
    'seven.jpg|seven.jpg|seven.jpg' => '15',
    'wild.jpg|wild.jpg|wild.jpg' => '5',
    'women.jpg|women.jpg|wild.jpg' => '1',
    'watermelon.jpg|watermelon.jpg|wild.jpg' => '1',
    'bell.jpg|bell.jpg|wild.jpg' => '1',
    'strickwild.jpg|strickwild.jpg|wild.jpg' => '1',
    'seven.jpg|seven.jpg|wild.jpg' => '1',
    'ring.jpg|ring.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|glass.jpg|wild.jpg' => '1',
    'women.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|women.jpg|wild.jpg' => '1',
    'watermelon.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|watermelon.jpg|wild.jpg' => '1',
    'strickwild.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|strickwild.jpg|wild.jpg' => '1',
    'seven.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|seven.jpg|wild.jpg' => '1',
    'ring.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|ring.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|bell.jpg|wild.jpg' => '1',
    'bell.jpg|glass.jpg|wild.jpg' => '1',
    'watermelon.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|watermelon.jpg|wild.jpg' => '1',
    'strickwild.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|strickwild.jpg>|wild.jpg' => '1',
    'seven.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|seven.jpg|wild.jpg' => '1',
    'ring.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|wing.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|women.jpg|wild.jpg' => '1',
    'women.jpg|glass.jpg|wild.jpg' => '1',
    'strickwild.jpg|watermelon.jpg|wild.jpg' => '1',
    'watermelon.jpg|strickwild.jpg|wild.jpg' => '1',
    'seven.jpg|watermelon.jpg|wild.jpg' => '1',
    'watermelon.jpg|seven.jpg|wild.jpg' => '1',
    'ring.jpg|watermelon.jpg|wild.jpg' => '1',
    'watermelon.jpg|ring.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|watermelon.jpg|wild.jpg' => '1',
    'watermelon.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|watermelon.jpg|wild.jpg' => '1',
    'watermelon.jpg|glass.jpg|wild.jpg' => '1',
    'seven.jpg|strickwild.jpg|wild.jpg' => '1',
    'strickwild.jpg|seven.jpg|wild.jpg' => '1',
    'ring.jpg|strickwild.jpg|wild.jpg' => '1',
    'strickwild.jpg|ring.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|strickwild.jpg|wild.jpg' => '1',
    'strickwild.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|strickwild.jpg|wild.jpg' => '1',
    'strickwild.jpg|glass.jpg|wild.jpg' => '1',
    'ring.jpg|seven.jpg|wild.jpg' => '1',
    'seven.jpg|ring.jpg|wild.jpg' => '1',
    'Wristwatch.jpg|seven.jpg|wild.jpg' => '1',
    'seven.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'glass.jpg|seven.jpg|wild.jpg' => '1',
    'seven.jpg|glass.jpg|wild.jpg' => '1',
    'wild.jpg|glass.jpg|wild.jpg' => '1',
    'wild.jpg|Wristwatch.jpg|wild.jpg' => '1',
    'wild.jpg|ring.jpg|wild.jpg' => '1',
    'wild.jpg|seven.jpg|wild.jpg' => '1',
    'wild.jpg|strickwild.jpg|wild.jpg' => '1',
    'wild.jpg|watermelon.jpg|wild.jpg' => '1',
    'wild.jpg|women.jpg|wild.jpg' => '1',
    'wild.jpg|bell.jpg|wild.jpg' => '1',
    'women.jpg|wild.jpg|wild.jpg' => '3',
    'watermelon.jpg|wild.jpg|wild.jpg' => '3',
    'strickwild.jpg|wild.jpg|wild.jpg' => '3',
    'seven.jpg|wild.jpg|wild.jpg' => '3',
    'ring.jpg|wild.jpg|wild.jpg' => '3',
    'Wristwatch.jpg|wild.jpg|wild.jpg' => '3',
    'glass.jpg|wild.jpg|wild.jpg' => '3',
    'strickwild.jpg|strickwild.jpg|strickwild.jpg' => '30',

);

$wheel1 = array();

foreach($faces as $element)
{
    $wheel1[] = $element;
}

$wheel2 = array_reverse($wheel1);

$wheel3 = $wheel1;
$stop1 = null;
$stop2 = null;
$stop3 = null;
$lose = null;
$credit = null;

if (isset($_POST['submit'])) {
    $start1 = $stop1;
    $start2 = $stop2;
    $start3 = $stop3;
    $total = $_POST['total'];
    $bust = $_POST['bust'];
} else {
    $start1 = 0;
    $start2 = 0;
    $start3 = 0;
    $total = 16;
    $bust = false;
}

if (isset($_POST['reset'])) {
    $start1 = 0;
    $start2 = 0;
    $start3 = 0;
    $total = 16;
    $bust = false;
}


$stop1 = rand(count($wheel1) + $start1, 9 * count($wheel1)) % count($wheel1);
$stop2 = rand(count($wheel1) + $start2, 9 * count($wheel1)) % count($wheel1);
$stop3 = rand(count($wheel1) + $start3, 9 * count($wheel1)) % count($wheel1);

$result1 = $wheel1[$stop1];
$result2 = $wheel2[$stop2];
$result3 = $wheel3[$stop3];

$slot_result = $result1 ."|". $result2 ."|". $result3;

if ($total == 0)
{$bust = true;}

else
{$bust = false;}

if ($bust == true){
    $lose =  "You don't have any money!";
    $result1 = null;
    $result2 = null;
    $result3 = null;
}
else
{
    $res = $result1 . $result2 . $result3;

    if (isset($payouts[$slot_result])){
        $total = $total + $payouts[$slot_result];
        $credit = "You won: $" . $payouts[$slot_result];
    }
    else {
        $total = $total - 1;
        $credit = 'You lost: $1';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slot Machine</title>
    <style>
        img {
            max-width: 10vw;
        }
    </style>
</head>
<body>
    <div> <?php echo "<img src= img/$result1 alt=''>"."<img src= img/$result2 alt=''>"."<img src= img/$result3 alt=''>"; ?></div>
    <div> <?php echo $lose; ?> </div>
    <div> <?php echo $credit; ?> </div>
    <div> Total cash: $ <?php echo $total; ?></div>

    <img src="" alt="">
<form method='post'>
    <input type='submit' name='submit' value='Spin' />
    <input type='hidden' name='total' value='<?php echo $total; ?>' />
    <input type='hidden' name='bust' value='<?php echo $bust; ?>' />
    <input type='submit' name='reset' value='Reset' />
</form>
</body>
</html>