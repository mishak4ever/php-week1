<?php

$keys = ['model', 'speed', 'doors', 'year'];

$bmw = array_combine($keys, ['X5', 120, 5, 2015,]);
$toyota = array_combine($keys, ['Camry', 180, 5, 2018,]);
$opel = array_combine($keys, ['Mocca', 170, 5, 2017,]);

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach ($cars as $name => $car) {
    echo "<br/>CAR {$name}<br/>{$car['model']} {$car['speed']} ­ {$car['doors']} ­ {$car['year']}<br/>";
}
