<?php


function palindrome($string) {
    $clearPunc = [',', '!', '?', '.','\'', ':',' '];
    $string = str_replace($clearPunc, '', $string);
    $string = strtolower($string);
    $revString = strrev($string);

    if ($revString == $string) {
        return true;
    } else {
        return false;
    }
}

fwrite(STDOUT, 'String to test? ');
$input = trim(fgets(STDIN));

$test = palindrome($input);

if ($test) {
    echo "\"$input\" is a palindrome." . PHP_EOL;
} else {
    echo "\"$input\" is NOT a palindrome." . PHP_EOL;
}

?>