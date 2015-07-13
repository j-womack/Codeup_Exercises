<?php  

$test = 5;
$first = 3;
$second = 2;

while ($test <= 15){

    if ($test % $second == 0 && $test % $first == 0){    
        echo "{$test} is divisible by {$second} and {$first}" . PHP_EOL;
    } else if ($test % $second == 0) {
        echo "{$test} is divisible by {$second}" . PHP_EOL;
    } else if ($test % $first == 0) {
        echo "{$test} is divisible by {$first}" . PHP_EOL;
    } else {
        echo $test . PHP_EOL;
    }

    $test++;
}

?>