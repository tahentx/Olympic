<?php

require_once('Rectangle.php');
require_once('Square.php');

// $square = new Square(9);
// echo $square->area() . PHP_EOL;

$Square = new Square(5,5);

// $Rectangle = new Rectangle (5,5);

echo 'The perimeter of this square is' . ' ' . $Square->perimeter(6,6) . PHP_EOL;



var_dump($Square->perimeter);
