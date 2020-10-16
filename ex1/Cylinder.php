<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public $height;

    public function __construct($_name, $_radius, $_color, $_height)
    {
        parent::__construct($_name, $_radius, $_color);
        $this->height = $_height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        echo "Cylinder name is: ".$this->name.'<br>'.'radius is: '.$this->radius.'<br>'.'Color is: '.$this->color.'<br>'.'Volume is: '.$this->calculateVolume();

    }
}


