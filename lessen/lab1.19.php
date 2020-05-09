<?php
$vandaag = new DateTime("now");
echo "<br>VANDAAG timestamp: " . $vandaag->getTimestamp();

$eenDag = 86400;
$begin2000= DateTime::createFromFormat("d/m/Y" , "1/1/2000");
$eind2000= DateTime::createFromFormat("d/m/Y" , "31/12/2000");
$begin = $begin2000->getTimestamp();
$einde = $eind2000->getTimestamp();
$dagenIn2000 = ($einde - $begin) / $eenDag;
echo "<br>Aantaal dagen in 2000: " . $dagenIn2000;

$datum = new DateTime("2000-01-01");
echo "<br>Begindatum: " . $datum->format("Y-m-d");
$datum->add(new DateInterval("P10D"));
echo "<br>Tien dagen toevoegen: " . $datum->format("Y-m-d");
$datum->sub(new DateInterval("P10D"));
echo "<br>Tien dagen weghalen: " . $datum->format("Y-m-d");

$format = '%A %d %B %Y %H:%M:%S';
$getformatteerde_datum = strftime($format);
echo "<br>Geformatteerde datum: " . $getformatteerde_datum;

setlocale(LC_TIME, "NL_NL");
$ned = strftime($format);
echo "<br>In het Nederlands: " . $ned;

$datum = date_create("2000-01-01");
echo "<br>Datum formatteren: " . date_format($datum, "Y-m-d");
echo "<br>Datum formatteren: " . date_format($datum, "d-m-Y");

$factuurdatum = date_create("2018-10-10");
echo "<br>Factuurdatum: " . date_format($factuurdatum, "Y-m-d");
$vandaag = date_create("now");
echo "<br>Vandaag: " . date_format($vandaag, "Y-m-d");
$interval = date_diff($vandaag, $factuurdatum);
echo "<br>U heeft nog: " . $interval->format("%R%a dagen om te betalen");

$vandaag = date_create("now");
echo "<br>Vandaag is: " . $ned;
$kerstdatum = date_create("2020-12-25");
$Interval = date_diff($vandaag, $kerstdatum);
echo "<br>U heeft nog: " . $Interval->format("%R%a dagen tot kerst");