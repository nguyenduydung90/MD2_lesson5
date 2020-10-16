<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$rec = new Rectangle('rectangle 01', 10, 20);
echo 'Rectangle area: ' . $rec->calculateArea() . '<br>';
echo 'Rectangle perimeter: ' . $rec->calculatePerimeter() . '<br>';

$square = new Square('square 01', 10, 10);
echo 'Square area: ' . $square->calculateArea() . '<br>';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br>';

$circle = new Circle('circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br>';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br>';

$cylinder = new Cylinder('cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br>';
echo 'Cylinder volume: ' . $cylinder->calculateVolume() . '<br>';
?>



