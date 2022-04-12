<?php

 class MotherboardFactory
{
    public static array $motherboard_flyweights;


    public function __construct()
    {
        self::$motherboard_flyweights = [];
    }

    public static function getMotherboardFlyweights($form_factor) {

        foreach (self::$motherboard_flyweights as $motherboard_flyweight) {
            if($motherboard_flyweight->form_factor == $form_factor) {
                echo 'Существующий экземпляр легковеса найден';
                return $motherboard_flyweight;
            }
        }
        echo 'Создался новый экземпляр легковеса';
        $flyweight = new MotherboardFlyweight($form_factor);
        self::$motherboard_flyweights[] = $flyweight;
        return $flyweight;
    }

}