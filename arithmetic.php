<?php

function add($a, $b)
{
    echo $a + $b;
}

function subtract($a, $b)
{
    echo $a - $b;
}

function multiply($a, $b)
{
    echo $a * $b;
}

function divide($a, $b)
{
    echo $a / $b;
}

function modulus($a, $b)
{
    echo $a % $b;
}
// Add code to test your functions here

$a = 80;
$b = 20;

add($a, $b);
echo PHP_EOL;

subtract($a, $b);
echo PHP_EOL;

multiply($a, $b);
echo PHP_EOL;

divide($a, $b);
echo PHP_EOL;

modulus($a, $b);
echo PHP_EOL;