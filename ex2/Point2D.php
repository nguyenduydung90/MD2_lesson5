<?php


class Point2D
{
    public $x;
    public $y;

    public function __construct($_x, $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }


    public function getX()
    {
        return $this->x;
    }


    public function setX($x)
    {
        $this->x = $x;
    }


    public function getY()
    {
        return $this->y;
    }


    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function getXY()
    {
        return [$this->x,$this->y];
    }

    public function __tooString()
    {
        return $this->getXY();
//        return "Tọa độ là: [".$this->x.','.$this->y.']';
    }

}
//$point=new Point2D(2,3);
//print_r($point->__tooString());
