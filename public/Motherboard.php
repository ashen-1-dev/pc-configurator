<?php

class Motherboard
{
    public $name;
    public $price;
    public MotherboardFlyweight $motherboard_flyweight;


    public function __construct($name, $price, $motherboard_flyweight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->motherboard_flyweight = $motherboard_flyweight;
    }

    public function show() {
        return $this->motherboard_flyweight->show($this->name, $this->price);
    }
}