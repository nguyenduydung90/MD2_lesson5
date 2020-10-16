<?php
include_once 'Shape.php';

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($_name, $_width, $_height)
    {
        parent::__contruct($_name);
        $this->width = $_width;
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}