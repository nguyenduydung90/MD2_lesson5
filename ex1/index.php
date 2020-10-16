<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$cir= new Circle('circle 01',2,'black');
echo $cir.'<br>';
$cyl=new Cylinder('cylinder 01',3,'red',4);
echo $cyl;
