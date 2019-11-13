<?php
// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
$boomer = $argv[1];
var_dump($boomer);
$largeMilkshake = intval(floor($boomer));
$smolMilkshake = intval(round(($boomer - $largeMilkshake) * 100));

// Constantinopel Arrayicuz
$boi = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

// Honey loops met 4 granen en honing
foreach ($boi as $yeet) {
    if ($boomer >= $yeet) {
        $moneh = floor($boomer / $yeet);
        $boomer %= $yeet;
        echo "$moneh x €$yeet euro" . PHP_EOL;
    }
};

// Centicus Autismus
$gorl = array(
    50,
    20,
    10,
    5,
    2,
    1,
);

// Kinecct
$leftovers = $smolMilkshake;
foreach ($gorl as $rich) {
    if ($leftovers >= $rich) {
        $muniez = floor($leftovers / $rich);
        $leftovers %= $rich;
        echo "$muniez x €$rich cent" . PHP_EOL;
    }
}