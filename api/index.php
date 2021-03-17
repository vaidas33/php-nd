<?php
$dist = 0;
define('API', 'https://www.distance24.org/route.json?stops=');

$city1 = 'Vilnius';
$city2 = 'Zarasai';
// serverio vidus

$curl=curl_init();
curl_setopt($curl, CURLOPT_URL, API.$city1.'|'.$city2); // nueiti paiimti
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); // parnesti duomenis

$answer = curl_exec($curl); // siunciame uzklausa, laukiame... atsakyma irasome i answer

curl_close($curl);

$answer = json_decode($answer);

_d($answer);
_d($answer->stops[0]->wikipedia->image);

$dist = $answer->distance;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API DISTANCE-24</title>
</head>
<body>

<h2>Atstumas: <?= $dist ?> km</h2>
<img style="width: 400px;" src="<?= $answer->stops[0]->wikipedia->image ?>">
<img style="width: 400px;" src="<?= $answer->stops[1]->wikipedia->image ?>">
    
</body>
</html>