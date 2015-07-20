<?php

function diceware($number) {
    $filename = 'diceware.txt';
    $handle = fopen( $filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    fclose($handle);

    $contentArray = explode(PHP_EOL, $contents);

    foreach ($contentArray as $key => $line) {
        $line = explode(' ', $line);
        $newKey[] = array_shift($line);
        $newLine[] = array_shift($line);
    }
    $newArray = array_combine($newKey, $newLine);

    $wordNumbers = [];

    for ($i = 1; $i <= $number; $i++) {
        $random = [];
        for ($j = 1; $j < 6; $j++) {
            $random[] = mt_rand(1,6);
        }
        
        $wordNumbers[] = implode($random);
    }

    $words = [];
    foreach ($wordNumbers as $key => $wordNum) {
        $words[] = $newArray[$wordNum];
    }
    $words = implode(' ', $words);
    return $words;
}

if ($argc == 1) {
    fwrite(STDOUT, 'How long of a passphrase do you need? ');
    $length = trim(fgets(STDIN));
} else {
    $length = $argv[1];
}

$passphrase = diceware($length);

echo "Your $length word passphrase is \"{$passphrase}\"." . PHP_EOL;

?>