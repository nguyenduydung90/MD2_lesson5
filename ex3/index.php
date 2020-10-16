<?php
include_once 'Point.php';
include_once 'MovablePoint.php';

$mova=new MovablePoint(2,3,50,34);
print_r($mova->toString());
print_r('<br>');
print_r($mova->move());

