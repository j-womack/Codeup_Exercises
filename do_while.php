<?php  

$a = 0;

echo "Counting by twos..." . PHP_EOL;
do {
    echo $a . PHP_EOL;
    $a += 2;
} while ($a <= 100);

$b = 100;

echo "Counting backwards by fives..." . PHP_EOL;
do {
    echo $b . PHP_EOL;
    $b -= 5;
} while ($b >= -10);

$c = 2;

echo "Counting squared..." . PHP_EOL;
do {
    echo $c . PHP_EOL;
    $c *= $c;
} while ($c <= 1000000);

?>