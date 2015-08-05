<?php  

require_once('rectangle.php');
require_once('square.php');

$rectangle1 = new Rectangle(6,3);
echo 'Rectangle 1 area: ' . $rectangle1->area() . PHP_EOL;
echo 'Rectangle 1 perimeter: ' . $rectangle1->perimeter() . PHP_EOL . PHP_EOL;


$rectangle2 = new Rectangle(100,5);
echo 'Rectangle 2 area: ' . $rectangle2->area() . PHP_EOL;
echo 'Rectangle 2 perimeter: ' . $rectangle2->perimeter() . PHP_EOL . PHP_EOL;

$rectangle3 = new Rectangle(2345345,257856);
echo 'Rectangle 3 area: ' . $rectangle3->area() . PHP_EOL;
echo 'Rectangle 3 perimeter: ' . $rectangle3->perimeter() . PHP_EOL . PHP_EOL;

$square1 = new Square(1344);
echo 'Square 1 area: ' . $square1->area() . PHP_EOL;
echo 'Square 1 perimeter: ' . $square1->perimeter() . PHP_EOL . PHP_EOL;

$square2 = new Square(290);
echo 'Square 2 area: ' . $square2->area() . PHP_EOL;
echo 'Square 2 perimeter: ' . $square2->perimeter() . PHP_EOL . PHP_EOL;

$square3 = new Square(3);
echo 'Square 3 area: ' . $square3->area() . PHP_EOL;
echo 'Square 3 perimeter: ' . $square3->perimeter() . PHP_EOL . PHP_EOL;



?>