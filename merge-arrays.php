<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray ($name, $names) {
    $result = array_search($name, $names);
    if ($result !== false) {
        return true;
    } else {
        return false;
    }
}

function arrayCompare ($array1, $array2) {
    $count = 0;

    foreach ($array1 as $value){
        if(isInArray($value, $array2)) {
            $count++;
        }
    }
    return $count;
}

function combineArrays ($array1, $array2) {
    $combinedArray = [];

    foreach ($array1 as $value1){
        $combinedArray[] = $value1;
        if (isInArray($value1, $array2)) {
            array_shift($array2);
        } else {
            $combinedArray[] = $array2[0]; 
            array_shift($array2);
        }
    }
    return $combinedArray;
}


if(isInArray('Tina', $names)){
    echo "Tina is in the array." . PHP_EOL;
} else {
    echo "Tina is not in the array." . PHP_EOL;
}

if(isInArray('Bob', $names)){
    echo "Bob is in the array." . PHP_EOL;
} else {
    echo "Bob is not in the array." . PHP_EOL;
}

$count = arrayCompare($names, $compare);
echo "There are $count elements in common." . PHP_EOL;

$combinedArray = combineArrays($names, $compare);
echo "Here is the combined array: " . PHP_EOL;
print_r($combinedArray);