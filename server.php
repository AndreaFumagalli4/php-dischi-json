<?php

$jsonData = file_get_contents(__DIR__ . '/db/dischi.json');

$decodedJson = json_decode($jsonData, true);

if ($decodedJson != null) {
    $discsList = $decodedJson;
}

echo $jsonData;
