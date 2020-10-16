<?php


class Shape
{
    public $name;

    public function __contruct($_name)
    {
        $this->name = $_name;
    }

    public function show()
    {
        return "I'm shape. My name is " . $this->name;
    }
}