<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing) {

echo PHP_EOL;

    if (is_scalar($thing)) {
        if ($thing == false) {
            echo "false is a scalar" . PHP_EOL;
        } else {
            echo "$thing is a scalar" . PHP_EOL;
        }
    }

    if (is_int($thing)) {
        echo "$thing is an integer" . PHP_EOL;
    } elseif (is_float($thing)) {
        echo "$thing is a float" . PHP_EOL;
    } elseif (is_bool($thing)) {
        if ($thing == false) {
            $thing = 'false';
        } else {
            $thing = 'true';
        }
        echo "$thing is a boolean" . PHP_EOL;
    } elseif (is_array($thing)) {
        $thing = implode(", ", $thing);
        echo "[$thing] is an array" . PHP_EOL;
    } elseif (is_null($thing)) {
        echo "$thing is null" . PHP_EOL;
    } elseif (is_string($thing)) {
        echo "$thing is a string" . PHP_EOL;
    }
};

echo PHP_EOL;

?>