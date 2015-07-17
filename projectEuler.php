<?php
// 001
// If we list all the natural numbers below 10 that are multiples of 3 or 5, 
// we get 3, 5, 6 and 9. The sum of these multiples is 23.
// Find the sum of all the multiples of 3 or 5 below 1000.

// $array = [];
// for ($i = 1; $i < 1000; $i++) {
//     if ($i % 3 == 0 || $i % 5 == 0){
//         array_push($array, $i);    
//     }
// }
// echo array_sum($array) . PHP_EOL;



// 002
// Each new term in the Fibonacci sequence is generated by adding the previous two terms. 
// By starting with 1 and 2, the first 10 terms will be:
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
// By considering the terms in the Fibonacci sequence whose values do not 
// exceed four million, find the sum of the even-valued terms.

// $sum = 0;
// $array = [1,2];
// $n = 1;
// do {
//     array_push($array, ($array[$n-1] + $array[$n]));
//     $n++;
// } while (end($array) < 4000000);

// foreach ($array as $number) {
//     if ($number % 2 ==0){
//         $sum += $number;
//     }
// }
// echo $sum . PHP_EOL;



// 003
// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?

// $n = 600851475143;
// $array = [];

// function pfactor($n){
//     // max_n = 2^31-1 = 2147483647
//     $d=2;
//     $factors = array();
//     $dmax = floor(sqrt($n));
//     $sieve = array();
//     $sieve = array_fill(1, $dmax,1);
//     do{
//         $r = false;
//         while ($n%$d==0){
//             $factors[$d]++;
//             $n/=$d;
//             $r = true;
//         }
//         if ($r){
//             $dmax = floor(sqrt($n));
//         }
//         if ($n>1){
//             for ($i=$d;$i<=$dmax;$i+=$d){
//                 $sieve[$i]=0;
//             }
//             do{
//                 $d++;
//             }while ($sieve[$d]!=1 && $d<$dmax);
//             if ($d>$dmax){
//                 $factors[$n]++;
//             }
//         }
//     }while($n>1 && $d<=$dmax);
//     return $factors;
// }

// print_r(pfactor($n));


// 004
// A palindromic number reads the same both ways. 
// The largest palindrome made from the product of 
// two 2-digit numbers is 9009 = 91 × 99.

// Find the largest palindrome made from the product 
// of two 3-digit numbers.

// $array = [];

// for ($i = 500; $i < 1000; $i++){
//     for ($j = 500; $j < 1000; $j++){
//         $palindrome = $i * $j;
//         $test = str_split(strval($palindrome), 1);
//         if ($test[0] == $test[5] && $test[1] == $test[4] && $test[2] == $test[3]) {
//             array_push($array, $palindrome);
//         }
//     }
// }

// print_r(max($array));



// 005
// 2520 is the smallest number that can be divided by 
// each of the numbers from 1 to 10 without any remainder.

// What is the smallest positive number that is evenly 
// divisible by all of the numbers from 1 to 20?

 // $n = 2520;

 // do {
 //    $n++;
 //    // echo $n;
 //    if ($n % 11 == 0){
 //        if ($n % 12 == 0){
 //            if ($n % 13 == 0) {
 //                if ($n % 14 == 0){   
 //                    if ($n % 15 == 0){
 //                        if ($n % 16 == 0) {
 //                            if ($n % 17 == 0) {
 //                                if ($n % 18 == 0) {
 //                                    if ($n % 19 == 0) {
 //                                        if ($n % 20 == 0) {   
 //                                        echo $n;
 //                                        }
 //                                    }
 //                                }
 //                            }
 //                        }
 //                    }
 //                }
 //            }
 //        }
 //    }
 // } while ($n < 1000000000)




// 006
// The sum of the squares of the first ten natural 
// numbers is,
// 1^2 + 2^2 + ... + 10^2 = 385

// The square of the sum of the first ten natural 
// numbers is,
// (1 + 2 + ... + 10)^2 = 552 = 3025

// Hence the difference between the sum of the 
// squares of the first ten natural numbers and 
// the square of the sum is 3025 − 385 = 2640.

// Find the difference between the sum of the squares 
// of the first one hundred natural numbers and the 
// square of the sum.

// $sumSquare = 0;
// $sum = 0;

// for ($i = 1; $i <=100; $i++){
//     $number = $i * $i;
//     $sumSquare += $number;
// }

// for ($i = 1; $i <=100; $i++){
//     $sum += $i;
// }

// echo ($sum * $sum) - $sumSquare;




// 007
// By listing the first six prime numbers: 
// 2, 3, 5, 7, 11, and 13, 
// we can see that the 6th prime is 13.

// What is the 10001st prime number?

// $primes = array();

