<?php

$jsonData = file_get_contents(__DIR__ . '/db/dischi.json');

$decodedJson = json_decode($jsonData, true);

if ($decodedJson != null) {
    $discsList = $decodedJson;
}

$discsList = json_encode($discsList);

header('Content-Type: application/json');

echo $discsList;