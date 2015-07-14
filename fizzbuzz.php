<?php  

if ($argc == 3) {
    $lowerBound = $argv[1];
    $upperBound = $argv[2];
} else {
    fwrite(STDOUT, 'Choose a lower bound? ');
    $lowerBound = trim(fgets(STDIN));

    fwrite(STDOUT, 'Choose an upper bound? ');
    $upperBound = trim(fgets(STDIN));
}

if ($lowerBound >= $upperBound){
    $lowerBound = $lowerBound + $upperBound;
    $upperBound = $lowerBound - $upperBound;
    $lowerBound = $lowerBound - $upperBound;
}

//          With a For loop

// for ($i = $lowerBound; $i <= $upperBound; $i++) {
//     if (($i % 3 == 0) && ($i % 5 == 0)) {
//         echo "Fizz Buzz" . PHP_EOL;
//     } elseif ($i % 3 == 0) {
//         echo "Fizz" . PHP_EOL;
//     } elseif ($i % 5 == 0) {
//         echo "Buzz" . PHP_EOL;
//     } else {
//         echo "$i" . PHP_EOL;
//     }
// }

//          With a While loop

$i = $lowerBound;
while ($i <= $upperBound){
    if (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "Fizz Buzz" . PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    } else {
        echo "$i" . PHP_EOL;
    }
    $i++;
}


?>