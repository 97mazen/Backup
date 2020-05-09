<?php

$Array = array("een","twee",3,"vier");
array_push($Array, 5);
for ($res= 0; $res< count($Array); $res++) {
    echo   $Array[$res] . ", ";
}

echo '<br>';
echo gettype($Array[4]);
echo '<br>';
array_pop($Array);
for ($res= 0; $res< count($Array); $res++) {
    echo   $Array[$res] . ", ";
}
echo '<br>';
array_unshift($Array, 'nul');
for ($res= 0; $res< count($Array); $res++) {
    echo   $Array[$res] . ", ";
}
echo '<br>';
//unset($Array);
echo gettype($Array[0]);
echo '<br>';

$removed = array_shift($Array);
for ($res= 0; $res< count($Array); $res++) {
    echo   $Array[$res] . ", ";
}
echo '<br>';
unset($Array[1]);
print_r($Array);
echo '<br>';
unset($Array[2]);
print_r($Array);