<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return error($a, $b);    
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return error($a, $b);    
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return error($a, $b);
    }
}

function divide($a, $b) {
    if (is_numeric($b) && $b == 0) {
        return "ERROR: Divide by zero";
    } elseif (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        return error($a, $b);
    }
}

function modulus($a, $b) {
    if (is_numeric($b) && $b == 0) {
        return "ERROR: Divide by zero";
    } elseif (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return error($a, $b);
    }
}

function error($a, $b){
    return "ERROR: Both arguments ({$a}, {$b}) must be numbers";
}
// Add code to test your functions here

$a = 80;
$b = 0;

echo "Addition: " . add($a, $b) . PHP_EOL;

echo "Subtraction: " . subtract($a, $b) . PHP_EOL;

echo "Multiplication: " . multiply($a, $b) . PHP_EOL;

echo "Division: " . divide($a, $b) . PHP_EOL;

echo "Modulus: " . modulus($a, $b) . PHP_EOL;
?>