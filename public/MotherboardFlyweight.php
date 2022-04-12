<?php

class MotherboardFlyweight
{
    public $form_factor;

    public function __construct($form_factor)
    {
        $this->form_factor = $form_factor;
    }

    public function show($name , $price) {
        return [
            'name' => $name,
            'price' => $price,
            'form_factor' => $this->form_factor,
        ];
    }
}