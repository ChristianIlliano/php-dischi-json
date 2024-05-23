<?php

$list_string = file_get_contents("dischi.json"); // qui è stringa

// var_dump($list);
// Qui diventa array
$list = json_decode($list_string, true);

// Compongo i dati del responce
$responce_data = [
    "result" => $list
    
];
// Qui i dati diventano stringa json
$json_list = json_encode($responce_data );
// Qui dico al browser che arriverà json
header("Content-Type: application/json");
echo $json_list; 

?>
