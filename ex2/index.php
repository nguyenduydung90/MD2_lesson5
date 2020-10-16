<?php
include_once 'Point2D.php';
include_once 'Point3D.php';

$point=new Point2D(2,3);
print_r($point->__tooString());
print_r('<br>');
$p3D=new Point3D(3,4,5);
print_r($p3D->getXYZ());