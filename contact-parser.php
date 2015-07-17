<?php

function parseContacts($filename)
{
    $contacts = [];
    $keys = ['name', 'number'];
    $handle = fopen( $filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contentsArray = explode("\n", $contents);
    // $contentsArray = array_fill_keys($keys);
    print_r($contentsArray);
    fclose($handle);

    foreach($contentsArray as $key => $content) {
        $content = explode("|", $content);


        $content[1] = str_split($content[1], 3);
        $content[1][2] = $content[1][2] . $content[1][3];
        array_pop($content[1]);
        $content[1] = implode("-", $content[1]);

        $content = array("name" => $content[0], "number" => $content[1]);

        $contentsArray[$key] = $content;
    }

    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));
