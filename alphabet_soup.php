<?php

function alphaSoup ($string) {
    $xString = explode(' ', $string);

    foreach ($xString as $key => $piece){
        $split = str_split($piece);
        sort($split);
        $split = implode('', $split);
        $xString[$key] = $split;

    }
    return implode(' ', $xString);

    print_r($xString);

}

$test = 'otherwise each chunk will be one character in length';

$alpha = alphaSoup($test);

echo "\"{$test}\" rearranges to \"{$alpha}\"." . PHP_EOL;
?>