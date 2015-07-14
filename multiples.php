<?php
$array = [];
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0){
        array_push($array, $i);    
    }
}
echo array_sum($array) . PHP_EOL;
?>