<?php

$playlist = array(
    array("genre"=> "Hiphop", "auteur" => "John Williams",
        "titel" => "My Girl"),
    array("genre" => "Jazz", "auteur" => "Jhon Coltrane",
        "titel" => "New york"),
    array("genre" => "Hiphop", "auteur" => "Shakira",
        "titel" => "Obsession")
);
$c= 0;
function printTracks ( $genre, $key) {
    global $c;
    if ($key === 'genre'){
        echo '<br>Track' . $c . ': ' . $genre . ' | ';
        $c++;
    }else {
        echo $genre. ' | ';
    }
}
$Playlist = array(
    array('genre' => "latin", "auteur" => " Caetano Veloso", "titel" => "cafe Atlantico")
);
$playlist = array_merge($playlist, $Playlist);
array_walk_recursive($playlist, "printTracks");
