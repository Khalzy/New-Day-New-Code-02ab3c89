<?php

$bedrag = $argv[1];


const GELDEENHEID = array(
    50,
    20,
    10,
    5,
    2,
    1,
);

$restbedrag = $bedrag;

foreach (GELDEENHEID as $geld) {
    while ($restbedrag >= $geld) {
        if (floor($restbedrag / $geld)) {
            $count = floor($restbedrag / $geld);
            $restbedrag = floor($restbedrag % $geld);
            echo $count . " X $geld euro" . PHP_EOL;
        }
    }
}