// $x = 2;
// do {
//     $xIsPrime = TRUE;
//     $sqrtX = sqrt($x);
//     foreach ($primes as $prime) if ($prime > $sqrtX || ((!($x % $prime)) && (!$xIsPrime = FALSE))) break;
//     if ($xIsPrime){
//         $primes[] = $x;
//         // print_r($primes);
//     }
//     $x++;
// } while (count($primes) <= 10000);

// print_r($primes);






// 008
// The four adjacent digits in the 1000-digit number that 
// have the greatest product are 9 × 9 × 8 × 9 = 5832.

// 73167176531330624919225119674426574742355349194934
// 96983520312774506326239578318016984801869478851843
// 85861560789112949495459501737958331952853208805511
// 12540698747158523863050715693290963295227443043557
// 66896648950445244523161731856403098711121722383113
// 62229893423380308135336276614282806444486645238749
// 30358907296290491560440772390713810515859307960866
// 70172427121883998797908792274921901699720888093776
// 65727333001053367881220235421809751254540594752243
// 52584907711670556013604839586446706324415722155397
// 53697817977846174064955149290862569321978468622482
// 83972241375657056057490261407972968652414535100474
// 82166370484403199890008895243450658541227588666881
// 16427171479924442928230863465674813919123162824586
// 17866458359124566529476545682848912883142607690042
// 24219022671055626321111109370544217506941658960408
// 07198403850962455444362981230987879927244284909188
// 84580156166097919133875499200524063689912560717606
// 05886116467109405077541002256983155200055935729725
// 71636269561882670428252483600823257530420752963450

// Find the thirteen adjacent digits in the 1000-digit 
// number that have the greatest product. What is the 
// value of this product?

// $bigNum1 = str_split('7316717653133');
// $bigNum2 = str_split('6249192251196744265747423553491949349698352');
// $bigNum3 = str_split('6326239578318');
// $bigNum4 = str_split('18694788518438586156');
// $bigNum5 = str_split('7891129494954595');
// $bigNum6 = str_split('17379583319528532');
// $bigNum7 = str_split('698747158523863');
// $bigNum8 = str_split('435576689664895');
// $bigNum9 = str_split('4452445231617318564');
// $bigNum10 = str_split('987111217223831136222989342338');
// $bigNum11 = str_split('81353362766142828064444866452387493');
// $bigNum12 = str_split('1724271218839987979');
// $bigNum13 = str_split('9377665727333');
// $bigNum14 = str_split('594752243525849');
// $bigNum15 = str_split('632441572215539753697817977846174');
// $bigNum16 = str_split('86256932197846862248283972241375657');
// $bigNum17 = str_split('79729686524145351');
// $bigNum18 = str_split('6585412275886668811642717147992444292823');
// $bigNum19 = str_split('863465674813919123162824586178664583591245665294765456828489128831426');
// $bigNum20 = str_split('82325753042075296345');

// $bigNumArray = [$bigNum2, $bigNum3, $bigNum4, $bigNum5, $bigNum6, $bigNum7, $bigNum8, $bigNum9, $bigNum10, $bigNum11, $bigNum12, $bigNum13, $bigNum14, $bigNum15, $bigNum16, $bigNum17, $bigNum18, $bigNum19, $bigNum20];

// $product = array_product($bigNum1);
// echo $product;

// foreach($bigNumArray as $bigNum) {
//     do {
//         $middle = implode(array_slice($bigNum, 0, 13));
//         echo $middle . PHP_EOL;
//         $newProduct = array_product(array_slice($bigNum, 0, 13));
//         if ($newProduct > $product){
//             $product = $newProduct;
//             echo "Product: $product" . PHP_EOL;
//         }
//         array_shift($bigNum); 

//     } while (count($bigNum) >= 13);
//     echo PHP_EOL;
// }




// 009
// A Pythagorean triplet is a set of three 
// natural numbers, a < b < c, for which,

// a^2 + b^2 = c^2
// For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.

// There exists exactly one Pythagorean triplet 
// for which a + b + c = 1000.
// Find the product abc.

// for ($a = 1; $a < 1000; $a++){
//     for ($b = 1; $b < 1000; $b++){
//         for ($c = 1; $c < 1000; $c++){
//             if ((pow($a, 2)+pow($b, 2)) == pow($c, 2)){
//                 if ($a + $b + $c == 1000){
//                     echo $a * $b * $c . PHP_EOL;
//                 }
//             }
//         }
//     }
// }




// 010
// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

// Find the sum of all the primes below two million.

// $primes = array();

// $x = 2;
// do {
//     $xIsPrime = TRUE;
//     $sqrtX = sqrt($x);
//     foreach ($primes as $prime) if ($prime > $sqrtX || ((!($x % $prime)) && (!$xIsPrime = FALSE))) break;
//     if ($xIsPrime){
//         $primes[] = $x;
//         // print_r($primes);
//     }
//     $x++;
// } while (end($primes) <= 1999992);

// echo array_sum($primes) . PHP_EOL;





?>