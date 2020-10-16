<?php


class Point
{
public $x;
public $y;
public function __construct($_x,$_y)
{
    $this->x=$_x;
    $this->y=$_y;
}

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY()
    {
        return [$this->x,$this->y];
}

    public function setXY($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
}

    public function __tooString()
    {
        return $this->getXY();
}
}