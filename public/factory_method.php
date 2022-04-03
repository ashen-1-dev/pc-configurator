<?php


abstract class Component
{

}

abstract class ComponentCreator
{
    abstract public function create();
}

class VideocardCreator extends ComponentCreator
{
    public function create()
    {
        return new Videocard();
    }
}

class Videocard
{
    public $name;
    public $size;
}

$videcard_creator = new VideocardCreator();
$videocard = $videcard_creator->create();
$videocard->name = 'RTX 3060 Ti';
$videocard->size = 12;
echo '<pre>' . var_export($videocard, true) . '</pre>';


