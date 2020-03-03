<?php

echo "welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
$ding = readline();

echo "Eerste Getal?" . PHP_EOL;
$eersteGetal = readline();

echo "Tweede Getal?" . PHP_EOL;
$tweedeGetal = readline();

if($ding == "+"){
    $resultaat = $eersteGetal + $tweedeGetal;
} elseif($ding == "-") {
    $resultaat = $eersteGetal - $tweedeGetal;
}

echo "het resultaat is:" . $resultaat;