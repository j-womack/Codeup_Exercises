<?php

function humanizedList($array, $alpha = false) {
    if ($alpha){
        sort($array);
    } 
    $hold = array_pop($array);
    $hold = "and $hold";
    array_push($array, $hold);
    $string = implode(', ', $array);
    return $string;
}

$physString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physArray = explode(', ', $physString);

$famousFakePhys = humanizedList($physArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhys}." . PHP_EOL;
?>