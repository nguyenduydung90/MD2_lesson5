<?php
include_once 'Shape.php';

class Circle extends Shape
{
    public $radius;

    public function __construct($_name, $_radius)
    {
        parent::__contruct($_name);
        $this->radius = $_radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}