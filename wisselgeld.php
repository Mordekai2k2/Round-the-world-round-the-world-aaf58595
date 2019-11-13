<?php
// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
$boomer = $argv[1];
$okboomer = round(($boomer * 100) / 5) * 5 / 100;
$largeMilkshake = intval(floor($okboomer));
$smolMilkshake = intval(round(($okboomer - $largeMilkshake) * 100));

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
    if ($okboomer >= $yeet) {
        $moneh = floor($okboomer / $yeet);
        $okboomer %= $yeet;
        echo "$moneh x €$yeet euro" . PHP_EOL;
    }
};

// Centicus Autismus
$gorl = array(
    50,
    20,
    10,
    5,
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