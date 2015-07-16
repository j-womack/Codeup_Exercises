<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

echo "Companies array: " . PHP_EOL;
print_r($companies);
echo PHP_EOL;

echo "Companies array sorted by company: " . PHP_EOL;
ksort($companies);
print_r($companies);
echo PHP_EOL;

foreach ($companies as $key => $people){
    asort($people);
    $companies[$key] = $people;
}

echo "People sorted: " . PHP_EOL;
print_r($companies);
echo PHP_EOL;


arsort($companies);
echo "Sorted by size:  " . PHP_EOL;
print_r($companies);

