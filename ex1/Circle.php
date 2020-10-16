<?php


class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($_name, $_radius, $_color)
    {
        $this->name = $_name;
        $this->radius = $_radius;
        $this->color = $_color;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setRadius($radius)
    {
        $this->radius=$radius;
    }

    public function setColor($color)
    {
        $this->color=$color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function __toString()
    {
        return "Circle name is: ".$this->name.'<br>'.'radius is: '.$this->radius.'<br>'.'Color is: '.$this->color.'<br>'.' Area is: '.$this->calculateArea();
        // TODO: Implement __toString() method.
    }
}

