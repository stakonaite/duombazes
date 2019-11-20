<?php


namespace animal;


class Animals
{
    public $name;
    public $color;
    public $legs;

    public function __construct($name, $color, $legs)
    {
        $this->name = $name;
        $this->color = $color;
        $this->legs = $legs;
    }

}